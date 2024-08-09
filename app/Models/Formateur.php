<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomFormateur',
        'prenomFormateur',
        'telephoneFormateur',
        'adresseFormateur',
        'emailFormateur',
        'matriculeFormateur',
        
    ];
    public function formation(){
        return $this->hasMany(Formation::class);
    }
}