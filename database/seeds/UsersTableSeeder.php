<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'titel' => "Erste News",
            'autor' => str_random(10).'@gmail.com',
            'newstext' => "Meine ersten news amk amk amk amk amk",
        ]);
    }
}
