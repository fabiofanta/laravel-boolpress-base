<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $post = new Post;
            $post -> title = $faker -> sentence(6,true);
            $post -> author = $faker -> name();
            $post -> img = 'https://picsum.photos/200/300';
            $post -> body = $faker -> paragraph(6,true);
            $post -> location = $faker -> city();
            $post -> published = rand(0,1);
            $now = Carbon::now()->format('Y-m-d-H-i-s');
            $post -> slug = Str::slug($post->title, '-') . $now;
            $post->save();

        }
    }
}
