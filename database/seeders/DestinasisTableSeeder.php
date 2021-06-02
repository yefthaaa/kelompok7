<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class DestinasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //meng kosongkan seluruh isi table
        \DB::table('destinasis')->truncate();

        $destinasis = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 6; $i++)
        {
            $image = "destinasi-".rand(1,6).".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2021-05-06 10:00:00 + {$i} days"));
            $destinasis[] = [
                'nama daerah' => $faker->sentence(rand(10,20)),
                'deskripsi' => $faker->paragraph(rand(8,12),true),
                'pariwisata' => $faker->paragraph(rand(8,12),true),
                'makanan' => $faker->paragraph(rand(8,12),true),
                'image' => rand(0,1) == 1 ? $image : NULL,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }
        
        \DB::table('destinasis')->insert($destinasis);
    }
}
