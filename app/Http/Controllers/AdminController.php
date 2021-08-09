<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Details;
use App\Models\Posts;
use App\Models\Profile;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminlogin(Request $req){
        return view('admin.adminlogin');
    }

    public function homepage(Request $req){
        /*if(Auth::guest()){
            return redirect()->route('login');
        }*/
        $data['posts'] = Posts::all();
        $data['userdetails'] = Details::find(Auth::id());
        return view('admin.homepage',$data);
    }

   


}
