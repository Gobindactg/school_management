<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Institution_info extends Model
{
    public function parent()
    {
        return $this->belongsTo(Upazila::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }
    public static function institution()
    {
        $institution = Institution_info::where('user_id', Auth::id())->get();

            return $institution;
    }
}


