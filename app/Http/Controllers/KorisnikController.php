<?php

namespace App\Http\Controllers;

use App\Models\Korisnici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KorisnikController extends Controller
{
    public function index() {
        $korisnici = Korisnici::all();
        return view('korisnici.index', compact('korisnici'));
    }

    public function show($id) {
        $korisnik = Korisnici::find($id);
        return view('korisnici.show', compact('korisnik'));
    }

    public function create() {
        return view('korisnici.create');
    }

    public function store(Request $request) {

        //ovdje stavljamo sva pravila i sta zelimo da bude obavezno za korisnika
        $rules = [
            'ime_prezime' => 'required',
            'broj_telefona' => 'required',
            'adresa' => 'required',
            'grad' => 'required',
            'datum_rodjenja' => 'required',
            'password' => 'required'
        ];

        //validacija pravila
        $request->validate($rules);


        //podaci iz forme se prosljedjuju u bazu i kreira se jedan student u bazi
        Korisnici::create([
            'ime_prezime' => $request->ime_prezime,
            'broj_telefona' => $request->broj_telefona,
            'adresa' => $request->adresa,
            'grad' => $request->grad,
            'datum_rodjenja' => $request->datum_rodjenja,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('index');
    }



    public function edit($id) {
        $korisnik = Korisnici::find($id);
        return view('korisnici.edit', compact('korisnik'));
    }

    public function update(Request $request) {
        Korisnici::where('id', $request->id)->update($request->except(["_token"]));
        return redirect()->route('index');
    }

    public function delete($id) {
        Korisnici::find($id)->delete();
        return redirect()->route('index');
    }
}
