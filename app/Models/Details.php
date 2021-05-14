<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function get_user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function get_posts(){
        return $this->hasMany('App\Models\Posts', 'user_id', 'user_id');
    }
}
