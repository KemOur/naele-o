<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class ActualityContoller extends Controller
{
    //
    public function index()
    {
        //
        $actus = Actu::all();
        return view('actus', compact('actus'));
    }

    //search
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Actu::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('actus', compact('posts'));
    }
}
