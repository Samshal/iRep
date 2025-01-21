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

}
