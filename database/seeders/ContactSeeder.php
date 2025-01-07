<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'address_uz' => 'Toshkent, Amir Temur ko\'chasi 1A',
            'address_ru' => 'Ташкент, улица Амира Темура 1A',
            'address_en' => 'Tashkent, Amir Temur Street 1A',
            'email' => 'info@example.com',
            'phone1' => '+998901234567',
            'phone2' => '+998901234568',
            'facebook' => 'https://facebook.com/example',
            'instagram' => 'https://instagram.com/example',
            'telegram' => 'https://t.me/example',
            'youtube' => 'https://youtube.com/channel/example',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
