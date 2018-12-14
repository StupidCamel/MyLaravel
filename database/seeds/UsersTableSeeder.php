<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'Aufree';
        $user->email = 'aufree@yousails.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'Summer';
        $user->email = 'summer@yousails.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = User::find(3);
        $user->name = 'SC';
        $user->email = '4646853@qq.com';
        $user->password = bcrypt('noname');
        $user->is_admin = true;
        $user->save();
    }
}
