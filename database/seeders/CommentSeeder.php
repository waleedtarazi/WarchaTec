<?php

namespace Database\Seeders;

use App\Models\Comment;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'body' => "this is super cool post im doing here guys",
        ]);
    }
}
