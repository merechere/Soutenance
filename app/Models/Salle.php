<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'capacite',  
        
    ];

   
    public function session(){
         return $this->hasMany(Sessions::class);
    }
}
