<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution_info extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
>>>>>>> a422376adac50beb3dadb138a419272829d768be
    public function parent()
    {
        return $this->belongsTo(Upazila::class);
        
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

=======
>>>>>>> a422376adac50beb3dadb138a419272829d768be
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
<<<<<<< HEAD
   

=======
>>>>>>> a422376adac50beb3dadb138a419272829d768be
}
