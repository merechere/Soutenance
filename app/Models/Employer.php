<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'matriculeEmployer',
        'nomEmployer',
        'prenomEmployer',
        'adresseEmployer',
        'emailEmployer',
        'telephoneEmployer',  
    ];  
    public function evaluation (){
        return $this->hasMany(Evaluation::class);
    }
    public function formation (){
        return $this->hasMany(Formation::class);
    }
    


}
