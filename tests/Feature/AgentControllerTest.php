<?php

namespace Tests\Feature;

use App\Models\Agent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AgentControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testIndex()
    {
        factory(Agent::class, 50)->create();

        $res = $this->getJson('/api/agent');

        $res->assertStatus(200)
            ->assertJsonCount(50, 'data');
    }

    public function testStore()
    {
        $nom = $this->faker->lastName;
        $prenom = $this->faker->firstName;
        $telephone = $this->faker->phoneNumber;

        $res = $this->postJson('/api/agent', compact('nom', 'prenom', 'telephone'));

        $res->assertStatus(201)
            ->assertJson(['data' => ['id' => 1, 'nom' => $nom, 'telephone' => $telephone, 'prenom' => $prenom]]);
    }
}
