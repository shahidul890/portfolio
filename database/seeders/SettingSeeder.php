<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Setting::insert($this->data());
    }

    protected function data(): array
    {
        return [
            [
                'name' => 'app_name',
                'value' => 'shahidul.com.bd'
            ],
            [
                'name' => 'app_title',
                'value' => 'Shahidul Islam - Full-stack Software Developer'
            ]
        ];
    }
}
