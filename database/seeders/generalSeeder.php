<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\general;

class generalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $general = [
            [
                'businessName' => 'Evfurnitures',
                'websiteName' => 'evfurnituresltd.com',
                'timeZone' => 'Africa',
                'countrys' => 'Nigeria',
                'currency' => 'N',
                'siteLogo' => 'logo',
                'favicon' => 'icon',
                'preloader' => 'loader',
                'busAddress' => 'address lagos'
                
            ]
            ];
             foreach ($general as $key => $value) {
            general::create($value);
             }
    }
}