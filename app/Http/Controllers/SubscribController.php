<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Ajout_formation;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.subscription', compact('newsletters'));
    }

    public function shareAllOnNotify(Request $request)
    {
        try {
            $newsletters = Newsletter::all();
            $formations = Ajout_formation::all();

            if ($newsletters->isEmpty()) {
                return back()->with("error", "Aucun abonné trouvé pour envoyer une notification.");
            }

            if ($formations->isEmpty()) {
                return back()->with("error", "Aucune formation disponible pour la notification.");
            }

            foreach ($newsletters as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterMail($formations, $request));
            }

            return back()->with("success", "Notification envoyée à tous les abonnés.");
        } catch (\Throwable $th) {
            return back()->with("error", "Une erreur s'est produite lors de l'envoi de la notification : " . $th->getMessage());
        }
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::find($id);

        if (!$newsletter) {
            return back()->with("error", "Abonné introuvable.");
        }

        $newsletter->delete();
        return back()->with("success", "Abonné supprimé avec succès.");
    }
}
