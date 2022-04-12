<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Driver;
use App\Models\Bus;
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
      
        $order = Order::all();
        if(Auth::check()){
            return view('order')->with('order',$order);

        }else{
            return redirect('login');
        }
        
       
    }

    public function order_create()
    {
        $driver = Driver::all();
        $bus = Bus::all();
        $order = Order::all();
        return view('createorder')->with('driver',$driver)->with('bus',$bus)->with('order',$order);
    }

 
    public function order_store(Request $request)
    {
        $input = $request->all();
        Order::create($input);
        return redirect('order');
    }

    public function show($id)
    {
        $order = find($id);
        return view('showorder');
    }

    public function edit($id)
    {
        if(Auth::check()){
        return view('editorder');
        }else{
            return redirect('login');
        }
    }
    public function update(Request $request, $id)
    {
        $order=Model::findorfail($id);
        $input = $request->all();
        $order->update($input);
        return redirect('order');
    }

    
}
