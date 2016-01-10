<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Product;
use App\ProductTag;
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
        return view('admin.product_form');
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
        $product->status = $request->status;
        $product->category_id = $request->category_id;

        $image = new Image;
        $img_name = $request->file('image')->getClientOriginalName();
        $image->name = $img_name;

        $request->file('image')->move(public_path('images'), $img_name);
        $image->uri = 'images/' . $img_name;

        if($image->save()){
            $product->image_id = $image->id;
            $product->save();
            //gestion des tags
            if(isset($request->Etoile)){
                $product_tag = new ProductTag;
                $product_tag->product_id = $product->id;
                $product_tag->tag_id = $request->Etoile;
                $product_tag->save();
            }
            if(isset($request->Espace)){
                $product_tag = new ProductTag;
                $product_tag->product_id = $product->id;
                $product_tag->tag_id = $request->Espace;
                $product_tag->save();
            }
            if(isset($request->Galaxie)){
                $product_tag = new ProductTag;
                $product_tag->product_id = $product->id;
                $product_tag->tag_id = $request->Galaxie;
                $product_tag->save();
            }
            if(isset($request->Empire)){
                $product_tag = new ProductTag;
                $product_tag->product_id = $product->id;
                $product_tag->tag_id = $request->Empire;
                $product_tag->save();
            }
            if(isset($request->Alliance)){
                $product_tag = new ProductTag;
                $product_tag->product_id = $product->id;
                $product_tag->tag_id = $request->Alliance;
                $product_tag->save();
            }
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
        $product = Product::findOrFail($id);
        $tags = ProductTag::where('product_id', '=', $product->id)->get();
        return view('admin.edit', compact('product', 'tags'));
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
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->abstract = $request->abstract;
        $product->content = $request->content;
        $product->status = $request->status;
        $product->category_id = $request->category_id;


        if(!empty($request->image)){
            $image = new Image;
            $img_name = $request->file('image')->getClientOriginalName();
            $image->name = $img_name;

            $request->file('image')->move(public_path('images'), $img_name);
            $image->uri = '/images/' . $img_name;

            if($image->save()){
                $product->image_id = $image->id;
                $product->save();
                //gestion des tags
                if(isset($request->Etoile)){
                    $match = ['tag_id' => 1, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()){
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Etoile;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 1, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Espace)){
                    $match = ['tag_id' => 2, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Espace;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 2, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Galaxie)){
                    $match = ['tag_id' => 3, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Galaxie;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 3, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Empire)){
                    $match = ['tag_id' => 4, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Empire;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 4, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Alliance)){
                    $match = ['tag_id' => 5, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Alliance;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 5, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                \Session::flash('message', 'Produit bien modifié en BDD.');
            }else{
                \Session::flash('message', 'Probleme lors de l\'acces à la BDD. Merci de réessayer.');
            }
            return redirect('admin/dashboard');
        }else{
            if($product->save()){
                //gestion des tags
                if(isset($request->Etoile)){
                    $match = ['tag_id' => 1, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()){
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Etoile;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 1, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Espace)){
                    $match = ['tag_id' => 2, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Espace;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 2, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Galaxie)){
                    $match = ['tag_id' => 3, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Galaxie;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 3, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Empire)){
                    $match = ['tag_id' => 4, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Empire;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 4, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                if(isset($request->Alliance)){
                    $match = ['tag_id' => 5, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if($pt->isEmpty()) {
                        $product_tag = new ProductTag;
                        $product_tag->product_id = $product->id;
                        $product_tag->tag_id = $request->Alliance;
                        $product_tag->save();
                    }
                }else{
                    $match = ['tag_id' => 5, 'product_id' => $product->id];
                    $pt = ProductTag::where($match)->get();
                    if(!$pt->isEmpty()){
                        ProductTag::where($match)->delete();
                    }
                }
                \Session::flash('message', 'Produit bien modifié en BDD.');
            }else{
                \Session::flash('message', 'Probleme lors de l\'acces à la BDD. Merci de réessayer.');
            }
            return redirect('admin/dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if($product->delete()){
            \Session::flash('message', 'Produit bien supprimé de la BDD.');
            return redirect('admin/dashboard');
        }else{
            \Session::flash('message', 'Probleme lors de l\'acces à la BDD. Merci de réessayer.');
            return redirect('admin/dashboard');
        }
    }
}
