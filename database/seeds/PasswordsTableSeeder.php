<?php

use Illuminate\Database\Seeder;

class PasswordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passwords')->insert([
        [
            'website' => 'Amazon',
            'url' => 'https://www.amazon.co.uk/',
            'username' => 'mbrantzen0@tripod.com',
            'password' => bcrypt('amazonPassword'),
        ],[
            'website' => 'YouTube',
            'url' => 'https://www.youtube.com',
            'username' => 'mcheyenne0@cargocollective.com',
            'password' => bcrypt('youtubePassword'),
        ]
        ]);
    }
}