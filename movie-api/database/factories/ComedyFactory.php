<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedy>
 */
class ComedyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $no = 1;
        return [
            'title' => 'Movie Comedy Test'.$no++,
            'description' => 'lorem ipsum dolor sit amet',
            'poster' => 'lorem'.$no++.'jpg',
            'release_at' => '2012-03'.$no++
        ];
    }
}
