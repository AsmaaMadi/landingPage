<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'firstname','lastname','email', 'phone','clinicName','certificate_file','city','gender','age'
    ];

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
}
