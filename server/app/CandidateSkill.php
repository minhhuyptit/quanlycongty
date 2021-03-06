<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    protected $table = 'candidate_skill';
    protected $fillable = ['id', 'del_flag', 'candidate_id', 'skill_id', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = ['del_flag'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id')
            ->where('del_flag', false);
    }

    public function skill()
    {
        return $this->belongsTo(Configuration::class, 'skill_id', 'id')
            ->where('del_flag', false);
    }
}
