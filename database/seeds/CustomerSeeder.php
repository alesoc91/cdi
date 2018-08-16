<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder{

    protected $table = 'customers';

    protected $data =[
        ['name' => 'Pluto', 'lastname' => 'Socco', 'fiscal_code' => 'PIPPIPPIPPO', 'birth_date' => '19910316'],
        ['name' => 'Paperino', 'lastname' => 'Gay', 'fiscal_code' => 'QUAQUAQUA', 'birth_date' => '19990111']
    ];

    public function run(){
        DB::table($this->table)->truncate();
        DB::table($this->table)->insert($this->data);
    }

}
