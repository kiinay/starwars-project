<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;
use Hash;
use Input;
use Response;
use App\Product;
use App\History;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->username = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        if($customer->save()){
            \Session::flash('message', 'Utilisateur bien sauvegardé en BDD.');
        }else{
            \Session::flash('message', 'Probleme lors de l\'acces à la BDD. Merci de réessayer.');
        }
        return view('customers.create');
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

    public function addToCart(){
        $realQuantity = Input::get('quantity') + 1;
        Session::push('cart.product', ['id' => Input::get('productId'), 'quantity' => $realQuantity]);
        $product = Product::findOrFail(Input::get('productId'));
        $message = $realQuantity . ' ' . $product->title . ' bien ajouté à votre panier';
        Session::flash('message', $message);
    }

    public function cart(){
        $products = Session::get('cart.product');
        $cart = [];
        $check = 0;
        $j = 0;
        for($i=0;$i<count($products);$i++){
            ${"product" . $i} = Product::with('image')->find($products[$i]['id']);
            for($k=0;$k<count($products);$k++){
                if(isset($cart[$k]['product']['id']) && $cart[$k]['product']['id'] === $products[$i]['id']){
                    $cart[$k]['quantity'] += $products[$i]['quantity'];
                    $check = 1;
                }
            }
            if($check === 0){
                $j++;
                $cart[$j]['product'] = ${"product" . $i};
                $cart[$j]['quantity'] = $products[$i]['quantity'];
            }
            $check = 0;
        }
        return view('customers.cart', compact('cart'));
    }

    public function order(Request $request){
        $customer = Customer::where('email', '=', $request->email)->first();
        if(empty($customer)){
            Session::flash('message', 'Désolé, cet email n\'apparait pas dans notre BDD.');
            return redirect()->back();
        }
        if(Hash::check($request->password, $customer->password))
        {
            $history = new History();
            $history->customer_id = $customer->id;
            $history->total = $request->total;
            $history->save();
            Session::flush();
            Session::flash('message', 'Merci pour votre commande !');
            return redirect()->back();
        }
        else
        {
            Session::flash('message', 'Désolé, merci de vérifier votre mot de passe.');
            return redirect()->back();
        }
    }
}
