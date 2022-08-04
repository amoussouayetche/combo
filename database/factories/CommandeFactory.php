<?php

namespace Database\Factories;

use Database\Factories\CommandeFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_commande'=> uniqid()
        ];
    }
}
