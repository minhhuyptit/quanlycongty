<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TeamService;
use App\Team;

require_once app_path().'/configs/constants.php';
class TeamController extends Controller
{
    protected $service;

    public function __construct(TeamService $teamService)
    {
        $this->service = $teamService;
    }

    public function index()
    {
        return $this->service->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return $this->service->find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    
    public function listMember(int $id){
        return $this->service->listMember($id);
    }
}
