<?php


namespace App\Services;


use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UserService
{
    public function create(string $email, string $name, string $password = null) : User
    {
        if (!$password)
            $password = Str::random(15);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'permissions' => 'user',
            'active' => true
        ]);

        return $user;
    }

    public function setPermission(User $user, string $permission) : User
    {
        $existing_permission = ['user', 'admin', 'superadmin'];

        if (!in_array($permission, $existing_permission)) {
            throw new \Exception('type de permission inconnue');
        }

        $user->permissions = $permission;
        $user->save();

        return $user;
    }

    public function active(User $user) : User
    {
        $user->active = true;
        $user->save();
        return $user;
    }

    public function desactive(User $user) : User
    {
        $user->active = false;
        $user->save();
        return $user;
    }

    public function getUsers($desactiver = false) : Collection
    {
        if ($desactiver) {
            return User::orderBy('name')->get();
        }

        return User::where('active', true)->orderBy('name')->get();
    }

    public function update(User $user, string $name = null, string $email = null)
    {
        if ($name) {
            $user->name = $name;
        }
        if ($email) {
            $user->email = $email;
        }
        $user->save();
        return $user;
    }
}
