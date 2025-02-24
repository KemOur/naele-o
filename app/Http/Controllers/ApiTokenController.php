<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMe;
use App\Models\Actu;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ApiTokenController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // throw ValidationException::withMessages([
            //     'email' => ['The provided credentials are incorrect.'],
            // ]);
            return response()->json([
                "error" => "he provided credentials are incorrect."
            ], 401);
        }

        $user->tokens()->where('tokenable_id',  $user->id)->delete();

        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            "token" => $token,
            "name" => $user->name,
            "email" => $user->email
        ], 200);
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required'
        ]);

        $exists = User::where('email', $request->email)->exists();

        if ($exists) {
            return response()->json(["error" => "You are already registered. Please login instead."], 409);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            "token" => $token,
            "name" => $user->name,
            "email" => $user->email,
            "created_at" => $user->created_at
        ], 200);
    }

    public function profile(Request $request)
    {
        return response()->json([
            "name" => $request->user()->name,
            "email" => $request->user()->email,
            "created_at" => $request->user()->created_at,
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(null, 204);
    }


    public function contact(){
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $params = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'sujet' => $request->get('subject'),
            'about' => $request->get('message'),

            "subject" => "Naele.com"
        ];

        DB::table('contact')->insert([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);

        Mail::to(Config::get('contact.email'))->send(new ContactMe($params));
        return redirect('/contact')
            ->with('status','Votre demande à été envoyé avec succés 🤗!');
    }

    public function actus(){
        $actus = Actu::all();
        return response()->json($actus , 200);
    }

    public function detail($id){
        $actu = Actu::find($id);
        return response()->json($actu , 200);
    }

    public function plans(){
        $plans = Plan::all();
        return response()->json($plans , 200);
    }
}
