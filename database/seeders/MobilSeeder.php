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

        for ($i = 0; $i < 10; $i++) {
            Mobil::create([
                'tahun' => $faker->randomElement($array = [1995, 2000, 2005, 2010]),
                'warna' => $faker->randomElement($array = ['hitam', 'putih', 'biru', 'merah']),
                'harga' => $faker->randomElement($array = [100000000, 150000000, 175000000, 200000000]),
                'mesin' => $faker->randomElement($array = ['1000 cc', '1200 cc', '1500 cc', '2000 cc']),
                'kapasitas' => $faker->randomElement($array = ['2 orang', '4 orang', '6 orang', '8 orang']),
                'tipe' => $faker->randomElement($array = ['MPV', 'SUV', 'Sedan', 'Sports'])

            ]);
        }
    }
}
