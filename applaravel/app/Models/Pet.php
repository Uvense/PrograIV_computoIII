<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    static $rules = [
        'name' => 'requered|string|min:3',
        'age'  => 'requered|string|min:1',
        'weight_kg' => 'requered|decima|min:1',
        'owner' => 'requered|string|min:1',
    ];

    /*registro de que existe una relacion
    en laravel. Se registra en el archivo que
    representa la tabla */
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
