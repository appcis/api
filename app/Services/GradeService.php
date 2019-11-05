<?php


namespace App\Services;


use App\Models\Grade;

class GradeService
{
    /**
     * @param string $lib_court
     * @param string|null $lib_long
     * @return mixed
     */
    public function create(string $lib_court, string $lib_long = null)
    {
        return Grade::create(compact('lib_court', 'lib_long'));
    }
}
