<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgentResource;
use App\Models\Groupe;
use App\Services\GroupeService;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /** @var GroupeService $service */
    private $service;

    public function __construct(GroupeService $groupeService)
    {
        $this->service = $groupeService;
    }

    public function agents(Groupe $groupe)
    {
        $agents = $this->service->getAgents($groupe);
        return AgentResource::collection($agents);
    }
}
