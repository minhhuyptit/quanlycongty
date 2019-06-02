<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewer'; 
    protected $fillable = ['id','del_flag','interview_id','member_id','evaluation',
    'created_by','modified_by','created_at','updated_at'];   
}
