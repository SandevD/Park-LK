<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 12:47:56',
                'updated_at' => '2025-02-04 12:47:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Company Admin',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 12:48:12',
                'updated_at' => '2025-02-04 12:48:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 12:48:17',
                'updated_at' => '2025-02-04 12:48:17',
            ),
        ));
        
        
    }
}