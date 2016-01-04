<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Auth;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_status = Product::lists('status');

        return view('admin.product_form', compact('list_status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->abstract = $request->abstract;
        $product->content = $request->content;

        $image = new Image;
        $img_name = $request->file('image')->getClientOriginalName();
        $image->name = $img_name;

        $request->file('image')->move(public_path('images'), $img_name);
        $image->uri = public_path('images') . '/' . $img_name;

        if($image->save()){
            $product->image_id = $image->id;
            $product->save();
            \Session::flash('message', 'Produit bien créé en BDD.');
        }else{
            \Session::flash('message', 'Probleme lors de l\'acces à la BDD. Merci de réessayer.');
        }
        return redirect('admin/product-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
