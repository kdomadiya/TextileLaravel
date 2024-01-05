<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repository\UserRepository;
use App\Models\User;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    protected UserRepository $userRepository;
    private $field = ['id', 'name','email','username','phone','password','role','status'];

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $data = $this->userRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns,$request->start_date,$request->end_date);
        if (!$data) {
            return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }
 
    public function store(UserCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $user = $this->userRepository->create($data);
        if (!$user) {
            return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $user], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $user], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        return view('user.role.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserUpdateRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->userRepository->getById($id);
        if (!$user) {
            return response()->json(['error' => 'User Order not found'], Response::HTTP_NOT_FOUND);
        }
        $user = $request->only($this->field);
        return response()->json(['data' => $this->userRepository->update($user, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $user = $this->userRepository->getById($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->userRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}
