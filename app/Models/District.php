<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function parent()
    {
        return $this->belongsTo(Division::class);
        
    }
}
