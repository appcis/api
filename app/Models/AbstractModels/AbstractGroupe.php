<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractGroupe extends Model
{
    /**  
     * Primary key type.
     * 
     * @var string
     */
    protected $keyType = 'bigInteger';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string',
        'description' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    /**  
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'id',
        'libelle',
        'description',
        'created_at',
        'updated_at'
    ];
    
    public function agents()
    {
        return $this->belongsToMany('\App\Models\Agent', 'agent_groupes', 'groupe_id', 'agent_id');
    }
}
