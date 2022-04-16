<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class StudentGroup extends Model
{
    public static function class_group()
    {   $group = StudentGroup::where('user_id', Auth::id())->get();
        return $group;
    }
}
