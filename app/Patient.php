<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'gender','city','why','phone','reservation_date','age','hour'
    ];
}
