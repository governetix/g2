<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Modules\GCore\Models\Translation::create([
            'locale' => 'en',
            'group' => 'gcore',
            'key' => 'welcome_message',
            'value' => 'Welcome to GCore!',
        ]);
    }
}
