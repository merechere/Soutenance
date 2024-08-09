<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer_Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'dateDebut',
        'dateFin',
        'nombre',
    ];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function formation (){
        return $this->belongsTo(Formation::class);
    }
   
   
        
}


