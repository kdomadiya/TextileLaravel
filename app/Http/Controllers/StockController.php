<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StockCreateRequest;
use App\Http\Requests\StockUpdateRequest;
use App\Repository\StockRepository;
use App\Models\Stock;
use App\Interfaces\StockInterface;

class StockController extends Controller
{
    protected StockRepository $stockRepository;
    private $field = ['id', 'category_id', 'name','amount','opening_stock','description','batch_number','expiry_date'];

    public function __construct(StockRepository $stockRepository)
    {
        $this->stockRepository = $stockRepository;
    }

    public function index(Request $request)
    {
        $data = $this->stockRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Stock In Out not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(StockCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $stock = $this->stockRepository->create($data);
        if (!$stock) {
            return response()->json(['error' => 'Stock not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $stock], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = $this->stockRepository->getById($id);
        if (!$stock) {
            return response()->json(['error' => 'Stock not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $stock], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $stock = $this->stockRepository->find($id);
        return view('user.role.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductUpdateRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $stock = $this->stockRepository->getById($id);
        if (!$stock) {
            return response()->json(['error' => 'Stock not found'], Response::HTTP_NOT_FOUND);
        }
        $stock = $request->only($this->field);
        return response()->json(['data' => $this->stockRepository->update($stock, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $stock = $this->stockRepository->getById($id);
        if (!$stock) {
            return response()->json(['error' => 'Stock not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->stockRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}