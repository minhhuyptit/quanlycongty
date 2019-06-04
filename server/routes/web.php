<?php
use App\Member;
use App\Team;
use App\TeamMember;
use App\Configuration;
use App\Candidate;
use App\CandidateContact;
use App\CandidateSkill;
use App\Interview;
use App\Interviewer;
use App\InterviewerComment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('getMember', function () {
    $element = Member::find(1);
    // $team = Team::find(3);
    return $element->interviewer_comments;
});
