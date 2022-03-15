<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acogido extends Model
{
    use HasFactory;

    protected $fillable = [     
        'nombre',
        'pais'
    ];

    public function acogimiento(){
        return $this->belongsTo(Acogimiento::class);
    }
}