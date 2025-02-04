<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'view-any Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view-any Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'view Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'view Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'create Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'create Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'update Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'update Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delete Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'delete-any Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'delete-any Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'replicate Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'replicate Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'restore Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'restore Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'restore-any Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'restore-any Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'reorder Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'reorder Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'force-delete Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'force-delete Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'force-delete-any Booking',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'force-delete-any Booking',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'view-any City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'view-any City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'view City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'view City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'create City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'create City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'update City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'update City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'delete City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'delete City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'delete-any City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'delete-any City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'replicate City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'replicate City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'restore City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'restore City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'restore-any City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'restore-any City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'reorder City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'reorder City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'force-delete City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'force-delete City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'force-delete-any City',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'force-delete-any City',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'view-any Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'view-any Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'view Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'view Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'create Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'create Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'update Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'update Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'delete Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'delete Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'delete-any Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'delete-any Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'replicate Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'replicate Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'restore Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'restore Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'restore-any Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'restore-any Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'reorder Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'reorder Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'force-delete Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'force-delete Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'force-delete-any Company',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'force-delete-any Company',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'view-any Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'view-any Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'view Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'view Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'create Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'create Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'update Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'update Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'delete Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'delete Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'delete-any Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'delete-any Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'replicate Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'replicate Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'restore Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'restore Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'restore-any Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'restore-any Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'reorder Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'reorder Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'force-delete Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'force-delete Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'force-delete-any Country',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'force-delete-any Country',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'view-any District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'view-any District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'view District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'view District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'create District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'create District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'update District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'update District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'delete District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'delete District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'delete-any District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'delete-any District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'replicate District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'replicate District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'restore District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'restore District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'restore-any District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'restore-any District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'reorder District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'reorder District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'force-delete District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'force-delete District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'force-delete-any District',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'force-delete-any District',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'view-any ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'view-any ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'view ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'view ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'create ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'create ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'update ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'update ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'delete ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'delete ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'delete-any ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'delete-any ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'replicate ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'replicate ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'restore ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'restore ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'restore-any ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'restore-any ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'reorder ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'reorder ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'force-delete ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'force-delete ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'force-delete-any ParkingLayout',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'force-delete-any ParkingLayout',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'view-any ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'view-any ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'view ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'view ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'create ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'create ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'update ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'update ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'delete ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'delete ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'delete-any ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'delete-any ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'replicate ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'replicate ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'restore ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'restore ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'restore-any ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'restore-any ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'reorder ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'reorder ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'force-delete ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'force-delete ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'force-delete-any ParkingLocation',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'force-delete-any ParkingLocation',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'view-any Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'view-any Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'view Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'view Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'create Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'create Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'update Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'update Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'delete Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'delete Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'delete-any Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'delete-any Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'replicate Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'replicate Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'restore Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'restore Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'restore-any Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'restore-any Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'reorder Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:14',
                'updated_at' => '2025-02-04 13:20:14',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'reorder Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'force-delete Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'force-delete Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'force-delete-any Province',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'force-delete-any Province',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'view-any User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'view-any User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'view User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'view User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'create User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'create User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'update User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'update User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'delete User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'delete User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'delete-any User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'delete-any User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'replicate User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'replicate User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'restore User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'restore User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'restore-any User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'restore-any User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'reorder User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'reorder User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'force-delete User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'force-delete User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'force-delete-any User',
                'guard_name' => 'web',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'force-delete-any User',
                'guard_name' => 'api',
                'created_at' => '2025-02-04 13:20:15',
                'updated_at' => '2025-02-04 13:20:15',
            ),
        ));
        
        
    }
}