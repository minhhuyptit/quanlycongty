<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    protected $table = 'interviewer_comment';
    protected $fillable = ['id', 'del_flag', 'interviewer_id', 'comment', 'rating', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'laravel_through_key', 'del_flag'
    ];

    public function interview()
    {
        return $this->belongsToMany(Interview::class, Interviewer::class, 'id', 'interview_id')
            ->where(["interview.del_flag" => false, "interviewer.del_flag" => false]);
    }

    public function interviewer()
    {
        return $this->belongsTo(Interviewer::class, 'interviewer_id', 'id')
            ->where('del_flag', false);
    }

    public function member_interviewer()
    {
        return $this->belongsToMany(Member::class, Interviewer::class, 'id', 'interview_id')
            ->where(["member.del_flag" => false, "interviewer.del_flag" => false]);
    }
}
