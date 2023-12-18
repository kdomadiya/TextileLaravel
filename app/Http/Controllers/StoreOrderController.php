<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreOrderCreateRequest;
use App\Http\Requests\StoreOrderUpdateRequest;
use App\Repository\StoreOrderRepository;
use App\Models\StoreOrder;
use App\Interfaces\StoreOrderRepositoryInterface;

class StoreOrderController extends Controller
{
    protected StoreOrderRepository $storeOrderRepository;
    private $field = ['id', 'store_id','order_id','status','data_synced'];

    public function __construct(StoreOrderRepository $storeOrderRepository)
    {
        $this->storeOrderRepository = $storeOrderRepository;
    }

    public function index(Request $request)
    {
        $data = $this->storeOrderRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Store Order not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }
 
    public function store(StoreOrderCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $storeOrder = $this->storeOrderRepository->create($data);
        if (!$storeOrder) {
            return response()->json(['error' => 'Store Order not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $storeOrder], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $storeOrder = $this->storeOrderRepository->getById($id);
        if (!$storeOrder) {
            return response()->json(['error' => 'Store Order not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $storeOrder], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $storeOrder = $this->storeOrderRepository->find($id);
        return view('user.role.edit', compact('storeOrder'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderUpdateRequest  $request
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrderUpdateRequest $request, $id)
    {
        $storeOrder = $this->storeOrderRepository->getById($id);
        if (!$storeOrder) {
            return response()->json(['error' => 'Store Order not found'], Response::HTTP_NOT_FOUND);
        }
        $storeOrder = $request->only($this->field);
        return response()->json(['data' => $this->storeOrderRepository->update($storeOrder, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreOrder  $storeOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $storeOrder = $this->storeOrderRepository->getById($id);
        if (!$storeOrder) {
            return response()->json(['error' => 'Store Order not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->storeOrderRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}
