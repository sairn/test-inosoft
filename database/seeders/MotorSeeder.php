<?php

namespace Database\Seeders;

use App\Models\Motor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Motor::create([
                'tahun' => $faker->randomElement($array = [1995, 2000, 2005, 2010]),
                'warna' => $faker->randomElement($array = ['hitam', 'putih', 'biru', 'merah']),
                'harga' => $faker->randomElement($array = [15000000, 20000000, 25000000, 30000000]),
                'mesin' => $faker->randomElement($array = ['110cc', '125cc', '150cc', '160cc']),
                'suspensi' => $faker->randomElement($array = ['single shock', 'dual shock']),
                'transmis' => $faker->randomElement($array = ['Manual', 'Matic'])

            ]);
        }
    }
}
