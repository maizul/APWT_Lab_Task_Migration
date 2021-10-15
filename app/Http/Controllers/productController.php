<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsModel;

class productController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function add()
    {
        return view('pages.add');
    }
    public function addProduct(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'required|regex:/^[A-Za-z]+$/',
                'code'=>'required',
                'desc'=>'required',
                'category'=>'required',
                'price'=>'required',
                'quantity'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'date'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'rating'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'purchased'=>'required'
            ],
            [
                'name.required'=>'Please Enter a Valid Name',
                'price.required'=>'Please Enter a Valid Price'
            ]
        );

        $var = new productsModel();
        $var->p_name= $request->name;
        $var->p_code = $request->code;
        $var->p_desc = $request->desc;
        $var->p_category = $request->category;
        $var->p_price = $request->price;
        $var->p_quantity = $request->quantity;
        $var->p_stock_date = $request->date;
        $var->p_rating = $request->rating;
        $var->p_purchased = $request->purchased;
        $var->save();
        return redirect(route('products'));
    }
    public function products()
    {
        $products = productsModel::all();
        return view('pages.products')->with('products',$products);
    }
    public function edit(Request $request)
    {
        $id= $request->id;
        $products= productsModel::where('id',$id)->first();
        return view('pages.edit')->with('product',$products);
    }
    public function updateData(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'required|regex:/^[A-Za-z]+$/',
                'code'=>'required',
                'desc'=>'required',
                'category'=>'required',
                'price'=>'required',
                'quantity'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'date'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'rating'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'purchased'=>'required'
            ],
            [
                'name.required'=>'Please Enter a Valid Name',
                'price.required'=>'Please Enter a Valid Price'
            ]
        );
        $var = productsModel::where('id',$request->id)->first();
        $var->p_name= $request->name;
        $var->p_code = $request->code;
        $var->p_desc = $request->desc;
        $var->p_category = $request->category;
        $var->p_price = $request->price;
        $var->p_quantity = $request->quantity;
        $var->p_stock_date = $request->date;
        $var->p_rating = $request->rating;
        $var->p_purchased = $request->purchased;
        $var->save();
        return redirect(route('products'));
    }
    public function delete(Request $request)
    {
        $var = productsModel::where('id',$request->id)->first();
        $var->delete();
        return redirect(route('products'));
    }
    public function details(Request $request)
    {
        $id= $request->id;
        $products= productsModel::where('id',$id)->first();
        return view('pages.details')->with('product',$products);
    }
    public function team()
    {
        return view('pages.team');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    
}