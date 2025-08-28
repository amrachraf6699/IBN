<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(
            [
                'name' =>
                [
                    'ar' => 'موقعي الإلكتروني',
                    'en' => 'My Website',
                ],
                'description' => 
                [
                    'ar' => 'هذا هو موقعي الإلكتروني الذي يحتوي على معلومات حولي.',
                    'en' => 'This is my website that contains information about me.',
                ],
                'keywords' =>
                [
                    'ar' => 'موقع, معلومات, شخصي',
                    'en' => 'website, information, personal',
                ],
                'address' => 
                [
                    'ar' => '1234 شارع المثال, المدينة, الدولة',
                    'en' => '1234 Example St, City, Country',
                ],
                'phone' => '+1234567890',
                'email' => 'info@website.com',
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com',
                    'twitter' => 'https://twitter.com',
                    'instagram' => 'https://instagram.com',
                ])
            ]
        );
    }
}
