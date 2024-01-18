<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Quotation;
use App\Models\QuotationItem;
use PDF; 
class QuotationController extends Controller
{
   
    public function index(Request $request)
    {
        $data = Quotation::with('account')->get();
        if (!$data) {
            return response()->json(['error' => 'Records not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
 
    }

    public function store(Request $request)
    {
        dd($request);
        $quaotation = new Quotation;
        $quaotation->account_id = $request->account_id;
        $quaotation->date = $request->date;
        $quaotation->status = 1;
        $quaotation->save();
        foreach($request->order as $quaotation_i){
            $quaotation_item = new QuotationItem;
            $quaotation_item->quotation_id = $quaotation->id;
            $quaotation_item->product_id = $quaotation_i['product_id'];
            $quaotation_item->quantity = $quaotation_i['quantity'];
            $quaotation_item->unit_price = $quaotation_i['amount'];
            $quaotation_item->save();
        }
        $pdf = PDF::loadView('includes.invoice_template',array('orders'=>$request));
        return $pdf->download('invoice.pdf');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $qoute_show = Quotation::where('id',$id)->first();
            $qoutation = QuotationItem::where('quotation_id',$id)->with('product')->get();
            $orders = [];
            foreach($qoutation as $key => $qoute){
                $orders['order'][$key]['quotation_id'] = $qoute->quotation_id;
                $orders['order'][$key]['product_id'] = $qoute->product->name;
                $orders['order'][$key]['amount'] = $qoute->unit_price;
                $orders['order'][$key]['quantity'] = $qoute->quantity;
                $orders['order'][$key]['price'] = $qoute->quantity * $qoute->unit_price;
            }
            $orders['account_id'] = $qoute_show->account_id;
            $orders['date'] = $qoute_show->date;
            $orders['account_id'] = $qoute_show->account_id;
            // dd($orders);
            $pdf = PDF::loadView('includes.invoice_template',array('orders'=>$orders));
            return $pdf->download('invoice.pdf');
    }
    
    public function edit($id)
    {

        $pdf = PDF::loadView('includes.invoice_template',array('orders'=>$request));
        return $pdf->download('invoice.pdf');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductUpdateRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
