<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Datetime;
use Illuminate\Support\Facades\DB;

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
                'title' => 'title3',
                'body' => 'this is body3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'user_id' => '1',
         ]);
    }
}

