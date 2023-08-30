<?php

namespace App\Http\Controllers;

use App\Imports\TasksImport;
use App\Models\Task;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::latest()->get();
        return view('dashboard',compact('tasks'));
    }

    public function importView()
    {
        return view('import_task');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:xls,xlsx,csv'],
        ]);

        Excel::import(new TasksImport, $request->file('file')->path());

        return redirect()->route('tasks.index');
    }
}
