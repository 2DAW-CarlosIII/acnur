<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    use HasFactory;

    protected $fillable = [
        'donation_personal_name',
        'donation_personal_last_name1',
        'donation_personal_last_name2',
        'donation_personal_email',
        'donation_personal_mobile'
    ];
}
