<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'MemberController@login');
Route::resource('member', 'MemberController');
Route::resource('configuration', 'ConfigurationController');
// Route::get('configuration', function(){
//     $res = App\Configuration::groupBy('type')->get('type')->toArray();
    // $array = array();
    // foreach($res as $val){
    //     $xxx = ["asd" => 5, "qwe" => 6];
    //     $array[$val['type']] = $xxx;
    // }
    // return $array;
    // return response()->json($array);
    // echo "<pre>";
    // var_dump($res);
    // echo "</pre>";
    // $xxx = App\Configuration::all()->toArray();
    // dd($xxx);
    // return array_unique($xxx);
    // $xxx = array();
    // foreach($res as $val){
    //     // array_push($xxx, $val['type']);
    //     $xxx[] = $val['type'];
    // }
    // return array_replace($res, );
    // $object = new stdClass;
    // $object->foo = 'bar';
    // return $object;
    // var_dump($object);    
// });
