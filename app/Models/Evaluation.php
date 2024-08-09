<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'note',
    'commentaire',
    

];  
public function formation(){
    return $this->belongsTo(Formation::class);
}
public function employer(){
    return $this->belongsTo(Employer::class);
}

}
