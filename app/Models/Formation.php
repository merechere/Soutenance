<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'titre',
        'description',
    ];
    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
    public function employer(){
        return $this->hasMany(employer::class);
    }
        public function formateur(){
        return $this->belongsTo(Formateur::class);
    }
    public function sessions(){
        return $this->hasMany(Sessions::class);
    }
    public function rapport(){
        return $this->belongsTo(Rapport::class);
    }
}
