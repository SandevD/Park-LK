<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();
        
        DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 6,
                'name_en' => 'Ampara',
                'name_si' => 'අම්පාර',
                'name_ta' => 'அம்பாறை',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 8,
                'name_en' => 'Anuradhapura',
                'name_si' => 'අනුරාධපුරය',
                'name_ta' => 'அனுராதபுரம்',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 7,
                'name_en' => 'Badulla',
                'name_si' => 'බදුල්ල',
                'name_ta' => 'பதுளை',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 6,
                'name_en' => 'Batticaloa',
                'name_si' => 'මඩකලපුව',
                'name_ta' => 'மட்டக்களப்பு',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'name_en' => 'Colombo',
                'name_si' => 'කොළඹ',
                'name_ta' => 'கொழும்பு',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 3,
                'name_en' => 'Galle',
                'name_si' => 'ගාල්ල',
                'name_ta' => 'காலி',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'name_en' => 'Gampaha',
                'name_si' => 'ගම්පහ',
                'name_ta' => 'கம்பஹா',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 3,
                'name_en' => 'Hambantota',
                'name_si' => 'හම්බන්තොට',
                'name_ta' => 'அம்பாந்தோட்டை',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 9,
                'name_en' => 'Jaffna',
                'name_si' => 'යාපනය',
                'name_ta' => 'யாழ்ப்பாணம்',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 1,
                'name_en' => 'Kalutara',
                'name_si' => 'කළුතර',
                'name_ta' => 'களுத்துறை',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 2,
                'name_en' => 'Kandy',
                'name_si' => 'මහනුවර',
                'name_ta' => 'கண்டி',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 5,
                'name_en' => 'Kegalle',
                'name_si' => 'කෑගල්ල',
                'name_ta' => 'கேகாலை',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 9,
                'name_en' => 'Kilinochchi',
                'name_si' => 'කිලිනොච්චිය',
                'name_ta' => 'கிளிநொச்சி',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 4,
                'name_en' => 'Kurunegala',
                'name_si' => 'කුරුණෑගල',
                'name_ta' => 'குருணாகல்',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 9,
                'name_en' => 'Mannar',
                'name_si' => 'මන්නාරම',
                'name_ta' => 'மன்னார்',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 2,
                'name_en' => 'Matale',
                'name_si' => 'මාතලේ',
                'name_ta' => 'மாத்தளை',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 3,
                'name_en' => 'Matara',
                'name_si' => 'මාතර',
                'name_ta' => 'மாத்தறை',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 7,
                'name_en' => 'Monaragala',
                'name_si' => 'මොණරාගල',
                'name_ta' => 'மொணராகலை',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 9,
                'name_en' => 'Mullaitivu',
                'name_si' => 'මුලතිව්',
                'name_ta' => 'முல்லைத்தீவு',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 2,
                'name_en' => 'Nuwara Eliya',
                'name_si' => 'නුවර එළිය',
                'name_ta' => 'நுவரேலியா',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 8,
                'name_en' => 'Polonnaruwa',
                'name_si' => 'පොළොන්නරුව',
                'name_ta' => 'பொலன்னறுவை',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 4,
                'name_en' => 'Puttalam',
                'name_si' => 'පුත්තලම',
                'name_ta' => 'புத்தளம்',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 5,
                'name_en' => 'Ratnapura',
                'name_si' => 'රත්නපුර',
                'name_ta' => 'இரத்தினபுரி',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 6,
                'name_en' => 'Trincomalee',
                'name_si' => 'ත්‍රිකුණාමලය',
                'name_ta' => 'திருகோணமலை',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 9,
                'name_en' => 'Vavuniya',
                'name_si' => 'වව්නියාව',
                'name_ta' => 'வவுனியா',
            ),
        ));
    }
}
