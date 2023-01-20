<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        $user = User::all();
        $company = Company::all();
        return view('task/index',  ['tasks' => $task, 'users' => $user, 'companies' => $company]);
    }
    public function add_tasks()
    {
        $task = new Task();
        $task->name = 'Document';
        $task->save();
    }
    public function show_task()
    {
        $task = Task::find(5)->users;
        dd($task->toArray());
    }
    public function show_task1()
    {
        $task = Task::find(5)->company;
        dd($task->toArray());
    }
}
