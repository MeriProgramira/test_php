<?php

namespace Database\Seeders;

use App\Models\Korisnici;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class KorisnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Korisnici::insert([
            'ime_prezime' => 'User',
            'broj_telefona' => '061 111222',
            'adresa' => 'Ive Lole Ribara 23',
            'grad' => 'Tuzla',
            'datum_rodjenja' => Carbon::create('2000', '01', '01'),
            'password' => Hash::make('secret'),
        ]);
    }
}
