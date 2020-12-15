<?php

namespace Database\Factories;

use App\Models\ShoeSize;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShoeSizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShoeSize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size' => random_int(34,45),
        ];
    }
}
