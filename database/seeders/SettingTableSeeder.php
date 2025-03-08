<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'title'  => "Smart Parking",
            'email'  => "application@example.com",
            'footer' => "&copy; 2025 Bit Parking Lot.",
            'map_api_key' => "AIzaSyBnNwWEbC5yWgXtxNvF_WnfKTFHf4FZs4E"
        ]);
    }
}
