@extends('layouts.master')
@section('content')

    <div class="container my-3">


        <div class="card">
            <div class="card-header">
              Podaci o korisniku
            </div>
            <div class="card-body">
              <h5 class="card-title">Ime i prezime: {{ $korisnik->ime_prezime }}</h5>
              <p class="card-text">Broj telefona: {{ $korisnik->broj_telefona }}</p>
              <p class="card-text">Adresa: {{ $korisnik->adresa }}</p>
              <p class="card-text">Grad: {{ $korisnik->grad }}</p>
              <p class="card-text">Datum rodjenja: {{ $korisnik->datum_rodjenja }}</p>

            </div>
          </div>

    </div>

@endsection
