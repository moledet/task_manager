<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::where('status_id', '<','3');
        $tasks->where($request->all());
        return response()->json(['tasks'=>$tasks->get()]);
    }

    public function show(Task $Task)
    {
        return response()->json(['task'=>$Task]);;
    }

    public function store(Request $request)
    {
        $data = $request->all()['task'];

        unset($data['created_at']);
        unset($data['updated_at']);
        $Task = Task::create($data);

        return response()->json(['task'=>$Task], 201);
    }

    public function update(Request $request, Task $Task)
    {
        $data = $request->all()['task'];

        unset($data['created_at']);
        unset($data['updated_at']);

        $Task->update($data);

        return response()->json(['task'=>$Task], 200);
    }

    public function delete(Task $Task)
    {
        $Task->delete();

        return response()->json(null, 204);
    }
}
