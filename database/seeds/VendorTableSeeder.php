<?php

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            [
                'state_id' => '1',
                'name' => 'Jose',
                'last_name' => 'Perez',
                'email' => 'joseperez@mail.com',
                'company' => 'Plaza Lama',
                'phone' => '809-555-5555',
                'mobile' => '829-555-5555',
                'address' => 'Las caobas M. 10 Ed. 15',
                'city' => 'Santo Domingo',
                'country' => 'Santo Domingo',
                'province' => 'Distrito Nacional',
                'postal_code' => '11100',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'state_id' => '1',
                'name' => 'Luis',
                'last_name' => 'Abreu',
                'email' => 'luisabreu02@mail.com',
                'company' => 'La Pera',
                'phone' => '809-455-5555',
                'mobile' => '829-555-4555',
                'address' => 'Naco C. #10 Ed. 15',
                'city' => 'Santo Domingo',
                'country' => 'Santo Domingo',
                'province' => 'Distrito Nacional',
                'postal_code' => '11101',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]

        ]);
    }
}
