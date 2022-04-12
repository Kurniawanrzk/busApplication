<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        if(Auth::check()){
            return view('index');
        }else{
            return redirect('login');
        }
    }

    
    public function login()
    {
        return view('login');
    }

    
    public function login_store(Request $request)
    {
        $request->validate([User::all()]);
        if(Auth::attempt(["username"=>$request->username,"password"=>$request->password])){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

   public function logout(Request $request)
   {
       $request->session()->invalidate();
       return redirect('login');   
   }
}
