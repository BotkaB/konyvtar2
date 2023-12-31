<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
       // 'book_id' => Book::random()->book_id,
           //'user_id' => User::random()->id
           // 'book_id' => rand(1,13),
          // 'user_id' => rand(1,13),
          'hardcovered'=>rand(0,1 ),
          'book_id' =>Book::all()-> random()->book_id,
          'publication'=>fake()->year,
          'status'=>rand(0,2)


        ];
    }
}
