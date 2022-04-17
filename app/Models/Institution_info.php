<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution_info extends Model
{
<<<<<<< HEAD

    use HasFactory;


=======
>>>>>>> c379744ab9babc0f8b6d73a3caaa5acc2824708b
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
<<<<<<< HEAD
        {
            return $this->belongsTo(Upazila::class);
        }
=======
    {
        return $this->belongsTo(Upazila::class);
    }
>>>>>>> c379744ab9babc0f8b6d73a3caaa5acc2824708b
}
