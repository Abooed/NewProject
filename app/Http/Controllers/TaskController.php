<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks',compact('tasks'));
    }

    public function store(Request $reguest){
        $data = new Task();
        $data->name = $reguest->name;
        $data->created_at = now();
        $data->updated_at = now();
        $data->save();
        return redirect()->to('/tasks');
    }

    public function destroy(Request $request){
        $task = Task::find($request->id);
        $task->delete();
        return redirect()->to('/tasks');
    }

    public function updatedata(Request $request){
        $task = DB::table('tasks')->find($request->id);
        return view('updatedata',compact('task'));
    }

    public function update(Request $request){
        Task::where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);

        return redirect()->to('/tasks');
    }
}
