<?php

namespace Tests\Feature;

use App\Models\Grade;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GradeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $user = factory(User::class)->create();
        factory(Grade::class, 50)->create();

        $response = $this->actingAs($user, 'api')
            ->get('/api/grade');

        $response->assertStatus(200)
            ->assertJsonCount(50, 'data');
    }
}
