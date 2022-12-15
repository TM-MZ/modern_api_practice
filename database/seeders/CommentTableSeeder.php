<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
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
            'user_id'=>'abcde',
            'post_id'=>'1',
            'comment'=>'aaaaa'
        ];
        $com=new Comment;
        $com->fill($param)->save();
        $param = [
            'user_id' => 'bcefg',
            'post_id' => '1',
            'comment' => 'bbbbb'
        ];
        $com = new Comment;
        $com->fill($param)->save();
        $param = [
            'user_id' => 'abcde',
            'post_id' => '2',
            'comment' => 'ccccc'
        ];
        $com = new Comment;
        $com->fill($param)->save();
        $param = [
            'user_id' => 'cdefg',
            'post_id' => '1',
            'comment' => 'ddddd'
        ];
        $com = new Comment;
        $com->fill($param)->save();

    }
}
