<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@park.lk',
                'email_verified_at' => NULL,
                'password' => '$2y$12$mByaHmIR6uDJw20GAWjPE.94RC.k9BRg6jnYF9aIWBiS/l.J8LbHq',
                'remember_token' => NULL,
                'created_at' => '2025-02-02 12:44:43',
                'updated_at' => '2025-02-02 12:44:43',
            ),
        ));


    }
}
