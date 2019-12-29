<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Groupe;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {
        if (config('app.fake_data')) {
            $agents = factory(Agent::class, 35)->make();
            $groupes = factory(Groupe::class, 6)->make();
        }

        return view('sms.form', compact('agents', 'groupes'));
    }
}
