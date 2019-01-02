<?php

use Illuminate\Database\Seeder;


class SingersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('singers')->insert([
            'id' => 1 ,
            'name' => 'Mohsen',
            'family' => 'Chavoshi',
            'picture' => 'nadare',
            'status' => 'enable',
        ]);

        DB::table('singers')->insert([
            'id' => 2 ,
            'name' => 'Amir Hossein',
            'family' => 'Hashemi',
            'picture' => 'nadare',
            'status' => 'enable',
        ]);
    }
}
