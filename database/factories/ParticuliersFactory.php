<?php

namespace Database\Factories;

use App\Models\Particuliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticuliersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Particuliers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"                => $this-> faker-> lastName,
            "prenom"             => $this-> faker-> firstName,
            "emailParticulier"   => $this-> faker-> email,
            "telParticulier1"    => $this-> faker-> phoneNumber,
            "telParticulier2"    => $this-> faker-> phoneNumber,
        ];
    }
}
