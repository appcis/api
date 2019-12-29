<?php

namespace Tests\Feature;

use App\Models\Agent;
use App\Models\Groupe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GroupeController extends TestCase
{
    use RefreshDatabase;

    public function testAgents()
    {
        /** @var Groupe $_groupe */
        $_groupe = factory(Groupe::class)->create();
        factory(Agent::class, 5)->create();
        factory(Agent::class, 5)->create(['statut' => false]);

        $res = $this->get('/api/groupe/' . $_groupe->id . '/agent');

        $res->assertJsonCount(5, 'data');
    }
}
