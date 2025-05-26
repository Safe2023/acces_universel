<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajout_formation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function inscription()
    {
        return $this->hasMany(Inscription_formation::class);
    }
}
