<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(TaskStoreRequest $request)
    {
        $validated = $request->validated();
        $task = Task::create($validated);
        return response()->json($task, $task ? 201 : 422);
    }

    public function readTask(?string $id=null)
    {
        $task = $id ? Task::find($id) : Task::all();
        return response()->json($task, $task ? 200 : 204);
    }

    public function updateTask(TaskStoreRequest $request, string $id)
    {
        $validated = $request->validated();
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
