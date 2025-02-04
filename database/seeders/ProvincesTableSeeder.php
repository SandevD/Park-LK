<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();
        
        DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 211,
                'name_en' => 'Western',
                'name_si' => 'බස්නාහිර',
                'name_ta' => 'மேல்',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 211,
                'name_en' => 'Central',
                'name_si' => 'මධ්‍යම',
                'name_ta' => 'மத்திய',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 211,
                'name_en' => 'Southern',
                'name_si' => 'දකුණු',
                'name_ta' => 'தென்',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 211,
                'name_en' => 'North Western',
                'name_si' => 'වයඹ',
                'name_ta' => 'வட மேல்',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 211,
                'name_en' => 'Sabaragamuwa',
                'name_si' => 'සබරගමුව',
                'name_ta' => 'சபரகமுவ',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 211,
                'name_en' => 'Eastern',
                'name_si' => 'නැගෙනහිර',
                'name_ta' => 'கிழக்கு',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 211,
                'name_en' => 'Uva',
                'name_si' => 'ඌව',
                'name_ta' => 'ஊவா',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 211,
                'name_en' => 'North Central',
                'name_si' => 'උතුරු මැද',
                'name_ta' => 'வட மத்திய',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 211,
                'name_en' => 'Northern',
                'name_si' => 'උතුරු',
                'name_ta' => 'வட',
            ),
        ));
    }
}
