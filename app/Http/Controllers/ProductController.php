<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all() ;
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'p_name'=> 'required',
            'p_code'=> 'required',
            'p_desc'=> 'required',
            'p_category'=> 'required',
            'p_price'=> 'required',
            'p_quantity'=> 'required',
            'p_stock_date'=> 'required',
            'p_rating'=> 'required',
            'p_purchased'=> 'required'
        ]);

        $product = new Product ;
        $product->p_name = $request->p_name  ;
        $product->p_code = $request->p_code  ;
        $product->p_desc = $request->p_desc  ;
        $product->p_category = $request->p_category ;
        $product->p_price = $request->p_price ;
        $product->p_quantity = $request->p_quantity ;
        $product->p_stock_date = $request->p_stock_date ;
        $product->p_rating = $request->p_rating ;
        $product->p_purchased = $request->p_purchased ;
        $product->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.details')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'p_name'=> 'required',
            'p_code'=> 'required',
            'p_desc'=> 'required',
            'p_category'=> 'required',
            'p_price'=> 'required',
            'p_quantity'=> 'required',
            'p_stock_date'=> 'required',
            'p_rating'=> 'required',
            'p_purchased'=> 'required'
        ]);

        $product = Product::find($id) ;
        $product->p_name = $request->p_name  ;
        $product->p_code = $request->p_code  ;
        $product->p_desc = $request->p_desc  ;
        $product->p_category = $request->p_category ;
        $product->p_price = $request->p_price ;
        $product->p_quantity = $request->p_quantity ;
        $product->p_stock_date = $request->p_stock_date ;
        $product->p_rating = $request->p_rating ;
        $product->p_purchased = $request->p_purchased ;
        $product->save();
        return redirect('/');
    }


    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        return view('product.delete')->with('product',$product);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);
        if($product){
            return redirect('/');
        }

    }
}
