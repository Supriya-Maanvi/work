<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Details;
use App\Models\Posts;
use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function adminprofile(Request $req){
        $data['user'] = Auth::user();
        
        return view('admin.adminprofile',$data);
    }

    public function details(Request $req){
        Details::create([
            'user_id' => Auth::id(),
            'work' => $req->work,
            'high_school' => $req->high_school,
            'university' => $req->university,
            'city' => $req->city,
            'home_town' => $req->home_town,
            'relationship' => $req->relationship,
            'dob' => $req->dob,
        ]);
        return redirect()->back();
    }
}
