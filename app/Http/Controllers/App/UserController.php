<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserService $service */
    private $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->service->getUsers(true);

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $titre = 'Nouvel utilisateur';
        $action = route('user.store');
        return view('user.form', compact('user', 'titre', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->service->create($request->email, $request->name);
        return redirect()->route('user.index')
            ->with('success', 'Le nouvel utilisateur à été créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $titre = 'Edition utilisateur';
        $action = route('user.update', $user);
        return view('user.form', compact('user', 'titre', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->service->update($user, $request->name, $request->email);
        if ($request->active) {
            $this->service->active($user);
        } else {
            $this->service->desactive($user);
        }
        return redirect()->route('user.index')
            ->with('success', 'Utilisateur correctement mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
