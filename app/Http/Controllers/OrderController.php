<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       /* echo "a";*/

        $datalist = Order::where('user_id',Auth::id())->get();

        return view('home.user_order',['datalist'=>$datalist]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $price= $request->input('price');
        $adet = $request->input('adet');
        $title= $request->input('title');

        return view('home.user_order_add',['price'=>$price,'adet'=>$adet,'title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Get Credit Information send to bank webservice if everything is ok next

        $data = new Order;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->total = $request->input('total');
        $data->note=$request->input('note');
        $data->user_id=Auth::id();
        $data->Ip=$_SERVER['REMOTE_ADDR'];
        $data->save();

        return redirect()->route('user_orders')->with('success','Rezervasyon Tamamlandı');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
