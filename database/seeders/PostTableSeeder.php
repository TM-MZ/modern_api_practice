<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param=[
            'content'=>'test1',
            'user_id'=>'1',
        ];
        $post=new Post;
        $post->fill($param)->save();
        $param = [
            'content' => 'test2',
            'user_id' => '1',
        ];
        $post = new Post;
        $post->fill($param)->save();
        $param = [
            'content' => 'test3',
            'user_id' => '2',
        ];
        $post = new Post;
        $post->fill($param)->save();
        $param = [
            'content' => 'test4',
            'user_id' => '3',
        ];
        $post = new Post;
        $post->fill($param)->save(); 
    }
}
