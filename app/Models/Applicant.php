<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{

    protected $guarded = ['id'];
   
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
