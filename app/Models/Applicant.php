<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
   
   public function course()
   {
       return $this->hasOne('App\Models\Course');
   }
}
