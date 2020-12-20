@extends('layouts.master')
@section('content')

    <div class="container mt-5">

         {{-- prikaz greske --}}
         @if ($errors->any())
         @foreach ($errors->all() as $error)
             <div class="alert-danger">{{ $error }}</div>
         @endforeach
         @endif

         <form action={{ route('create') }} method="POST" enctype="multipart/form-data">
         @csrf
             {{-- unos imena korisnika --}}
             <div class="form-group">
                 <label for="ime_prezime">Ime korisnika</label>
                 <input type="text" name="ime_prezime"  class="form-control" value="">
             </div>
              {{-- unos telefona korisnika --}}
              <div class="form-group">
                <label for="broj_telefona">Broj telefona</label>
                <input type="text" name="broj_telefona"  class="form-control" value="">
            </div>
            {{-- unos adrese korisnika --}}
            <div class="form-group">
                <label for="adresa">Adresa</label>
                <input type="text" name="adresa"  class="form-control" value="">
            </div>
            {{-- unos grada korisnika --}}
            <div class="form-group">
                <label for="grad">Grad</label>
                <input type="text" name="grad"  class="form-control" value="">
            </div>
            {{-- unos adrese korisnika --}}
            <div class="form-group">
                <label for="datum_rodjenja">Datum rodjenja</label>
                <input type="date" name="datum_rodjenja"  class="form-control" value="">
            </div>
            {{-- unos adrese korisnika --}}
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"  class="form-control" value="">
            </div>

               <input type="submit" value="Sacuvaj podatke">
         </form>
    </div>

@endsection
