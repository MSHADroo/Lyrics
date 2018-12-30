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
            'name' => 'Mohsen Chavoshi',
            'picture' => 'nadare',
            'status' => 'enable',
        ]);
    }
}
