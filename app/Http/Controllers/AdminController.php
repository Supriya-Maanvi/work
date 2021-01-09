<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepage(Request $req){
        return view('admin.homepage');
    }

    public function adminlogin(Request $req){
        return view('admin.adminlogin');
    }
}
