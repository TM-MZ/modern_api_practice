<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Like;

class LikeTableSeeder extends Seeder
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
            'post_id'=>'1'
        ];
        $like=new Like;
        $like->fill($param)->save();
        $param = [
            'user_id' => 'abcde',
            'post_id' => '2'
        ];
        $like = new Like;
        $like->fill($param)->save();
        $param = [
            'user_id' => 'bcdef',
            'post_id' => '1'
        ];
        $like = new Like;
        $like->fill($param)->save();
        $param = [
            'user_id' => 'cdefg',
            'post_id' => '1'
        ];
        $like = new Like;
        $like->fill($param)->save();
    }
}
