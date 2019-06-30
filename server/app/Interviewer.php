<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewer';
    protected $fillable = [
        'id', 'del_flag', 'interview_id', 'member_id', 'evaluation',
        'created_by', 'modified_by', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'laravel_through_key', 'del_flag'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id')
            ->where('del_flag', false);
    }

    public function interview()
    {
        return $this->belongsTo(Interview::class, 'interview_id', 'id')
            ->where('del_flag', false);
    }

    public function interviewer_comments()
    {
        return $this->hasMany(InterviewerComment::class, 'interviewer_id', 'id')
            ->where('del_flag', false);
    }
}
