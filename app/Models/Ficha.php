<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable =[

        
        'numero',
        'nombre_programa',
        'fecha_inicio',
        'fecha_fin'
        
        
    
    ];


    
}
