<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $company = Company::all();
        $tasks = Task::all();
        return view('user/index', ['users' => $user, 'companies' => $company, 'tasks' => $tasks]);
    }

    public function add_users(Request $request)
    {
        // $user = new User();
        // $user->company_id = '3';
        // $user->name = 'Akankshya2';
        // $user->save();

        // $taskids = [5];
        // $user->tasks()->attach($taskids);
        // $validate = Validator::make($request->all(), [
        //     'name' => 'required|min:5',
        //     'city' => 'required',
        //     'company name' => 'required',
        //     'tasks' => 'required',
        // ], [
        //     'name.required' => 'Name is must.',
        //     'name.min' => 'Name must have 5 char.',
        // ]);
        // if ($validate->fails()) {
        //     return back()->withErrors($validate->errors())->withInput();
        // }
        $user = new User;
        $user->name = $request->name;
        $user->city = $request->city;
        $user->companyname = $request->companyname;
        $user->taskname = $request->taskname;
        $user->save();
        return redirect(route('user/index'))->with('status', 'Inserted Successfully');
    }

    public function show_users()
    {
        $user = Task::find(4)->users;
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        return redirect(route('user/edit'))->with('status', 'Updated Successfully');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect(route('user/delete'))->with('status', 'Deleted Successfully');
    }
    //Pagination function
    // public function home()
    // {
    //     $user = User::paginate(2);
    //     return view('user/index', compact('users'));

    //     //simple paginate
    //     //$article = DB::table('articles')->simplePaginate(2);
    // }
}
