<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interview';
    protected $fillable = [
        'id', 'del_flag', 'status', 'evaluation', 'candidate_id', 'position_id',
        'date', 'note', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];

    protected $hidden = ['del_flag'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id')
            ->where('del_flag', false);
    }

    public function position()
    {
        return $this->belongsTo(Configuration::class, 'position_id', 'id')
            ->where('del_flag', false);
    }

    public function interviewers()
    {
        return $this->hasMany(interviewer::class, 'interview_id', 'id')
            ->where('del_flag', false);
    }

    public function member_interviewers()
    {
        return $this->belongsToMany(Member::class, Interviewer::class, 'interview_id', 'member_id')
            ->where(["member.del_flag" => false, "interviewer.del_flag" => false]);
    }

    public function comment_interviewers()
    {
        return $this->hasManyThrough(InterviewerComment::class, Interviewer::class, 'interview_id', 'interviewer_id', 'id', 'id')
            ->where(["interviewer_comment.del_flag" => false, "interviewer.del_flag" => false]);
    }
}
