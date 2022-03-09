<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('auths.register');
    }

    public function showUser(){
        $users = User::latest()->paginate(6);

        return view('pages.user', compact('users'));
    }

    public function simpanRegister(Request $request){
        $request->validate([
            'nik'=>'required|unique:users,email',
            'nama'=>'required'
            
        ],[
            'nik.unique'=>'nik sudah terdaftar',
            'nama.required'=>'nama tidak boleh kosong'
    
        ]
        );
        $data=[
            'nama'=>$request->nama,
            'role'=>'pengguna',
            'nik'=>$request->nik,
            'email'=>$request->nik,
            'password'=>bcrypt($request->nik)
        ];
        // dd($data);  
        // if($request->fails()){
        //     return redirect('/register')->withErrors($request);
        // }else{
        user::create($data);
        return redirect('/');
    // }
    }

    public function login(Request $request){
        return view('auths.login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt($request->only('nama','email','password'))){
            return redirect('/home');
        }return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
