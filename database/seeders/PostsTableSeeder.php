<?php
namespace Database\Seeders;
use App\Models\posts;
use App\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        posts::factory()->count(50)->create();
    }
}

