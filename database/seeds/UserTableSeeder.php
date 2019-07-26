<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user')->insert([
            'user' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('useruser'),
        ]);

        DB::table('admin')->insert([
            'admin' => 'admin',
            'email' => 'admin@admin.gmail',
            'role' => '1',
            'password' => bcrypt('adminadmin'),
    ]);

}
}
