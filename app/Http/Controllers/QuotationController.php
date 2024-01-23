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
        // dd($request);
        $quaotation = new Quotation;
        $quaotation->account_id = $request->account_id;
        $quaotation->date = $request->date;
        $quaotation->status = 1;
        $quaotation->tax = $request->tax;
        $quaotation->total = $request->total;
        $quaotation->subtotal = $request->subtotal;
        $quaotation->save();
        foreach($request->order as $quaotation_i){
            $quaotation_item = new QuotationItem;
            $quaotation_item->quotation_id = $quaotation->id;
            $quaotation_item->product_id = $quaotation_i['product_id'];
            $quaotation_item->quantity = $quaotation_i['quantity'];
            $quaotation_item->price = $quaotation_i['price'];
            $quaotation_item->amount = $quaotation_i['amount'];
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
        // dd($id);
            $qoute_show = Quotation::where('id',$id)->with('account')->first();
            $qoutation_item = QuotationItem::where('quotation_id',$id)->with('product')->get();
            // dd($qoute_show);
            $qoutation = [];
            $qoutation[] = $qoute_show;
            $qoutation['qoutation_items'] = $qoutation_item;
            return response()->json(['data' => $qoutation], Response::HTTP_OK);
    }
    
    public function edit($id)
    {
        $pdf = PDF::loadView('includes.quation_template',array('orders'=>$request));
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
     
      // Retrieve the existing Quotation record by its ID
       $quotation = Quotation::find($id);
       // Check if the Quotation record exists
       if (!$quotation) {
           return response()->json(['error' => 'Quotation not found'], 404);
       }
       // Update the attributes of the existing Quotation record
       $quotation->account_id = $request->account_id;
       $quotation->date = $request->date;
       $quotation->tax = $request->tax;
       $quotation->total = $request->total;
       $quotation->subtotal = $request->subtotal;
       $quotation->status = 1;
       $quotation->save();
       //    dd($request);
       // Delete existing QuotationItem records associated with this Quotation
       $quotation->items()->delete();
       // Insert new QuotationItem records based on the request data
       foreach ($request->order as $quotationItemData) {
           // dd($quotationItemData,$request->order); 
           $quotationItem = new QuotationItem;
           $quotationItem->quotation_id = $quotation->id;
           $quotationItem->product_id = $quotationItemData['product_id'];
           $quotationItem->quantity = $quotationItemData['quantity'];
           $quotationItem->price = $quotationItemData['price'];
           $quotationItem->amount = $quotationItemData['amount'];
           $quotationItem->save();
       }
       $orders = [];
       $orders['account_id'] = $request['account_id'];
       $orders['date'] = $request->date;
       $orders['tax'] = $request->tax;
       $orders['total'] = $request->total;
       $orders['subtotal'] = $request->subtotal;
    //    dd($orders);
       // Optionally, generate and download a PDF
       $pdf = PDF::loadView('includes.quation_template_update',array('orders'=>$request));
        return $pdf->download('invoice.pdf');
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
    public function quatationShow($id)
    {
            $qoute_show = Quotation::where('id',$id)->with('account')->first();
            $qoutation = QuotationItem::where('quotation_id',$id)->with('product')->get();
            $orders = [];
            foreach($qoutation as $key => $qoute){
                $orders['order'][$key]['quotation_id'] = $qoute->quotation_id;
                $orders['order'][$key]['product'] = $qoute->product;
                $orders['order'][$key]['amount'] = $qoute->unit_price;
                $orders['order'][$key]['quantity'] = $qoute->quantity;
                $orders['order'][$key]['price'] = $qoute->quantity * $qoute->unit_price;
            }
            $orders['account'] = $qoute_show->account;
            $orders['date'] = $qoute_show->date;
            $orders['subtotal'] = $qoute_show->subtotal;
            $orders['tax'] = $qoute_show->tax;
            $orders['total'] = $qoute_show->total;
            
            $pdf = PDF::loadView('includes.quation_template',array('orders'=>$orders));
            return $pdf->download('invoice.pdf');
    }
}
