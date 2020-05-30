<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function exams()
    {
        return $this->hasMany(exam::class,'course_id');
    }
}
