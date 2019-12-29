<?php


namespace App\Services;


use App\Models\Groupe;

class GroupeService
{
    public function create(string $libelle, string $description = null) : Groupe
    {
        $groupe = Groupe::create(compact('libelle', 'description'));
        return $groupe;
    }

    public function update(Groupe $groupe, string $libelle = null, string $description = null) : Groupe
    {
        $groupe->update(compact('libelle', 'description'));
        return $groupe;
    }

    public function getAll()
    {
        return Groupe::orderBy('libelle')->get();
    }

    public function setAgents(Groupe $groupe, array $agents)
    {
        $groupe->agents()->sync($agents);
        return true;
    }

    public function getAgents(Groupe $groupe)
    {
        return $groupe->agents()->where('agents.statut', true)->get();
    }
}
