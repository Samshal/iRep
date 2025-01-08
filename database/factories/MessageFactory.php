<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use App\Models\Message;

class MessageFactory
{
    protected $db;

    public function __construct($db = null)
    {
        $this->db = $db ?: DB::connection()->getPdo();
    }

    public function insertMessage($data)
    {
        $query = "
		INSERT INTO messages
		(sender_id, receiver_id, message, sent_at)
		VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $data['sender_id'],
            $data['receiver_id'],
            $data['message'],
            $data['sent_at'],
        ]);

        $result = $this->db->lastInsertId();

        return new Message($result, $data);
    }

    public function getMessages($receiverId, $senderId, $criteria = [])
    {
        $page = isset($criteria['page']) ? (int) $criteria['page'] : 1;
        $pageSize = isset($criteria['page_size']) ? (int) $criteria['page_size'] : 10;

        $offset = ($page - 1) * $pageSize;

        $query = "
        SELECT s.id, s.message, sender.id AS sender_id, sender.name AS sender_name,
			receiver.id AS receiver_id, receiver.name AS receiver_name, s.sent_at,
			s.read_at, s.edited_at
        FROM messages s
        INNER JOIN accounts AS sender ON s.sender_id = sender.id
        INNER JOIN accounts AS receiver ON s.receiver_id = receiver.id
        WHERE (s.sender_id = ? AND s.receiver_id = ?)
        OR (s.sender_id = ? AND s.receiver_id = ?)
        ORDER BY s.sent_at DESC
        LIMIT ? OFFSET ?";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$senderId, $receiverId, $receiverId, $senderId, $pageSize, $offset]);

        return $stmt->fetchAll();
    }

    public function getUnreadMessages($receiverId)
    {
        $query = "SELECT s.id, s.message, sender.id AS sender_id, sender.name AS sender_name,
			receiver.id AS receiver_id, receiver.name AS receiver_name, s.sent_at,
			s.read_at, s.edited_at
            FROM messages s
            INNER JOIN accounts AS sender ON s.sender_id = sender.id
            INNER JOIN accounts AS receiver ON s.receiver_id = receiver.id
            WHERE s.receiver_id = ? AND s.read_at IS NULL";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$receiverId]);

        return $stmt->fetchAll();
    }

    public function getUsersChattedWith($userId, $criteria = [])
    {
        $page = isset($criteria['page']) ? (int) $criteria['page'] : 1;
        $pageSize = isset($criteria['page_size']) ? (int) $criteria['page_size'] : 10;
        $offset = ($page - 1) * $pageSize;

        $query = "
			SELECT
				u.id,
				u.name,
				u.photo_url,
				lm.message AS last_message,
				lm.sent_at AS last_message_sent_at,
				COUNT(m.id) AS unread_messages_count
			FROM accounts u
			LEFT JOIN (
				SELECT
					CASE
						WHEN sender_id = ? THEN receiver_id
						ELSE sender_id
					END AS other_user_id,
					message,
					sent_at
				FROM messages
				WHERE (sender_id = ? AND receiver_id != ?)
				   OR (receiver_id = ? AND sender_id != ?)
				ORDER BY sent_at DESC
				LIMIT 1
			) lm ON lm.other_user_id = u.id
			LEFT JOIN messages m ON
				m.receiver_id = ? AND m.read_at IS NULL AND m.sender_id = u.id
			WHERE u.id != ? AND lm.other_user_id IS NOT NULL
			GROUP BY u.id, lm.message, lm.sent_at, u.name, u.photo_url
			ORDER BY lm.sent_at DESC
			LIMIT ? OFFSET ?
		";

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $userId, $userId, $userId, $userId, $userId,
            $userId, $userId, $pageSize, $offset
        ]);

        $results = $stmt->fetchAll();

        return array_map(function ($result) {
            return [
                'id' => $result['id'],
                'name' => $result['name'],
                'photo_url' => $result['photo_url'],
                'last_message' => $result['last_message'],
                'last_message_sent_at' => $result['last_message_sent_at'],
                'unread_messages_count' => $result['unread_messages_count'],
            ];
        }, $results);
    }

    public function markAsRead($receiverId)
    {
        $query = "
			UPDATE messages
			SET read_at = NOW()
			WHERE receiver_id = ? AND read_at IS NULL
		";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$receiverId]);
    }

    public function deleteMessage($id)
    {
        $query = "DELETE FROM messages WHERE id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}
