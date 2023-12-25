<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    private string $tableName = "users";

    public function insert(User $user)
    {
        DB::insert(
            "insert into $this->tableName (id, role, email, password)",
            [$user->id, $user->role, $user->email, $user->password]
        );
    }

    public function update(User $model)
    {
        // TODO: Implement Update() method.
    }

    public function delete(string $id)
    {
        // TODO: Implement Delete() method.
    }
}
