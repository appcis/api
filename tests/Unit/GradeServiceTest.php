<?php

namespace Tests\Unit;

use App\Models\Grade;
use App\Services\GradeService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Tests\TestCase;

class GradeServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testGetGrades()
    {
        factory(Grade::class, 50)->create();

        $service = new GradeService();
        /** @var Collection $grades */
        $grades = $service->getGrades();

        $this->assertInstanceOf(Collection::class, $grades);

        $this->assertEquals($grades->min('ordre'), $grades->first()->ordre);
        $this->assertEquals($grades->max('ordre'), $grades->last()->ordre);
    }
}
