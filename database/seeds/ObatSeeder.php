<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();//import library faker
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('obat')->insert([
                'nama_obat' => $faker->name,
                'harga' => $faker->numberBetween($min = 1000, $max = 20000),
                'stok' => $faker->randomDigit,
                'expired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'production_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
