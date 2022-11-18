<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\socialMedia;
class socialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = [
            [
                'facebook' => 'www.facebook.com',
                'instagram' => 'www.instagram.com',
                'linkedin' => 'www.linkedin.com',
                'twitter' => 'www.twitter.com',
                'google' => 'www.google.com'
                
            ]
            ];
             foreach ($social as $key => $value) {
            socialMedia::create($value);
             }
    }
}