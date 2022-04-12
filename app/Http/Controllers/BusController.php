<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bus; 
class BusController extends Controller
{
    
    public function index()
    {
        if(Auth::check()){
        $bus = Bus::all();
        return view('buses')->with('bus',$bus);
    }else{
        return redirect('login');
    }
    }

    
    public function bus_create()
    {
        if(Auth::check()){
            return view('createbus');
        }else{
            return redirect('login');
        }
    }

    public function bus_store(Request $request)
    {
        $input = $request->all();
        Bus::create($input);
        return redirect('buses');
    }

    public function bus_edit($id)
    {
        if(Auth::check()){
            $bus=Bus::find($id);
            return view('editbus')->with('bus',$bus);
        }else{
            return redirect('login');
        }
    }

    public function bus_update(Request $request, $id)
    {
        $bus = Bus::findorfail($id);
        $input=$request->all();
        $bus->update($input);
        return redirect('buses');
    }

    
    public function bus_delete($id)
    {
        Bus::destroy($id);
        return redirect('buses');
    }
}
