<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'id', 'del_flag', 'username', 'password', 'fullname', 'is_male', 'birthday',
        'email', 'phone', 'picture', 'access_level', 'created_by', 'modified_by', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'password', 'pivot', 'del_flag'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, TeamMember::class, 'member_id', 'team_id')
            ->where(["team.del_flag" => false, "team_member.del_flag" => false]);
    }

    public function team_members()
    {
        return $this->hasMany(TeamMember::class, 'member_id', 'id')
            ->where('del_flag', false);
    }

    public function member_role()
    {
        return $this->belongsTo(Configuration::class, 'access_level', 'id')
            ->where('del_flag', false);
    }

    public function leader_of_teams()
    {
        return $this->hasMany(Team::class, 'leader', 'id')
            ->where('del_flag', false);
    }

    public function interviews()
    {
        return $this->belongsToMany(Interview::class, Interviewer::class, 'member_id', 'interview_id')
            ->where(["interview.del_flag" => false, "interviewer.del_flag" => false]);
    }

    public function interviewers()
    {
        return $this->hasMany(Interviewer::class, 'member_id', 'id')
            ->where('del_flag', false);
    }

    public function interviewer_comments()
    {
        return $this->hasManyThrough(InterviewerComment::class, Interviewer::class, 'member_id', 'interviewer_id', 'id', 'id')
            ->where(["interviewer_comment.del_flag" => false, "interviewer.del_flag" => false]);
    }

    public function login($username, $password)
    {
        $user = Member::where(['username' => $username, 'password' => $password, 'del_flag' => false])->first();
        return $user;
    }
}
