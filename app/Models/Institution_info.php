<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution_info extends Model
{
// <<<<<<< HEAD
// =======
    public function parent()
    {
        return $this->belongsTo(Upazila::class);
        
    }
// >>>>>>> gobinda
    public function user()
    {
      return $this->belongsTo(User::class);
    }
// <<<<<<< HEAD
// =======
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
// >>>>>>> gobinda
}
