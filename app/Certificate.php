<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{

    protected $fillable = [
        'degree','graduationYear', 'universityName',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
