<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory()->count(10)->create();
        // Blog::factory()
        //   ->count(50)
        //   ->create();
        // factory(Blog::class, 50);
        // DB::table('blogs')->insert([
        //     'title' => Str::random(20),
        //     'content' => Str::random(50),
        // ]);
    }
}
