<?php

namespace Database\Seeders;
use App\Models\about;
use Illuminate\Database\Seeder;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $about=[
        [
          'title'=>'Introductions',
          'aboutdesc'=>'some content here',
          'status'=>'1',
          'proimage'=>'images'
        ]
        ];
        foreach($about as $key=> $value){
            about::create($value);
        }
    }
}