<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class student_mark extends Model

{
    use HasFactory;
    public function student_info(){
        return $this->belongsTo(student_info::class);
    }
    public function institution_info(){
        return $this->belongsTo(Institution_info::class);
    }
  public static function institution(){
       $institution = Institution_info::where('user_id', Auth::id())->get();
   
            return $institution;
  }


}
