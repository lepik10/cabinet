<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users_count = User::all()->count();
        return [
            'content' => $this->faker->realText(50),
            'type' => rand(0, 1),
            'user_id' => rand(3, $users_count)
        ];
    }
}
