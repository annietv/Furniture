<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\statement;

class statementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statement=[
        [
          'mission'=>'mission statement',
          'vision'=>'vision statement',
          'coreValue'=>'core value',
          'status'=>'1'
        ]
        ];
        foreach($statement as $key=> $value){
            statement::create($value);
        }
    }
}