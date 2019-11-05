<?php

namespace Tests\Unit;

use App\Models\Agent;
use App\Services\AgentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AgentServiceTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /**
     * Test creation d'un agent
     */
    public function testCreateAgent()
    {
        $nom = $this->faker->lastName;
        $prenom = $this->faker->firstName;

        $service = new AgentService();
        $service->create($nom, $prenom);

        $this->assertCount(1, Agent::all());
    }

    public function testCreateAgentWithoutPrenom()
    {
        $nom = $this->faker->lastName;

        $service = new AgentService();
        $service->create($nom);

        $this->assertCount(1, Agent::all());
    }
}
