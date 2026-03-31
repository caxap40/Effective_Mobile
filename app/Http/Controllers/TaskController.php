<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    CONST VALID_RULE = [
        'title' => 'required|string|max:50',
        'description' => 'nullable|string',
        'status' => 'nullable|string|max:30',
    ];

    public function createTask(Request $request)
    {
        $validated = $request->validate(TaskController::VALID_RULE);
        $task = Task::create($validated);
        return response()->json($task, $task ? 201 : 422);
    }

    public function readTask(?string $id=null)
    {
        $task = $id ? Task::find($id) : Task::all();
        return response()->json($task, $task ? 200 : 204);
    }

    public function updateTask(Request $request, string $id)
    {
        $validated = $request->validate(TaskController::VALID_RULE);
        $task = Task::find($id);
        $task?->update($validated);
        return response()->json($task, $task ? 200 : 404);
    }

    public function deleteTask(string $id)
    {
        $task = Task::destroy($id);
        return response()->json(null, $task>0 ? 204 : 404);
    }

}
