<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;

    public function commandes(): BelongsToMany
    {
        return $this->belongsToMany(commande::class)->withPivot('quantite_total','prix_total'); 
    }
}
