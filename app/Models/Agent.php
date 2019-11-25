<?php
namespace App\Models;

class Agent extends \App\Models\AbstractModels\AbstractAgent
{
    public function groupes()
    {
        return $this->belongsToMany(Groupe::class, 'agent_groupe', 'agent_id', 'groupe_id');
    }
}
