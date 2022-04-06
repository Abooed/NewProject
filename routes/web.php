<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    $name = 'AhmedAlhopi';
    $age = 22;
    // $tasks = [
    //      'task 1',
    //      'task2',
    //      'task3'
    // ];

    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3',
        '4' => 'Task 4',
        '5' => 'Task 5',
        '6' => 'Task 6',
        '7' => 'Task 7',
        '8' => 'Task 8',
        '9' => 'Task 9',
        '10' => 'Task 10'
    ];

    // return view('about',[
    //     'name' => $name,
    //     'age' => $age
    // ]);

    return view('about',compact('name','age','tasks'));
/*
في هذه الطريقة يجب ن يكون اسم المتغير المرسل نفس اسم المتغير اسم المتغير
الي حيوخد القيمة منه
*/
    // return view('about')->with('name',$name)->with('age',$age);

    // return view('about',compact('tasks'));

});

Route::get('/task/{id}',function($id){
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3',
        '4' => 'Task 4',
        '5' => 'Task 5',
        '6' => 'Task 6',
        '7' => 'Task 7',
        '8' => 'Task 8',
        '9' => 'Task 9',
        '10' => 'Task 10'
    ];
    $task = $tasks[$id];
    return view('task',compact('task','id'));
});

Route::get('/contact',function(){
    return view('contact');
});



Route::get('tasks',function(){
    $tasks = DB::table('tasks')->get();
    return view('tasks',compact('tasks'));
});

Route::get('show/{id}',function($id){
    $tasks = DB::table('tasks')->find($id);
    return view('show',compact('tasks'));
});

Route::get('store',function(){
    DB::table('tasks')->insert([
        'name'=>$_POST['name']
   ]);
   return redirect()->back();
}


