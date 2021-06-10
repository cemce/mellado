<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakeComunidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i<=100; $i++) {
            \App\Models\Comunidades::create([

                'comunidad'=> $faker->name,
                'numerodevecinos'=> $faker->city,
                'direccion'=>$faker->address,
                'visita'=>$faker->dateTime,
                'tecnico' => $faker->country,
                'administrador' => $faker->word,
                'nif' => $faker->bankAccountNumber,
                'municipio' => $faker->chrome,
                'cp' => $faker->word,
                'provincia' => $faker->amPm,
                'precio' => $faker->buildingNumber


            ]);
        }
    }
}
