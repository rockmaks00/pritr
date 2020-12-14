<?php

namespace Database\Factories;

use App\Models\Ceiling;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class CeilingFactory extends Factory
{
    protected $model = Ceiling::class;
    public function definition()
    {
        return [
            'material_count' => $this->faker->numberBetween(1, 100),
            'material' => Material::all()->random()->id,
        ];
    }
}
