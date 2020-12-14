<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        if($this->faker->boolean(50)) {
            $length = $this->faker->numberBetween(1, 100);
            $width = $this->faker->numberBetween(1, 100);
        }
        else {
            $length = null;
            $width = null;
        }
        return [
            'material' => $this->faker->word(),
            'length' => $length,
            'width' => $width,
            'weight' => $this->faker->boolean(50) ? $this->faker->numberBetween(1, 100) : null,
            'price' => $this->faker->numberBetween(100, 5000),
        ];
    }
}
