<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
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
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
