<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
       
    ];

    public function session(){
        return $this->hasMany(Sessions::class);
    }
}
