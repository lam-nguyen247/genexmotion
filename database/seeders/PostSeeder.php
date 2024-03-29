<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (app()->isLocal()) {
            Post::factory()->count(100)->hasCategory(1)->create();
        }
    }
}
