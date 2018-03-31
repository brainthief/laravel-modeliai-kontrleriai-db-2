<?php

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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::get('hello', function () {
    return view('hello',[
        'name' => 'Vytautas'
    ]);
});

// Route::get('/tasks/{task}', function ($id) {
//     //$task = DB::table('tasks')->find($id);
//     //dd($task);
//     $task =App\Task::find($id);
//     return view('tasks.show', compact('task'));
// });

// Route::get('/tasks', function () {
//    // $tasks = DB::table('tasks')->get();
//    //$tasks =App\Task::all();
//    $tasks =App\Task::incomplete();
//     return view('tasks.index', compact('tasks'));
// });