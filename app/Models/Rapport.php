<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'dateCreation',
       
    ];

    public function Formation(){
        return $this->belongsTo(Formation::class);
    }
}
