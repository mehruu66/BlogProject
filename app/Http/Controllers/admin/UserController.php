<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function edit($user_id) {
        $users = User::find($user_id);
        return view('admin.user.edit', compact('users'));
    }
    public function update(Request $request, $user_id) {
        $user = User::find($user_id);
        if ($user) {
            $user->usertype = $request->usertype;
            $user->update();
            return redirect('admin/users')->with('message', 'Updated Successfully');
        }
        else {
            return redirect('admin/users')->with('message', 'No User found');

        }      
    }
}
