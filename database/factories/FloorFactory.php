<?php

namespace Database\Factories;

use App\Models\Floor;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class FloorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Floor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'screed_mix_volume' => $this->faker->numberBetween(1, 100),
            'material_count' => $this->faker->numberBetween(1, 100),
            'glue_amount' => $this->faker->numberBetween(1, 100),
            'material' => Material::all()->random()->id,
        ];
    }
}
