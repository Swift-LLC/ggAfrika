<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(30),
            'about'=>$this->faker->sentence(),
            'potrait'=>$this->faker->sentence(),
            'user_id'=>User::factory()

        ];
    }
}
