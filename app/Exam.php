<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    
    public function questions()
    {
        return $this->hasMany(question::class,'exam_id');
    }

    public function course()
    {
        return $this->belongsTo(course::class,'course_id');
    }
}
