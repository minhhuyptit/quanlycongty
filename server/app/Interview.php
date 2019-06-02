<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interview'; 
    protected $fillable = ['id','del_flag','status','evaluation','position_id','note',
    'created_by','modified_by','created_at','updated_at'];
}
