<?php

namespace App\Http\Controllers;

use App\Mail\EnvoieMail;
use App\Models\Newsletter;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function envoiedemail(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'email' => 'required',
            'sujet' => 'required',
            'massage' => 'required',

        ]);
       
        try {
            Mail::to('beresaf@gmail.com')->send(new EnvoieMail($request->all()));
            return redirect()->back()->with('success', 'Votre message a bien été envoyé !');
        } catch (\Throwable $th) {
            return back()->with("error", "Une erreur s'est produit. Veuillez reesayer plus tard.");
        }
    }
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create([
            'email' => $request->email
        ]);

        return back()->with('success', 'Merci pour votre inscription à notre newsletter !');
    }
    public function contact()
    {
        return view("partial.contact");
    }
    public function formation()
    {
        return view("partial.formation");
    } 
    public function apropos()
    {
        return view("partial.apropos");
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
