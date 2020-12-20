<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnici extends Model
{
    use HasFactory;
    public $table ='korisnici';
    public $fillable = ['ime_prezime','broj_telefona', 'adresa','grad','datum_rodjenja', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
