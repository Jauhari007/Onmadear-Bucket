<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'whatsapp_number',
                'value' => '+62 853-3657-3814',
            ],
            [
                'key' => 'instagram_url',
                'value' => 'https://www.instagram.com/oymadear.id/',
            ],
            [
                'key' => 'whatsapp_message_template',
                'value' => "Halo admin oymadear 👋\nSaya ingin memesan bucket",
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
