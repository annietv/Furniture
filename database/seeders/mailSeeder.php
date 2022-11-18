<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\mailset;
class mailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $mail=[
        [
           'smtp'=>'ssl',
           'host'=>'mail.evfurnituresltd.com',
           'port'=>'567',
           'username'=>'info@evfurnituresltd.com',
           'psw'=>'#mailpass#'
        ]
       ];
       foreach($mail as $key=> $value){
        mailset::create($value);
       }
    }
}