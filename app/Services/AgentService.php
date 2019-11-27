<?php


namespace App\Services;


use App\Models\Agent;

class AgentService
{
    /**
     * @param string $nom
     * @param string|null $prenom
     * @param string|null $telephone
     * @return mixed
     */
    public function create(string $nom, string $prenom = null, string $telephone = null)
    {
        $agent =  Agent::create([
            'nom' => $nom,
            'prenom' => $prenom
        ]);
        if ($telephone) {
            $agent->telephone = $telephone;
            $agent->statut = true;
        } else {
            $agent->statut = false;
        }
        $agent->save();
        return $agent;
    }

    public function update(Agent $agent, string $nom = null, string $prenom = null, string $telephone = null)
    {
        $agent->update(compact('nom', 'prenom', 'telephone'));

        if ($agent->telephone) {
            $agent->telephone = $telephone;
            $agent->statut = true;
        } else {
            $agent->statut = false;
        }

        return $agent;
    }

    public function active(Agent $agent)
    {
        return $agent->update(['statut' => true]);
    }

    public function desactive(Agent $agent)
    {
        return $agent->update(['statut' => false]);
    }

    public function getAgents($desactiver = false)
    {
        if ($desactiver) {
            return Agent::orderBy('nom')->get();
        }

        return Agent::where('statut', true)->orderBy('nom')->get();
    }
}
