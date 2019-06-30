<?php

namespace App\Services;

use App\Repositories\TeamRepository;
use App\Services\Contracts\TeamServiceInterface;
use Carbon\Carbon;

class TeamService extends BaseService implements TeamServiceInterface {
    public function __construct(TeamRepository $repository) {
        $this->repository = $repository;
    }

    // Overide
    public function all() {
        $data = $this->repository->all();
        $listUnset = ['created_by', 'modified_by', 'created_at', 'updated_at', 'member_leader'];
        foreach ($data as $val) {
            $val['leader'] = $val->member_leader->fullname;
            $this->removeElements($val, $listUnset);
        }
        return $this->response(200, GET_ALL_TEAM_SUCCESS, $data);
    }

    public function listMember(int $id) {
        $team = $this->repository->find($id);
        if (empty($team)) {
            return $this->response(404, TEAM_NOT_FOUND);
        }
        $team_members = $team->members;
        try {
            foreach ($team_members as $val) {
                $listUnset = ['username', 'is_male', 'birthday', 'email', 'phone', 'access_level',
                    'created_by', 'modified_by', 'created_at', 'updated_at', 'team_members'];

                $teamMember = $this->getOneTeamMember($val->team_members, $id); // Remove unrelated teams
                $val['joinning_day'] = Carbon::parse($teamMember->updated_at)->format('d-m-Y H:i:s');
                $val['role_in_team'] = $teamMember->member_role->value;
                $this->removeElements($val, $listUnset);
            }
            return $this->response(200, GET_MEMBERS_OF_TEAM_SUCCESS, $team_members);
        } catch (\Exception $ex) {
            return $this->response(500, GET_MEMBERS_OF_TEAM_FAIL);
        }

    }

    private function getOneTeamMember($team_member, int $id) {
        if (count($team_member) >= 2) {
            foreach ($team_member as $key => $val) {
                if ($val['team_id'] === $id) {
                    return $team_member[$key];
                }
            }
        }
        return $team_member;
    }

}