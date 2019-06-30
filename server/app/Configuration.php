<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configuration';
    protected $fillable = ['id', 'del_flag', 'value', 'description', 'type', 'created_at', 'updated_at'];

    protected $hidden = [
        'pivot', 'del_flag'
    ];

    public function member_access_levels()
    {
        return $this->hasMany(Member::class, 'access_level', 'id')
            ->where('del_flag', false);
    }

    public function team_member_roles()
    {
        return $this->hasMany(TeamMember::class, 'team_member_role', 'id')
            ->where('del_flag', false);
    }

    public function candidate_universities()
    {
        return $this->hasMany(Candidate::class, 'university_id', 'id')
            ->where('del_flag', false);
    }

    public function candidate_skills()
    {
        return $this->hasMany(CandidateSkill::class, 'skill_id', 'id')
            ->where('del_flag', false);
    }

    public function candidate_use_skills()
    {
        return $this->belongsToMany(Candidate::class, CandidateSkill::class, 'skill_id', 'candidate_id')
            ->where(["candidate.del_flag" => false, "candidate_skill.del_flag" => false]);
    }

    public function candidate_contacts()
    {
        return $this->hasMany(CandidateContact::class, 'contact_id', 'id')
            ->where('del_flag', false);
    }

    public function candidate_use_contacts()
    {
        return $this->belongsToMany(Candidate::class, CandidateContact::class, 'contact_id', 'candidate_id')
            ->where(["candidate.del_flag" => false, "candidate_contact.del_flag" => false]);
    }


    public function interview_positions()
    {
        return $this->hasMany(Interview::class, 'position_id', 'id')
            ->where('del_flag', false);
    }

    public function getConfig()
    {
        try {
            $allConfig = Configuration::select('id', 'value', 'description', 'type')->get();
            $arr = array();
            foreach ($allConfig as $val) {
                $type = $val['type'];
                unset($val['type']);    //Delete columns type before assigned
                $arr[$type][] = $val;
            }
            return $arr;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getConfigByType($type)
    {
        try {
            $res = Configuration::select('id', 'value', 'description')->where('type', $type)->get();
            return $res;
        } catch (\Exception $e) {
            return false;
        }
    }
}
