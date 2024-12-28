<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request) {
        #validate request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'title' => $validated['title'],
            'is_completed'=> false,]); #create task
            
        #return response with message
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);

        // Find the task and update
        $task = Task::findOrFail($id);
        $task->is_completed = $validated['is_completed']; #update task
        $task->save();

        return response()->json($task);
    }

    // Get pending tasks
    public function pending()
    {
        $tasks = Task::where('is_completed', false)->get(); #get all pending tasks where is_completed is false
        return response()->json($tasks);
    }
}
