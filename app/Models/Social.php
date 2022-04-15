<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Social extends Model
{
    public static function social_media()
    {
            $social_media = social::where('user_id', Auth::id())
            ->get();
   
            return $social_media;
    }
}
