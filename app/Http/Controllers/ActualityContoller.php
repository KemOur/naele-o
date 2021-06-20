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
        //$actus = $request->input('search');
        $actus = $request->input('actus');

        // Search in the title and body columns from the posts table
        $actus = Actu::query()
            ->where('title', 'LIKE', "%{$actus}%")
            ->orWhere('content', 'LIKE', "%{$actus}%")
            ->get();

        // Return the search view with the results compacted
        return view('actus', compact('actus'));
    }
}
