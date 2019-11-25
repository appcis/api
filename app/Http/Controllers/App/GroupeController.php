<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Groupe;
use App\Services\AgentService;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes = $this->service->getAll();
        return view('groupe.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param AgentService $agentService
     * @return \Illuminate\Http\Response
     */
    public function create(AgentService $agentService)
    {
        $groupe = new Groupe();
        $agents = $agentService->getAgents();
        return view('groupe.form', compact('groupe', 'agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->service->create($request->libelle,$request->description);
        return redirect(route('groupe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show(Groupe $groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function edit(AgentService $agentService, Groupe $groupe)
    {
        $agents = $agentService->getAgents();
        return view('groupe.form', compact('groupe', 'agents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Groupe $groupe)
    {
        $this->service->update($groupe, $request->libelle,$request->description);

        if ($request->has('agents')) {
            $this->service->setAgents($groupe, $request->agents);
        }

        return redirect(route('groupe.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupe $groupe)
    {
        //
    }
}
