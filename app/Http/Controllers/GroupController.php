<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\GroupCreateRequest;
use App\Http\Requests\GroupUpdateRequest;
use App\Repository\GroupRepository;
use App\Models\Group;
use App\Interfaces\GroupRepositoryInterface;

class GroupController extends Controller
{
    protected GroupRepository $groupRepository;
    private $field = ['id', 'p_id', 'name','status'];

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }

    public function index(Request $request)
    {
        $data = $this->groupRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns,$request->start_date,$request->end_date);
        // dd($data);
        if (!$data) {
            return response()->json(['error' => 'Records not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(GroupCreateRequest $request)
    {
        // dd($request);
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $group = $this->groupRepository->create($data);
        if (!$group) {
            return response()->json(['error' => 'Group not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $group], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $group = $this->groupRepository->getById($id);
        if (!$group) {
            return response()->json(['error' => 'User Role not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $group], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $userRole = $this->groupRepository->find($id);
        return view('user.role.edit', compact('userRole'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GroupUpdateRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(GroupUpdateRequest $request, $id)
    {
        $group = $this->groupRepository->getById($id);
        if (!$group) {
            return response()->json(['error' => 'Group not found'], Response::HTTP_NOT_FOUND);
        }
        $group = $request->only($this->field);
        return response()->json(['data' => $this->groupRepository->update($group, $id)], Response::HTTP_OK);
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
        $group = $this->groupRepository->getById($id);
        // dd($group);
        if (!$group) {
            return response()->json(['error' => 'Group not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->groupRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}