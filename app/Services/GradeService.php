<?php


namespace App\Services;


use App\Models\Grade;

class GradeService
{
    public function getGrades()
    {
        return Grade::orderBy('ordre', 'ASC')->get();
    }
}
