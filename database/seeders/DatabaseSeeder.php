<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->count(10)
        ->has(
            commande::factory()
            ->count(3)
            ->hasAttached(
                produit::factory()->count(5),
                ['prix_total'=>rand(100,500), 'quantite_total'=>rand(1,3)]
            )
        )
        ->create();
    }
}
