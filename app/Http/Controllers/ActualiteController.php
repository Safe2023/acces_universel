<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajout_actualite');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:5020',
        ]);
        $image = $request->file('image');

        $image_name = time() . '.' . $image->extension();

        $image->move(public_path('/uploads/actualite/'), $image_name);

    
        Actualite::create([
            'image' => '/uploads/actualite/' . $image_name,
            'date' => $request->date,
            'titre' => $request->titre,
            'description' => $request->description,
            'description_complete' => $request->description_complete,
        ]);
    
        return redirect()->back()->with('success', 'Actualité ajoutée avec succès');
    }
    
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $actualites = Actualite::latest()->take(3)->get(); 
        return view('welcome', compact('actualites'));
    }
   public function actualite()
    {
        $actualites = Actualite::latest()->get(); 
        return view('actualite', compact('actualites'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('modifier_actualite', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $actualite = Actualite::findOrFail($id);
        $request->validate([
            "image" => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            "titre" => "required",
            "date" => "required",
            "description" => "required",
            "description_complete" => "required",
        ]);
        $actualite->titre = $request->titre;
        $actualite->date = $request->date;
        $actualite->description = $request->description;
        $actualite->description_complete = $request->description_complete;


        if ($request->hasFile('image')) {
            if ($actualite->image && Storage::disk('public')->exists($actualite->image)) {
                Storage::disk('public')->delete($actualite->image);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/news'), $imageName);

            $actualite->image = '/uploads/news/' . $imageName;
        }
        $actualite->save();
        return redirect()->back()->with('success', 'Actualité modifié avec success');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actualite = Actualite::findorfail($id);
        $actualite->delete($id);
        return redirect()->back()->with('success', 'Actualité supprimé avec success');
    }
    public function table()
    {
        $table = Actualite::all();
        return view('table', ['table' => $table]);
    }
}
