<?php

namespace Database\Factories;

use App\Models\Topik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topik>
 */
class TopikFactory extends Factory
{
    protected $model = Topik::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        return [
            'judul' => $faker->word,
            'dosen' => $faker->name,
            'status' => $faker->randomElement(['belum diambil', 'sudah diambil'])
        ];
    }
}
