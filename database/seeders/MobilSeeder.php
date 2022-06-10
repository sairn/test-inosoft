<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            Mobil::create([
                'mesin' => $faker->name(),
                'kapasitas' => $faker->randomDigit(),
                'tipe' => $faker->randomLetter(),
                'stok' => $faker->randomDigit()
            ]);
        }
    }
}
