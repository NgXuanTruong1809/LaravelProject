<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.users.login' , [
            'title' => 'Đăng nhập hệ thống'
        ]); //trả về view admin\users\login kem theo bien $title
    }

    //form tu serve day len request se nhan duoc
    public function store(Request $request){
        //dd($request -> input()); 
        $this -> validate($request, [
            'email' => ['required','email:filter'],
            'password' => 'required'
        ]);
        
        if(Auth::attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')], $request -> input('remember'))){
            return redirect()->route('admin');
            //redirect -> trả về /admin
        }

        return redirect()->back();
    }
}

