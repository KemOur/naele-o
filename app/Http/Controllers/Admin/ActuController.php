<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Hash;

class ActuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actus = Actu::all();
        return view('admin.actus', compact('actus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.actuForm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //guessClientExtension()
        //getSize()
        //getError()
        //isValid()

        /*
        $test = $request->file('image')->isValid();
        dd($test);
         */

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName  = time() . '-' . $request->name . '.' .
        $request ->image->extension();

        $request->image->move(public_path('imgs'), $newImageName);

        $actu = Actu::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $newImageName
        ]);

        return redirect('admin/actus')->with('success', 'L actualité à été àjouté avec succés');
        //return redirect(route('admin/users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function show(Actu $actu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $actu = Actu::find($id);
        return view('admin.editActu',compact('actu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {

        //dd($request->image);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => '|mimes:jpg,png,jpeg|max:5048',
        ]);
        if (!$request->image)
        {
            $actu = Actu::find($id);
            $actu->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

            return redirect('admin/actus')->with('success', 'Les informations on été changé avec succés');
        }

        $newImageName  = time() . '-' . $request->name . '.' .
        $request ->image->extension();
        $request->image->move(public_path('imgs'), $newImageName);

            $actu = Actu::find($id);
            $actu->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'image' => $newImageName
        ]);

        return redirect('admin/actus')->with('success', 'Les informations on été changé avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actu  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actu = Actu::find($id);
        if (File::exists(public_path("imgs/{$actu->image}"))) {
            File::delete(public_path("imgs/{$actu->image}"));
        }else{
            dd('File does not exists');
        }
        //dd($actu->image);
        $actu ->delete();
        return redirect('admin/actus')->with('success', 'L actualité à bien été supprimé !');

    }

}
