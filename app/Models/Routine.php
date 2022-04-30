<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;




class Routine extends Model

{
    public static function routine(){
           $routine = Routine::where('user_id', Auth::id())->where('class', $class)->get();
           return $routine;
        }
    
}
