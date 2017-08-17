<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        	'name' => 'Danny Vasquez',
        	'email' => 'dani22_vr@hotmail.com',
        	'gender' => 'M'
        ]);

        factory(User::class, 100)->create();
    }
}
