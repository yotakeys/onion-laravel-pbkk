<?php

namespace Database\Seeders;

use App\Models\PesertaTopik;
use App\Models\Topik;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaTopikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_user = User::get('id');
        $id_topik = Topik::get('id');


        for ($i = 0; $i < 10; $i++) {
            PesertaTopik::create(
                [
                    'id_user' => fake()->randomElement($id_user)->id,
                    'id_topik' => fake()->randomElement($id_topik)->id,
                ]
            );
        }
    }
}
