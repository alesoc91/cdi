<?php

use Illuminate\Database\Seeder;

class GenderTypeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $table = 'gender_types';

    protected $data =[
        ['code' => 'MALE', 'description' => 'Maschio'],
        ['code' => 'FEMALE', 'description' => 'Femmina']
    ];

    public function run(){
        DB::table($this->table)->truncate();
        DB::table($this->table)->insert($this->data);
    }

}
