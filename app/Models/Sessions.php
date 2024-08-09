<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'heuredebut',
        'heurefin',  
        
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function formation() 
    {
        return $this->hasMany(Formation::class);
    }

    public function salle()
    {
        return $this->hasMany(Salle::class);  
    }

    public function ressources()
    {
        return $this->hasMany(Ressource::class);
    }
}
