<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>function () {
                return User::factory() ->create()->id;
            },
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'zip_code'=>fake()->postcode(),

        ];
    }
}
