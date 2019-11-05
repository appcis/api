<?php

namespace Tests\Unit;

use App\Models\Grade;
use App\Services\GradeService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GradeServiceTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testCreateGrade()
    {
        $lib = $this->faker->word;

        $service = new GradeService();
        $service->create($lib);

        $this->assertCount(1, Grade::all());
    }
}
