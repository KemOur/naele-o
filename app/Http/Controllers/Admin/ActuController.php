<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

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
            'resume' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:5048',
        ]);

        //$path = $request->img->store('images'); // Laravel upload (not good using Heroku)
        $result = $request->image->storeOnCloudinary();
        //dd($result);

        $actu = Actu::create([
            'title' => $request->input('title'),
            'resume' => $request->input('resume'),
            'content' => $request->input('content'),
            //'image' => $newImageName,
            'img_url' => $result->getSecurePath(),
            'img_id' => $result->getPublicId(),
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
            'resume' => 'required',
            'content' => 'required',
            'img_url' => '|mimes:jpg,png,jpeg|max:5048',
        ]);
        if (!$request->img_url)
        {
            $actu = Actu::find($id);
            $actu->update([
                'title' => $request->input('title'),
                'resume' => $request->input('resume'),
                'content' => $request->input('content'),
            ]);

            return redirect('admin/actus')->with('success', 'Les informations on été changé avec succés');
        }

        $newImageName  = time() . '-' . $request->name . '.' .
        $request ->img_url->extension();
        $request->img_url->move(public_path('imgs'), $newImageName);

            $actu = Actu::find($id);
            $actu->update([
                'title' => $request->input('title'),
                'resume' => $request->input('resume'),
                'content' => $request->input('content'),
                'img_url' => $newImageName
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
        //dd($actu->image);
        $result = cloudinary()->destroy($actu->img_id);
        $actu ->delete();
        return redirect('admin/actus')->with('success', 'L actualité à bien été supprimé !');

    }

}
