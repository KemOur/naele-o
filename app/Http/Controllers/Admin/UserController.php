<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
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

    public function profile(Request $request)
    {

        $userId = $request->user()->id;
        // or $userId = Auth::id(); (Via the Auth facade)
        // or $userId = auth()->id();

        $plans = Subscription::where('user_id', $userId)->get();

        if (Auth::user()){
            $plans = Plan::find($plans);
            return view('user', compact('plans'));
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
