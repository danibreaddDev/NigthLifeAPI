<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    use HasFactory;

    protected $fillable = ['club_name','club_address','events']; //campos que varian y son visibles

    protected $hidden = ['created_at','updated_at']; //campos que no son variables o deben estar ocultos
    function events(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Event::class);
    }
}
