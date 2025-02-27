<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Admin\Factories\AdminFactory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    protected $adminFactory;

    public function __construct(AdminFactory $adminFactory)
    {
        $this->adminFactory = $adminFactory;
    }

    /**
     * Create a new admin.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|unique:admins,username',
            'password' => 'required|string|min:8',
            'permissions' => 'array',
            'permissions.*' => 'integer|exists:permissions,id',
        ]);

        $admin = $this->adminFactory->createAdmin($validatedData);

        return response()->json([
            'message' => 'Admin created successfully.',
            'admin_id' => $admin,
        ], 201);
    }

    public function createAccount(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'gender' => 'nullable|in:male,female,other',
            'dob' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'state_id' => 'nullable|integer|exists:states,id',
            'local_government_id' => 'nullable|integer|exists:local_governments,id',
            'polling_unit' => 'nullable|string|max:255',
            'kyc.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,flv,wmv,3gp,webm|max:20480',
            'email_verified' => 'nullable|boolean',
            'status' => 'nullable|in:active,suspended',
            'kyced' => 'nullable|boolean',
            'account_type' => 'nullable|integer|in:1,2',
            'sworn_in_date' => 'nullable|date',
            'position_id' => 'nullable|integer|exists:positions,id',
            'constituency_id' => 'nullable|integer|exists:constituencies,id',
            'district_id' => 'nullable|integer',
            'party_id' => 'nullable|integer|exists:parties,id',
            'social_handles' => 'nullable|array',
            'bio' => 'nullable|string',
            'proof_of_office.*' => 'nullable|file|mimes:jpeg,png,jpg,svg,pdf,doc,mp4,mov,avi|max:20480',
        ]);

        $validatedData['account_type'] = $validatedData['account_type'] ?? 2;
        $validatedData['social_handles'] = $validatedData['social_handles'] ?? [];

        if ($request->hasFile('kyc')) {
            $kycFiles = $request->file('kyc');
            $validated['kyc'] = is_array($kycFiles) ? $kycFiles : [$kycFiles];
        } else {
            $validated['kyc'] = [];
        }

        if ($request->hasFile('proof_of_office')) {
            $pofFiles = $request->file('proof_of_office');
            $validated['proof_of_office'] = is_array($pofFiles) ? $pofFiles : [$pofFiles];
        } else {
            $validated['proof_of_office'] = [];
        }


        try {
            $accountId = $this->adminFactory->createAccount($validatedData);

            return response()->json([
                'message' => 'Account created or updated successfully.',
                'account_id' => $accountId,
            ], 201);
        } catch (\RuntimeException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 400);
        }
    }

    public function delete($id)
    {
        $account_type = Auth::user()->account_type;

        if ($account_type !== 4) {
            return response()->json(['error' => 'Not Authorized.'], 401);
        }

        $this->adminFactory->deleteAdmin($id);

        return response()->noContent();
    }

    public function createSuperAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|unique:admins,username',
            'password' => 'required|string|min:8',
        ]);

        $admin = $this->adminFactory->createSuperAdmin($validatedData);

        return response()->json([
            'message' => 'Super admin created successfully.',
            'admin_id' => $admin,
        ], 201);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = $this->adminFactory->getAdmin($validatedData['username']);
        $permissions = $this->adminFactory->getAdminPermissionsByUsername($validatedData['username']);

        if (!$admin || !Hash::check($validatedData['password'], $admin->password)) {
            return response()->json(['error' => 'Invalid credentials.'], 401);
        }

        $token = Auth::login($admin);

        return response()->json(array_merge(
            $this->tokenResponse($token)->original,
            ['account_id' => $admin->id],
            ['account_type' => $admin->account_type],
            ['permissions' => $permissions]
        ));
    }

    public function index(Request $request)
    {
        $params = $request->only(['search', 'permission', 'page', 'page_size']);

        $admins = $this->adminFactory->getAdmins($params);

        return response()->json($admins);
    }

    public function dashboard()
    {
        $admins = $this->adminFactory->getAdminCounts();
        $data = $this->adminFactory->getDataCounts();

        return response()->json([
            'admins' => $admins,
            'app_data' => $data,
        ]);
    }

    public function activities(Request $request)
    {
        $filter = $request->only(['page', 'page_size', 'sort_by',
            'sort_order', 'action', 'admin_id']);

        $id = $filter['admin_id'] ?? Auth::user()->id;
        $activities = $this->adminFactory->getAdminActivities($id, $filter);

        return response()->json($activities);
    }

    public function profile(Request $request)
    {
        $param = $request->only(['admin_id']);
        $adminId = $param['admin_id'] ?? Auth::user()->id;
        $admin = $this->adminFactory->getAdmin(null, $adminId);

        if (!$admin) {
            return response()->json(['error' => 'Admin not found.'], 404);
        }

        return response()->json([
            'username' => $admin->username,
            'password' => $admin->password,
            'email' => $admin->email,
            'permissions' => $this->adminFactory->getAdminPermissions($admin->id),
        ]);
    }

    public function notifications()
    {
        $accountId = Auth::id();

        $notifications = $this->adminFactory->fetchNotifications($accountId);

        return response()->json($notifications, 200);
    }


}
