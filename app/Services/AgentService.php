<?php


namespace App\Services;


use App\Models\Agent;

class AgentService
{
    /**
     * @param string $nom
     * @param string|null $prenom
     * @return mixed
     */
    public function create(string $nom, string $prenom = null)
    {
        return Agent::create([
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }
}
