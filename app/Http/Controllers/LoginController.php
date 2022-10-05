<?php

namespace App\Http\Controllers;

use App\Models\login_customers;
use App\Models\login_customsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view("frontend.login");
    }
    public function registration()
    {
        return view("frontend.login");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10'
        ]);
        $lgcus = new login_customers();
        $lgcus->name = $request->name;
        $lgcus->email = $request->email;
        $lgcus->password = Hash::make($request->password);
        $res = $lgcus->save();
        if($res){
            return back()->with('success', 'You have registered success');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10'
        ]);
        $lgcus = login_customers::where('email', '=', $request->email)->first();
        if($lgcus){
            if(Hash::check($request->password, $lgcus->password)){
                $request->session()->put('loginId',$lgcus->id);
                return redirect('homeshop');
            }else{
                return back()->with('fail', 'Password not matches');
            }
        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }
    public function index()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = login_customers::where('id', '=', Session::get('loginId'))->first();
        }
        return view('frontend.index', compact('data'));
    }
    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('shop-login');
        }
    }

}
