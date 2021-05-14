<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Details;
use App\Models\Posts;
use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $req){
      
        $filename = time(). "." .$req->photo->extension();
        $req->photo->move(public_path('photos'),$filename);
        
        Posts::create([
            'user_id' => Auth::id(),
            'body' => $req->body,
            'photo' => $filename,
            'felling' => $req->felling,
            'checkin' => $req->checkin,
        ]);
        return redirect()->back();
    }
}
