<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments=DB::table('departments')->get();
        return view('backend.department.index',compact('departments'));
    }
    public function detail($id){
        
        $department = DB::table('departments')->find($id);
      
        if (empty($department)) {
            return view('error404');
        } else return view('backend.department.detail', compact('department'));
      
    }
    public function create(){
        return view('backend.department.create');
    }

}
