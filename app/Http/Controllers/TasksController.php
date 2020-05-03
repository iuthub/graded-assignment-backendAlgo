<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    
    public function getAll() {
        $user = Auth::user();
        if(isset($user)) {
            return view('index', [
                'tasks' => $user->tasks
            ]);
        }
        else {
            return redirect(route('login'))->with([
                'info' => 'you should login first'
            ]);
        }
        
    }
    public function postAdd(Request $req) {
        $this->validate($req, [
            'name' => 'required|min:5'
        ]);
        $user = Auth::user();        
        $task = new Task(
            [
                'name' => $req->input('name')
            ]
        );
        $user->tasks()->save($task);  

        return redirect()->back()->with([
            'info' => 'new task succefully created'
        ]);
    }
    
    public function getEdit($id) {
        $task = Task::find($id);
        return view('edit',[
            'task' => $task
        ]);
    }
    public function postEdit(Request $req) {
        $this->validate($req, [
            'name' => 'required|min:5'
        ]);
        $task = Task::find($req->input('id'));
        $task->name = $req->input('name');
        $task->save();
        return redirect()->route('getAll')->with([
            'info' => "Succeffully updated!"
        ]);
    }
    
    public function deleteTask($id) {
        Task::find($id)->delete();
        return redirect()->route('getAll')->with(
            [
                'info' => 'Successfully deleted!'
            ]
        );
    }
}
