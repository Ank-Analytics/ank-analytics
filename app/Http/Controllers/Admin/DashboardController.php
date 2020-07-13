<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user() 
    {
        $users = User::all();
        return view('admin.permission')->with('users', $users);
    }

    public function useredit(Request $request, $id) 
    {
        $users = User::findOrFail($id);
        return view('admin.user-edit')->with('users', $users);
    }

    public function userupdate(Request $request, $id) 
    {
    $users = User::find($id);
    $users->name = $request->input('username');
    $users->usertype = $request->input('usertype');
    $users->update();
    return redirect('/role-user')->with('status', 'The user have been updated!');
    }

    public function deleteuser($id) 
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('/role-user')->with('success', 'The user have been deleted!');
    }
}
