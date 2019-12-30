<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Groupe;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    private $service;

    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('sms.index');
    }

    public function create()
    {
        if (config('app.fake_data')) {
            $agents = factory(Agent::class, 35)->make();
            $groupes = factory(Groupe::class, 6)->make();
        }

        return view('sms.form', compact('agents', 'groupes'));
    }

    public function store()
    {

    }

    public function show()
    {
        return view('sms.show');
    }
}
