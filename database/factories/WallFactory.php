<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Wall;
use Illuminate\Database\Eloquent\Factories\Factory;

class WallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wall::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plaster_weight' => $this->faker->numberBetween(1, 100),
            'primer_amount' => $this->faker->numberBetween(1, 100),
            'material_count' => $this->faker->numberBetween(1, 100),
            'material' => Material::all()->random()->id,
        ];
    }
}
