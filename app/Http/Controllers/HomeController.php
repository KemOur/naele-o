<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function lastactus()
    {
        $actus = Actu::latest()->take(3)->get();
        return view('welcome', compact('actus'));
    }
}
