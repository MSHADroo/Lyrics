<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'id' => 1,
            'singer_id' => 1,
            'title' => 'Abraham',
            'picture' => 'nadare',
            'status' => 'enable',
        ]);
    }
}
