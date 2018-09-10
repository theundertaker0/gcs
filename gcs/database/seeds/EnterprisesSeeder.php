<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EnterprisesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            \DB::table('enterprises')->insert(array(
                'name' => 'Empresa ' . $faker->number,
                'street' => $faker->randomElement(['c. 10', 'c. 35', 'c. 60', 'c. 82']),
                'borough' => $faker->randomElement(['Chicxulub', 'Progreso', 'San Ignacio']),
                'city' => $faker->randomElement(['Merida', 'Progreso', 'San Valladolid']),
                'state' => $faker->randomElement(['Yucatán', 'CA', 'San Ignacio']),
                'cp' => $faker->randomElement(['97000', '97320', '97000']),
                'timestamps' => date('Y-m-d H:m:s'),

            ));
        }
    }

}
