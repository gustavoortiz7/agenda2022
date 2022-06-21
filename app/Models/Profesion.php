<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;
    protected $table = 'profesiones';
    public function personas(){
        return $this->hasMany(Persona::class);
    }
}
