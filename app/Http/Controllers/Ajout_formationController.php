<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Ajout_formation;
use App\Models\Inscription_formation;
use Illuminate\Http\Request;

class Ajout_formationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function reserver($id, Request $request)
    {
        $formation = Ajout_formation::findOrFail($id);

        // Ici, tu peux sauvegarder la réservation si besoin
        // Exemple :
        Inscription_formation::create([
            'formation_id' => $formation->id,
            'nom' => 'Nom à récupérer via auth ou formulaire',
            'email' => 'Email à récupérer',
            'telephone' => 'Téléphone à récupérer',
            'transaction_id' => $request->transaction_id,
        ]);

        return redirect()->back()->with('success', 'Paiement effectué et réservation enregistrée !');
    }

    public function search(Request $request)
    {
        $query = Ajout_formation::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nom', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        // Paginer les résultats (6 par page par exemple)
        $formations = $query->paginate(6);
        $actualites = Actualite::latest()->take(3)->get();
        // Assure-toi d'envoyer la bonne variable à la vue
        return view('partial.formation', compact('formations', 'actualites'));
    }

    public function create()
    {
        return view('ajout_formation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "frais_dinscription" => "required",
            "cout_formation" => "required",
            "debut_formation" => "required",
            "fin_formation" => "required",
            "delais_dinscription" => "required",
            "description" => "required",
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'document' => 'nullable|file|max:5120',
            'marquette' => 'nullable|file|max:5120',
        ]);

        $imagePath = null;
        $documentPath = null;
        $marquettePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->extension();
            $imageName = time() . '.' . $imageExtension;
            $image->move(public_path('uploads/images'), $imageName);
            $imagePath = 'uploads/images/' . $imageName;
        }

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentExtension = $document->extension();
            $documentName = time() . '_doc.' . $documentExtension;
            $document->move(public_path('uploads/documents'), $documentName);
            $documentPath = 'uploads/documents/' . $documentName;
        }

        if ($request->hasFile('marquette')) {
            $marquette = $request->file('marquette');
            $marquetteExtension = $marquette->extension();
            $marquetteName = time() . '_marq.' . $marquetteExtension;
            $marquette->move(public_path('uploads/marquettes'), $marquetteName);
            $marquettePath = 'uploads/marquettes/' . $marquetteName;
        }

        Ajout_formation::create([
            'nom' => $request->nom,
            'frais_dinscription' => $request->frais_dinscription,
            'cout_formation' => $request->cout_formation,
            'debut_formation' => $request->debut_formation,
            'fin_formation' => $request->fin_formation,
            'delais_dinscription' => $request->delais_dinscription,
            'description' => $request->description,
            'image' => $imagePath,
            'document' => $documentPath,
            'marquette' => $marquettePath,
        ]);

        return redirect()->back()->with('success', 'La formation a bien été ajoutée.');
    }

    public function formation_details($id)
    {
        $actualites = Actualite::latest()->take(3)->get(); // pour la sidebar
        $formation = Ajout_formation::findOrFail($id);
        return view('formation_details', compact('formation', 'actualites'));
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edite(string $id)
    {
        $formation = Ajout_formation::findOrFail($id);
        return view('modifier_formation', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(Request $request, $id)
    {
        $request->validate([
            "nom" => "required",
            "frais_dinscription" => "required",
            "debut_formation" => "required",
            "fin_formation" => "required",
            "cout_formation" => "required",
            "delais_dinscription" => "required",
            "description" => "required",
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'document' => 'nullable|mimes:pdf,doc,docx,txt|max:5120',
            'marquette' => 'nullable|mimes:pdf,doc,docx,txt|max:5120',
        ]);

        // On récupère l'objet formation depuis la base
        $formation = Ajout_formation::findOrFail($id);

        $data = $request->only([
            'nom',
            'frais_dinscription',
            'debut_formation',
            'fin_formation',
            'cout_formation',
            'delais_dinscription',
            'description'
        ]);

        $formation->update($data);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/images'), $imageName);
            $formation->image = 'uploads/images/' . $imageName;
        }

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentName = time() . '_doc.' . $document->extension();
            $document->move(public_path('uploads/documents'), $documentName);
            $formation->document = 'uploads/documents/' . $documentName;
        }

        if ($request->hasFile('marquette')) {
            $marquette = $request->file('marquette');
            $marquetteName = time() . '_marq.' . $marquette->extension();
            $marquette->move(public_path('uploads/marquettes'), $marquetteName);
            $formation->marquette = 'uploads/marquettes/' . $marquetteName;
        }


        $formation->save();

        return redirect()->back()->with('success', 'Formation mise à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroys(string $id)
    {
        $formation = Ajout_formation::findOrFail($id);
        $formation->delete();
        return redirect()->back()->with('success', 'Formation supprimer');
    }
    public function tableau()
    {
        $tableau = Ajout_formation::all();
        return view('tableau', ['tableau' => $tableau]);
    }
}
