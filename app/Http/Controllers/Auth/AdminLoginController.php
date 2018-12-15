<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct()
    {
       $this->middleware('guest:admin')->except('adminLogout');
    }

    public function showAdminLogin()
    {

         return view('auth.admin-login');
    }
   
    public function adminLogin(Request $request)
    {
        //validate the input
          $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
          ]);
        //attempt to login the admin
        if(Auth::guard('admin')->attempt(['email'=> $request->email , 'password' => $request->password] , $request->remember))
           {//if successful, redirects to intended page
             if(Auth::user()->roles = 'manager'){
              return redirect()->intended(route('admin.dashboard'));
             }
             if(Auth::user()->roles = 'supervisor1'){
              return redirect()->intended(route('admin.supervisor1'));
             }
             if(Auth::user()->roles = 'supervisor2'){
              return redirect()->intended(route('admin.supervisor2'));
             }  
           }
        //if unsuccessful, redirect to previous page
          return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();       
        return redirect()->route('index');
    }
}


