<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'credit',
        'compte_id'

    ];

    public function compte()
    {

        return $this->belongsTo(Compte::class);
    }
}
