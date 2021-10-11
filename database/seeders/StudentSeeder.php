<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710118',
            'name' => 'Arifatun Nisa',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085678883123',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710164',
            'name' => 'Celline Salsabiela Z. P.',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085778980987',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710171',
            'name' => 'Firdha Arga Putriani',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085700989890',
        ]);
    }
}
