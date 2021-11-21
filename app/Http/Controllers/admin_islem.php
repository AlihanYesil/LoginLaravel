<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class admin_islem extends Controller
{

    public function adminGiris(){
        return view('admin');
    }

    public function adminGirisPost(Request $request){
        //$users=DB::table('admins')->where('email',$request->email)->first();

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('index');
        }
        else{
            return redirect()->route('giris')->withErrors('Email veya Şifre Hatalı!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('giris');
    }

    public function adminKayit(){
        return view('adminKayit');
    }

    public function adminKayitPost(Request $request){
            $request->validate([
                "name"=>"regex:/^[\pL\s\-]+$/u|required",
                "surname"=>"regex:/^[\pL\s\-]+$/u|required",
                "email"=>"required|unique:App\Models\admin,email",
                "password"=>"required|min:8|max:12|confirmed",
            ]);
            DB::table('admins')->insert([
                'name'=>$request->name,
                'surname' =>$request->surname,
                'password' =>Hash::make($request->password),
                'email' =>$request->email]);
            return redirect()->route('giris');
    }

}
