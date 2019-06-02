<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    protected $table = 'interview_comment'; 
    protected $fillable = ['id','del_flag','interviewer_id','comment','rating','created_by','modified_by','created_at','updated_at'];
}
