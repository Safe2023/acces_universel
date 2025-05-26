<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription_formation extends Model
{
    use HasFactory;
    public function formation()
{
    return $this->belongsTo(Ajout_formation::class);
}
}
