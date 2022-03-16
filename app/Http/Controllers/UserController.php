<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=DB::table('users')->get();
        return view('backend.user.index',compact('users'));
    }

    public function detail($id){
        
        $user = DB::table('users')->find($id);
      
        if (empty($user)) {
            return view('error404');
        } else return view('backend.user.detail', compact('user'));
        // return view('backend.user.detail');
    }
}
