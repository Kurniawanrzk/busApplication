<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Driver;  

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $driver = Driver::all();
            return view('driver')->with('driver',$driver);
        }else{
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function driver_create()
    {
        if(Auth::check()){
            return view('createdriver');
        }else{
            return redirect('login');
        }
    }

    
    public function driver_store(Request $request)
    {
        $input = $request->all();
        Driver::create($input);
        return redirect('driver');

    }

    public function show($id)
    {
        //
    }

  
    public function driver_edit($id)
    {
        if(Auth::check()){
            $driver = Driver::find($id);
            return view('driveredit')->with('driver',$driver);
        }else{
            return redirect('login');
        }
    }

  
    public function driver_update(Request $request, $id)
    {
           $driver = driver::findorfail($id);
            $input = $request->all();
            $driver->update($input);
            return redirect('driver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function driver_delete($id)
    {
        Driver::destroy($id);
        return redirect('driver');
    }
}
