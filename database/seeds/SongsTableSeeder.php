<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'id' => 1,
            'singer_id' => 1,
            'album_id' => 1,
            'title' => 'Bebor Be Name Khodavandat',
            'status' => 'enable',
        ]);

        DB::table('songs')->insert([
            'id' => 2,
            'singer_id' => 1,
            'album_id' => 1,
            'title' => 'To Dar Masafate Barani (Bonus Track)',
            'status' => 'enable',
        ]);
    }
}
