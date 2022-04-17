<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution_info extends Model
{

    use HasFactory;


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
}
