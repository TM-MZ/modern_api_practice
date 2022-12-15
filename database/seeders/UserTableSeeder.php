<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
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
            'id'=>'abcde',
            'name'=>'user1',
        ];
        $user=new User;
        $user->fill($param)->save();
        $param = [
            'id' => 'bcdef',
            'name' => 'user2',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'id' => 'cdefg',
            'name' => 'user3',
        ];
        $user = new User;
        $user->fill($param)->save();
        $param = [
            'id' => 'defgh',
            'name' => 'user4',
        ];
        $user = new User;
        $user->fill($param)->save();
    }
}
