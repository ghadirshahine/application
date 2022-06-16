<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Models\User::create([
        	'name' => 'admin',
        	'email' => 'admina@gmail.com'
        	'password' => bcrypt(value 'secret123')
        ]);
        $user->attachRole('admin');
    }
}
