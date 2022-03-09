<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acogimiento extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the acogimiento.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the acogido that owns the acogimiento.
     */
    public function acogido()
    {
        return $this->belongsTo(Acogido::class);
    }
}
