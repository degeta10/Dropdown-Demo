<?php

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
        //
        DB::table('users')->insert([
            'name' => 'Devender',
            'email' => 'degeta10@gmail.com',
            'password' => bcrypt('qwe123'),         
        ]);
    }
}
