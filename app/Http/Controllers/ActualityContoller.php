<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class ActualityContoller extends Controller
{
    //
    public function index(){
        $actus = Actu::all();
        return view('actus', compact('actus'));
    }

    //search
    public function search(Request $request){
        $actus = $request->input('actus');
        $actus = Actu::query()
            ->where('title', 'LIKE', "%{$actus}%")
            ->orWhere('content', 'LIKE', "%{$actus}%")
            ->get();

        // Return the search view with the results compacted
        return view('actus', compact('actus'));
    }

    public function detail($id){
        $actu = Actu::find($id);
        return view('actudetail',compact('actu'));
    }

}
