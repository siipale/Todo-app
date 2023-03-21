<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function taskEditor() {
        return view('task-editor');
    }

    public function storeTask(Request $request)
    {
        info($request);
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->check = 0;
        $task->save();
        return redirect('task-editor')->with('status', 'Task created succesfully');

    }
}
