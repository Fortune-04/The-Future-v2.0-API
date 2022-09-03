<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fajr','dhuhr','asr','maghrib','isha'
    ];
}
