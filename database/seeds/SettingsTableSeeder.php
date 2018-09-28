<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => 'Dhaka, Bangladesh',
            'contact_number' => '123456',
            'contact_email' => 'shamir@gmail.com'
        ]);
    }
}
