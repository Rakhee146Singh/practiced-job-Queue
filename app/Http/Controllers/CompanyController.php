<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $user = User::all();
        $company = Company::all();
        $task = Task::all();
        return view('company/index', ['companies' => $company, 'tasks' => $task, 'users' => $user]);
    }
    public function add_company()
    {
        $company = new Company();
        $company->name = 'Amazon';
        $company->save();

        $taskids = [3];
        $company->tasks()->attach($taskids);
    }

    public function show_company()
    {
        $company = Task::find(3)->company;
        // dd($company->toArray());
        return $company;
    }
}
