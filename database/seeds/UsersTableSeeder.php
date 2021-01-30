<?php

use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create([
            'email' => 'admin@admin.ru',
            'password' => bcrypt('123123')
        ])->each(function ($user) {
            $user->roles()->attach(Role::where('id', 1)->first());
        });

        factory(App\User::class, 5)->create();
    }
}
