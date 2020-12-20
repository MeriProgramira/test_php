@extends('layouts.master')
@section('content')

    <div class="container m-5">
        {{-- prikaz podataka o svim korisnicima --}}
        <table class="table">
            <thead class="thead-light">
                <th>ID</th>
                <th>Ime korisnika</th>
                <th>Broj telefona</th>
                <th>Prikazi</th>
                <th>Azuriraj</th>
                <th>Izbrisi</th>
            </thead>
            <tbody>
                @foreach ($korisnici as $korisnik)
                    <tr>
                        <td>{{ $korisnik->id }}</td>
                        <td>{{ $korisnik->ime_prezime }}</td>
                        <td>{{ $korisnik->broj_telefona }}</td>
                        <td><a href="{{ route('show', ['id'=>$korisnik->id]) }}" class="btn btn-secondary">Prikazi</a></td>
                        <td><a href="{{ route('update-korisnik', ['id'=>$korisnik->id]) }}" class="btn btn-secondary">Izmjeni</a></td>
                        <td><a href="{{ route('delete', ['id'=>$korisnik->id]) }}" class="btn btn-danger">Izbrisi</a></td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>

@endsection
