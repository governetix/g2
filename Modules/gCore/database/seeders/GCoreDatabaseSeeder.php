<?php

namespace Modules\GCore\Database\Seeders;

use Illuminate\Database\Seeder;

class GCoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CssThemesTableSeeder::class);
        $this->call(TypographySettingsTableSeeder::class);
    }
}
