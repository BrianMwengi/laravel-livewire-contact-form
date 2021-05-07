<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '#1. We Love WordPress Themes',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis',
        ]);
    }
}
