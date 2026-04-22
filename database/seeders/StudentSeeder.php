<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('students')->insert([
        [
            'name' => 'Nguyen Van A',
            'email' => 'a@example.com',
            'gender' => 'male',
            'class' => 'CNTT-K13',
            'birthday' => '2003-05-12',
        ],
        [
            'name' => 'Tran Thi B',
            'email' => 'b@example.com',
            'gender' => 'female',
            'class' => 'CNTT-K13',
            'birthday' => '2003-07-22',
        ],
        [
            'name' => 'Le Van C',
            'email' => 'c@example.com',
            'gender' => 'male',
            'class' => 'CNTT-K13',
            'birthday' => '2004-01-15',
        ],
        [
            'name' => 'Pham Thi D',
            'email' => 'd@example.com',
            'gender' => 'female',
            'class' => 'CNTT-K13',
            'birthday' => '2005-02-10',
        ],
        [
            'name' => 'Hoang Van E',
            'email' => 'e@example.com',
            'gender' => 'male',
            'class' => 'CNTT-K13',
            'birthday' => '2005-11-05',
        ],
    ]);
}

}
