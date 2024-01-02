<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreCreateRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Repository\StoreRepository;
use App\Models\Store;
use App\Interfaces\StoreRepositoryInterface;

class StoreController extends Controller
{
    protected StoreRepository $storeRepository;
    private $field = ['id', 'name','url','api_key','api_secret','account_id'];

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function index(Request $request)
    {
        $data = $this->storeRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Store not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(StoreCreateRequest $request)
    {
        $data = $request->only($this->field);
        // dd($data);
        // $data['password'] = bcrypt($data['password']);
        $store = $this->storeRepository->create($data);
        if (!$store) {
            return response()->json(['error' => 'Store not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $store], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = $this->storeRepository->getById($id);
        if (!$store) {
            return response()->json(['error' => 'Store not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $store], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $store = $this->storeRepository->find($id);
        return view('user.role.edit', compact('store'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateRequest $request, $id)
    {
        $store = $this->storeRepository->getById($id);
        if (!$store) {
            return response()->json(['error' => 'Store not found'], Response::HTTP_NOT_FOUND);
        }
        $store = $request->only($this->field);
        return response()->json(['data' => $this->storeRepository->update($store, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $store = $this->storeRepository->getById($id);
        if (!$store) {
            return response()->json(['error' => 'Store not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->storeRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}
