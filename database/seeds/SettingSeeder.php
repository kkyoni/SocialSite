<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'code' => 'site_logo',
            'type' => 'FILE',
            'label' => 'Site Logo',
            'value' => 'site_logo.png',
            'hidden' => '0',
        ]);

        Setting::create([
            'code' => 'project_title',
            'type' => 'TEXT',
            'label' => 'Project Title',
            'value' => 'Subas',
            'hidden' => '0',
        ]);

        Setting::create([
            'code' => 'favicon_logo',
            'type' => 'FILE',
            'label' => 'Favicon Logo',
            'value' => 'favicon_logo.png',
            'hidden' => '0',
        ]);

        Setting::create([
            'code' => 'copyright',
            'type' => 'TEXT',
            'label' => 'Copy Right',
            'value' => 'Subas',
            'hidden' => '0',
        ]);
    }
}
