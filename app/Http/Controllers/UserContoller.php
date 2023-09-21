<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserContoller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        // $user->status=$request->status;
        $user->save();

        return redirect()->route('user.index');
    }

    public function show(string $id)
    {

    }
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }
    public function update(Request $request, $user)
    {
        $user = User::find($user);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

        return redirect()->route('user.index');

    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
