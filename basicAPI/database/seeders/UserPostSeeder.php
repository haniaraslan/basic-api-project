<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserPost;
use database\factories\UserPostFactory;

class UserPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPost::factory()->times(100)->create();
    }
}
