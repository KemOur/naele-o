<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function profile()
    {
        if (Auth::user()){
            return view('user');
        }else{
            return view('auth.login');
        }
    }
    

    public function userForm()
    {
        return view('admin.userForm');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => "required|min:8|confirmed",
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin/users')->with('success', 'Utilisateur àjouté avec succés');
        //return redirect(route('admin/users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser',compact('user'));
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,' .$id,
        ]);

        $user = User::find($id);
        $user-> update([
            'name' => $request-> name,
            'email' => $request-> email,
        ]);
        return redirect('admin/users')->with('success', 'Les informations on été changé avec succés');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user ->delete();
        return redirect('admin/users')->with('success', 'L utilisateur à bien été supprimé !');
    }
}
