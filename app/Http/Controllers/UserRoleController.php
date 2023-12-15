<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserRoleCreateRequest;
use App\Http\Requests\UserRoleUpdateRequest;
use App\Repository\UserRoleRepository;
use App\Models\UserRole;
use App\Interfaces\CompanyRepositoryInterface;
class UserRoleController extends Controller
{
    protected UserRoleRepository $userRoleRepository;
    private $field = ['id', 'parent_id', 'name', 'permissions','status'];

    public function __construct(UserRoleRepository $userRoleRepository)
    {
        $this->userRoleRepository = $userRoleRepository;
    }

    public function index(Request $request)
    {
        $data = $this->userRoleRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Records not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(UserRoleCreateRequest $request)
    {
        dd("hello");
        $data = $request->only($this->field);
        $data['password'] = bcrypt($data['password']);
        $user = $this->userRepository->create($data);
        if (!$user) {
            return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $user], Response::HTTP_CREATED);
    }

    public function edit($id)
    {
        $userRole = $this->userRoleRepository->find($id);
        return view('user.role.edit', compact('userRole'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $this->userRoleRepository->update($id, $request->all());

        return redirect()->route('user.role.index')->with('success', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $this->userRoleRepository->delete($id);

        return redirect()->route('user.role.index')->with('success', 'Post deleted successfully');
    }
}