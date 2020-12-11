<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){
        //validation avec AdminLoginRequest

        $remember_me = $request->has('remember_me')? true : false;


      
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")],$remember_me))
         {
            
            return redirect()->route('admin.Dashboard');
        }
        return redirect()->back()->with('error','هناك خطا بالبيانات');

    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
    
}
