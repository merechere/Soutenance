<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session_Ressource extends Model
{
    use HasFactory;
    protected $fillable = [
        'quaantite',
    ];
    public function ressource(){
        return $this->belongsTo(Ressource::class);
    }
    public function session(){
        return $this->belongsTo(Sessions::class);
    }
}
