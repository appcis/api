<?php

namespace App\Http\Controllers;

use App\Http\Resources\AgentResource;
use App\Models\Agent;
use App\Services\AgentService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AgentController extends Controller
{
    /** @var AgentService */
    private $service;

    public function __construct(AgentService $agentService)
    {
        $this->service = $agentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return AgentResource::collection($this->service->getAgents());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return AgentResource
     */
    public function store(Request $request)
    {
        $agent = $this->service->create($request->nom, $request->prenom, $request->telephone);
        return new AgentResource($agent);
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     * @return AgentResource
     */
    public function show(Agent $agent)
    {
        return new AgentResource($agent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Agent  $agent
     * @return AgentResource
     */
    public function update(Request $request, Agent $agent)
    {
        $updAgent = $this->service->update($agent,
            $request->nom ?? null,
            $request->prenom ?? null,
            $request->telephone ?? null);

        return new AgentResource($updAgent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
