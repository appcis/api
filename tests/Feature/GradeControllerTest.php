<?php

namespace Tests\Feature;

use App\Models\Grade;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GradeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        factory(Grade::class, 50)->create();

        $response = $this->get('/api/grade');

        $response->assertStatus(200)
            ->assertJsonCount(50, 'data');
    }
}
