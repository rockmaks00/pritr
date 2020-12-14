<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => (new ProjectFactory())->createOne()->id,
            'room_name' => $this->faker->word(),
            'length' => $this->faker->numberBetween(2, 10),
            'width' => $this->faker->numberBetween(2, 10),
            'height' => $this->faker->numberBetween(2, 4),
            'floor_id' => (new FloorFactory())->createOne()->id,
            'wall_id' => (new WallFactory())->createOne()->id,
            'ceiling_id' => (new CeilingFactory())->createOne()->id,
        ];
    }
}
