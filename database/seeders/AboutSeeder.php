<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    public function run()
    {
        DB::table('abouts')->insert([
            'about_or_company_uz' => 'Kashf qilish, ishlab chiqish va yetkazib berish

Novo Nordisk deyarli 100 yil davomida og’ir surunkali kasallikka chalingan bemorlarning hayot sifatini yaxshilab kelmoqda, insulin ruchkalari va shunga o’xshash innovatsion mahsulotlar ishlab chiqarish bilan ularning muammolariga yechim topmoqda.

Davolash usullarimiz bugungi kunda diabet, semizlik va kam uchraydigan qon va ekdokrin tizimi kasalliklari bilan yashayotgan millionlab kishilarga naf keltirmoqda.

Laboratoriyalarimizdan tortib zavodlardagi sexlargacha biz innovatsion biologik dorilarni yaratamiz va ishlab chiqamiz va ularni butun dunyodagi bemorlar uchun hamyonbop qilamiz.',
            'about_or_company_ru' => 'Открытие, разработка и доставка

Уже почти 100 лет Ново Нордиск улучшает качество жизни пациентов, страдающих тяжелыми хроническими заболеваниями, находя решения их проблем с помощью производства инсулиновых ручек и аналогичных инновационных продуктов.

Сегодня наши методы лечения приносят пользу миллионам людей, живущим с диабетом, ожирением, редкими заболеваниями крови и эндокринными заболеваниями.

От наших лабораторий до заводских цехов мы создаем и разрабатываем инновационные биологические препараты и делаем их доступными для пациентов по всему миру.',
            'about_or_company_en' => 'Discover, develop and deliver

For almost 100 years, Novo Nordisk has been improving the lives of patients with serious chronic diseases, providing solutions to their problems through innovative products such as insulin pens.

Our treatments benefit millions of people living with diabetes, obesity and rare blood and endocrine diseases today.

From our laboratories to our factory floors, we create and develop innovative biologic medicines and make them affordable for patients around the world.',

            'description_title_uz' => 'Aholining zaif qatlamlari uchun yordam',
            'description_title_ru' => 'Помощь уязвимым слоям населения',
            'description_title_en' => 'Support for vulnerable populations',

            'description_uz' => 'Biror bir surunkali kasallik bilan og‘rigan bemor noto‘g‘ri davolanganida yoki umuman davolanmasdan tashlab qo‘yilganida u hayotga tahdid soluvchi murakkablashuvlarning yuzaga kelish xavfi ostida bo‘ladi. Diabet holatida bu amputatsiyalar va ko‘rish qobiliyatining yo‘qotilishiga olib kelishi va ayrim hollarda murakkablashuvlar o‘lim bilan tugashi mumkin.',
            'description_ru' => 'Пациент с хроническим заболеванием, который лечится неправильно или вовсе не лечится, находится под угрозой возникновения опасных для жизни осложнений. В случае диабета это может привести к ампутациям, потере зрения и, в некоторых случаях, осложнениям, которые заканчиваются смертью.',
            'description_en' => 'A patient with a chronic illness who is improperly treated or left untreated is at risk of life-threatening complications. In the case of diabetes, this can lead to amputations, loss of vision, and in some cases, complications that result in death.',

            'content_title_uz' => 'Bizning uzoq muddatli maqsadimiz',
            'content_title_ru' => 'Наша долгосрочная цель',
            'content_title_en' => 'Our long-term goal',

            'content_uz' => 'Har bir mamlakatdagi aholining zaif qatlamiga, ayniqsa dunyoning ayrim qismlarida tibbiy yordam va dori vositalarisiz yaqqol o‘lim xavfi solib turuvchi 1-turdagi diabet bilan og‘rigan bolalarga diabetda arzon davolanishdan foydalanish imkoniyatini taqdim etish.',
            'content_ru' => 'Предоставление возможности доступного лечения диабета для уязвимых слоев населения в каждой стране, особенно для детей с диабетом 1-го типа, которым угрожает смерть из-за отсутствия медицинской помощи и лекарств.',
            'content_en' => 'Providing access to affordable diabetes treatment for vulnerable populations in every country, especially children with type 1 diabetes at risk of death due to lack of medical care and medicines.',

            'percent' => '50%',
            'insulin' => '800',
            'clinical_trials' => '40',
            'using_product' => '40',
            'image' => 'default_image.jpg',
            'content_image' => 'default_content_image.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('abouts')->insert([
            'about_or_company_uz' => 'Kashf qilish, ishlab chiqish va yetkazib berish

Novo Nordisk deyarli 100 yil davomida og’ir surunkali kasallikka chalingan bemorlarning hayot sifatini yaxshilab kelmoqda, insulin ruchkalari va shunga o’xshash innovatsion mahsulotlar ishlab chiqarish bilan ularning muammolariga yechim topmoqda.

Davolash usullarimiz bugungi kunda diabet, semizlik va kam uchraydigan qon va ekdokrin tizimi kasalliklari bilan yashayotgan millionlab kishilarga naf keltirmoqda.

Laboratoriyalarimizdan tortib zavodlardagi sexlargacha biz innovatsion biologik dorilarni yaratamiz va ishlab chiqamiz va ularni butun dunyodagi bemorlar uchun hamyonbop qilamiz.',
            'about_or_company_ru' => 'Открытие, разработка и доставка

Уже почти 100 лет Ново Нордиск улучшает качество жизни пациентов, страдающих тяжелыми хроническими заболеваниями, находя решения их проблем с помощью производства инсулиновых ручек и аналогичных инновационных продуктов.

Сегодня наши методы лечения приносят пользу миллионам людей, живущим с диабетом, ожирением, редкими заболеваниями крови и эндокринными заболеваниями.

От наших лабораторий до заводских цехов мы создаем и разрабатываем инновационные биологические препараты и делаем их доступными для пациентов по всему миру.',
            'about_or_company_en' => 'Discover, develop and deliver

For almost 100 years, Novo Nordisk has been improving the lives of patients with serious chronic diseases, providing solutions to their problems through innovative products such as insulin pens.

Our treatments benefit millions of people living with diabetes, obesity and rare blood and endocrine diseases today.

From our laboratories to our factory floors, we create and develop innovative biologic medicines and make them affordable for patients around the world.',

            'description_title_uz' => 'Aholining zaif qatlamlari uchun yordam',
            'description_title_ru' => 'Помощь уязвимым слоям населения',
            'description_title_en' => 'Support for vulnerable populations',

            'description_uz' => 'Biror bir surunkali kasallik bilan og‘rigan bemor noto‘g‘ri davolanganida yoki umuman davolanmasdan tashlab qo‘yilganida u hayotga tahdid soluvchi murakkablashuvlarning yuzaga kelish xavfi ostida bo‘ladi. Diabet holatida bu amputatsiyalar va ko‘rish qobiliyatining yo‘qotilishiga olib kelishi va ayrim hollarda murakkablashuvlar o‘lim bilan tugashi mumkin.',
            'description_ru' => 'Пациент с хроническим заболеванием, который лечится неправильно или вовсе не лечится, находится под угрозой возникновения опасных для жизни осложнений. В случае диабета это может привести к ампутациям, потере зрения и, в некоторых случаях, осложнениям, которые заканчиваются смертью.',
            'description_en' => 'A patient with a chronic illness who is improperly treated or left untreated is at risk of life-threatening complications. In the case of diabetes, this can lead to amputations, loss of vision, and in some cases, complications that result in death.',

            'content_title_uz' => 'Bizning uzoq muddatli maqsadimiz',
            'content_title_ru' => 'Наша долгосрочная цель',
            'content_title_en' => 'Our long-term goal',

            'content_uz' => 'Har bir mamlakatdagi aholining zaif qatlamiga, ayniqsa dunyoning ayrim qismlarida tibbiy yordam va dori vositalarisiz yaqqol o‘lim xavfi solib turuvchi 1-turdagi diabet bilan og‘rigan bolalarga diabetda arzon davolanishdan foydalanish imkoniyatini taqdim etish.',
            'content_ru' => 'Предоставление возможности доступного лечения диабета для уязвимых слоев населения в каждой стране, особенно для детей с диабетом 1-го типа, которым угрожает смерть из-за отсутствия медицинской помощи и лекарств.',
            'content_en' => 'Providing access to affordable diabetes treatment for vulnerable populations in every country, especially children with type 1 diabetes at risk of death due to lack of medical care and medicines.',

            'percent' => '50%',
            'insulin' => '800',
            'clinical_trials' => '40',
            'using_product' => '40',
            'image' => 'default_image.jpg',
            'content_image' => 'default_content_image.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
