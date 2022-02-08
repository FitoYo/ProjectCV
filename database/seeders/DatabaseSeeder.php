<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
         User::factory(10)->create();

         Post::factory(150)->create();
    }
}
