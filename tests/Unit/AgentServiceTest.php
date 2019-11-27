<?php

namespace Tests\Unit;

use App\Models\Agent;
use App\Services\AgentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
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
        $telephone = '0601020304';

        $service = new AgentService();
        $service->create($nom, $prenom, $telephone);

        $this->assertCount(1, Agent::all());
    }

    public function testCreateAgentWithoutPrenom()
    {
        $nom = $this->faker->lastName;

        $service = new AgentService();
        $service->create($nom, null, '0601020304');

        $this->assertCount(1, Agent::all());
        $this->assertEquals(true, Agent::first()->statut);
    }

    public function testCreateAgentWithoutTelephone()
    {
        $nom = $this->faker->lastName;

        $service = new AgentService();
        $service->create($nom);

        $this->assertCount(1, Agent::all());
        $this->assertEquals(false, Agent::first()->statut);
    }

    public function testUpdateAgentName()
    {
        $agent = factory(Agent::class)->create();
        $newName = $this->faker->lastName;

        $service = new AgentService();
        $updAgent = $service->update($agent, $newName);

        $this->assertEquals($newName, $updAgent->nom);
    }

    public function testUpdateAgentTelephone()
    {
        $agent = factory(Agent::class)->create();
        $newPhone = $this->faker->phoneNumber;

        $service = new AgentService();
        $updAgent = $service->update($agent, null, null, $newPhone);

        $this->assertEquals($newPhone, $updAgent->telephone);
    }

    public function testActiveAgent()
    {
        $agent = factory(Agent::class)->create(['statut' => false]);

        $service = new AgentService();
        $service->active($agent);

        $this->assertTrue($agent->statut);
    }

    public function testDesactiveAgent()
    {
        $agent = factory(Agent::class)->create();

        $service = new AgentService();
        $service->desactive($agent);

        $this->assertFalse($agent->statut);
    }

    public function testGetAgents()
    {
        factory(Agent::class, 50)->create();

        $service = new AgentService();
        $agents = $service->getAgents();

        $this->assertCount(50, $agents);
        $this->assertInstanceOf(Collection::class, $agents);
    }

    public function testGetAgentsActive()
    {
        factory(Agent::class, 50)->create();
        factory(Agent::class, 8)->create(['statut' => false]);

        $service = new AgentService();
        $agents = $service->getAgents();
        $agents_all = $service->getAgents(true);

        $this->assertCount(50, $agents);
        $this->assertCount(58, $agents_all);
        $this->assertInstanceOf(Collection::class, $agents);
        $this->assertInstanceOf(Collection::class, $agents_all);
    }
}
