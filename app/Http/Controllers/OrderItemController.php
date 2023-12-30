<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\OrderItem;
use App\Http\Requests\OrderItemCreateRequest;
use App\Http\Requests\OrderItemUpdateRequest;
use App\Repository\OrderItemRepository;
use App\Interfaces\OrderItemRepositoryInterface;

class OrderItemController extends Controller
{
    protected OrderItemRepository $orderItemRepository;
    private $field = ['id', 'order_id', 'product_id','quantity','amount'];

    public function __construct(OrderItemRepository $orderItemRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
    }

    public function index(Request $request)
    {
        $data = $this->orderItemRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Order Item not found'], Response::HTTP_NOT_FOUND);
        }
        // dd($data);
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(OrderItemCreateRequest $request)
    {
        // dd($request);
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $orderItem = $this->orderItemRepository->create($data);
        if (!$orderItem) {
            return response()->json(['error' => 'Order Item not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $orderItem], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderItem = $this->orderItemRepository->getById($id);
        if (!$orderItem) {
            return response()->json(['error' => 'Order Item not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $orderItem], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $orderItem = $this->orderItemRepository->find($id);
        return view('order.edit', compact('orderItem'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\OrderItemUpdateRequest  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(OrderItemUpdateRequest $request, $id)
    {
        $orderItem = $this->orderItemRepository->getById($id);
        if (!$orderItem) {
            return response()->json(['error' => 'Order Item not found'], Response::HTTP_NOT_FOUND);
        }
        $orderItem = $request->only($this->field);
        return response()->json(['data' => $this->orderItemRepository->update($orderItem, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $orderItem = $this->orderItemRepository->getById($id);
        if (!$orderItem) {
            return response()->json(['error' => 'Order Item not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->orderItemRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}
