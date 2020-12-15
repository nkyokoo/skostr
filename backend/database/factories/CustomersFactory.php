<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\ShoeSize;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);


        return [
            'id' => $this->faker->uuid,
            'name' => $this->faker->name($gender),
            'email' => $this->faker->unique()->safeEmail,
            'age' => random_int(13,80),
            'gender' => $gender,
            'idshoesizes' => function () {
                return ShoeSize::Factory()->create()->id;
            },
        ];
    }
}
