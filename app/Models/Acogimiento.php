<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acogimiento extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(User::class);
    }

    public function acogidos(){
        return $this->hasMany(Acogido::class);
    }
}
