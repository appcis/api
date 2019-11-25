<?php
namespace App\Models;

class Groupe extends \App\Models\AbstractModels\AbstractGroupe
{
    public function agents()
    {
        return $this->belongsToMany('\App\Models\Agent', 'agent_groupe', 'groupe_id', 'agent_id');
    }
}
