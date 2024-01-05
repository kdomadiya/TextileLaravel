<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StockCreateRequest;
use App\Http\Requests\StockUpdateRequest;
use App\Repository\StockRepository;
use App\Models\Stock;
use App\Interfaces\StockRepositoryInterface;

class StockController extends Controller
{
    protected StockRepository $stockRepository;
    private $field = ['id','qty', 'product_id','amount','date','particular','type'];

    public function __construct(StockRepository $stockRepository)
    {
        $this->stockRepository = $stockRepository;
    }

    public function index(Request $request)
    {
        $data = $this->stockRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns,$request->start_date,$request->end_date);
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
        // dd($data['type']);
        if($data['type'] != null){
            $data['type'] = 1;
        }else{
            $data['type'] = 0;
        }
        // dd($data);
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
     * @param  \App\Http\Requests\StockUpdateRequest  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(StockUpdateRequest $request, $id)
    {
        $data = $request->only($this->field);
        if($data['type'] != null || $data['type'] != 0){
            $data['type'] = 1;
        }else{
            $stock['type'] = 0;
        }
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
    public function purchase(){
        $totalPurchaseAmount = Stock::where('type', '0')->sum(\DB::raw('amount * qty'));
        // dd($totalPurchaseAmount);
        return response()->json($totalPurchaseAmount, Response::HTTP_OK);
    }
         public function sell(){
        $totalSellAmount = Stock::where('type', '1')->sum(\DB::raw('amount * qty'));
        // dd($totalPurchaseAmount);
        return response()->json($totalSellAmount, Response::HTTP_OK);
    }
   
}