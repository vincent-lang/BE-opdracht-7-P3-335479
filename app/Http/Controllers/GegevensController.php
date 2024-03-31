<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Leverancier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GegevensController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::with('contact')->get();
        return view('leverancier.index', compact('leveranciers'));
    }

    public function wijzig(Leverancier $leverancier, Contact $contact)
    {
        return view('leverancier.wijzig', compact('leverancier', 'contact'));
    }

    public function edit(Leverancier $leverancier, Contact $contact)
    {
        return view('leverancier.edit', compact('leverancier', 'contact'));
    }

    public function store(Request $request, Leverancier $leverancier, Contact $contact)
    {
        $controle = strlen($request->Mobiel);
        if ($controle != 11) {
            return redirect(route('leveranciers.edit', [$leverancier->id, $contact->id]))->with('succes', 'Het telefoonnummer is te lang');
        }

        $validated_leverancier = $request->validate([
            'Naam' => 'required',
            'ContactPersoon' => 'required',
            'LeverancierNummer' => 'required',
            'Mobiel' => 'required',
        ]);

        $validated_contact = $request->validate([
            'Straat' => 'required',
            'Huisnummer' => 'required',
            'Postcode' => 'required',
            'Stad' => 'required',
        ]);

        DB::table('leveranciers')->where('id', $leverancier->id)->update($validated_leverancier);

        DB::table('contacts')->where('id', $contact->id)->update($validated_contact);

        return redirect(route('leveranciers.edit', [$leverancier->id, $contact->id]))->with('succes', 'De wijzigingen zijn doorgevoerd');
    }
}
