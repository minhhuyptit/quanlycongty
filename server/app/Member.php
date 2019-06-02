<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['id','del_flag','username','password','fullname','is_male','birthday',
    'email','phone','picture','access_level','created_by','modified_by','created_at','updated_at'];
    
    protected $hidden = [
        'password'
    ];

}
