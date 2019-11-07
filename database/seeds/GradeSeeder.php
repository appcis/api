<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            ['lib_court' => 'SAP', 'lib_long' => 'Sapeur', 'ordre' => 13],
            ['lib_court' => 'SAP1', 'lib_long' => 'Sapeur 1 cl', 'ordre' => 12],
            ['lib_court' => 'CPL', 'lib_long' => 'Caporal', 'ordre' => 11],
            ['lib_court' => 'CCH', 'lib_long' => 'Caporal Chef', 'ordre' => 10],
            ['lib_court' => 'SGT', 'lib_long' => 'Sergent', 'ordre' => 9],
            ['lib_court' => 'SCH', 'lib_long' => 'Sergent Chef', 'ordre' => 8],
            ['lib_court' => 'ADJ', 'lib_long' => 'Adjudant', 'ordre' => 7],
            ['lib_court' => 'ADC', 'lib_long' => 'Adjudant Chef', 'ordre' => 6],
            ['lib_court' => 'LTN', 'lib_long' => 'Lieutenant', 'ordre' => 5],
            ['lib_court' => 'CNE', 'lib_long' => 'Capitaine', 'ordre' => 4],
            ['lib_court' => 'CDT', 'lib_long' => 'Commandant', 'ordre' => 3],
            ['lib_court' => 'LCL', 'lib_long' => 'Lieutenant Colonel', 'ordre' => 2],
            ['lib_court' => 'COL', 'lib_long' => 'Colonel', 'ordre' => 1],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}
