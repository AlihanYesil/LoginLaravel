<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
class genelController extends Controller
{
    //
    public function index(){
        $users=DB::table('admins')->get()->all();
        return view('index');

    }
}
