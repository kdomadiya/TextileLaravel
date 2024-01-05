<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserRoleCreateRequest;
use App\Http\Requests\UpdateUserRoleRequest;
use App\Repository\UserRoleRepository;
use App\Models\UserRole;
use App\Interfaces\UserRoleRepositoryInterface;
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
        $data = $this->userRoleRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns,$request->start_date,$request->end_date);
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
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $userRole = $this->userRoleRepository->create($data);
        if (!$userRole) {
            return response()->json(['error' => 'User Role not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $userRole], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userRole = $this->userRoleRepository->getById($id);
        if (!$userRole) {
            return response()->json(['error' => 'User Role not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $userRole], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $userRole = $this->userRoleRepository->find($id);
        return view('user.role.edit', compact('userRole'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRoleRequest  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRoleRequest $request, $id)
    {
        $userRole = $this->userRoleRepository->getById($id);
        if (!$userRole) {
            return response()->json(['error' => 'User Role not found'], Response::HTTP_NOT_FOUND);
        }
        $userRole = $request->only($this->field);
        return response()->json(['data' => $this->userRoleRepository->update($userRole, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $userRole = $this->userRoleRepository->getById($id);
        if (!$userRole) {
            return response()->json(['error' => 'User Role not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->userRoleRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}