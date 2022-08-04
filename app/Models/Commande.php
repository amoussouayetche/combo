<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Commande extends Model
{
    use HasFactory;

    public function produits(): BelongsToMany{
        return $this->belongsToMany(produit::class)->withPivot('quantite_total','prix_total'); 
    }
}
