<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    private string $tableName = "users";

    // public function insert(User $user)
    // {
    //     DB::insert(
    //         "insert into $this->tableName (ID, Role, Email, Password)",
    //         [$user->id, $user->role, $user->email, $user->password]
    //     );
    // }

    public function insert(User $user)
    {
        $sql = "INSERT INTO $this->tableName (ID, Role, FullName, Email, Password) VALUES (?, ?, ?, ?, ?)";
        
        // Truyền các giá trị vào placeholder
        DB::insert($sql, [
            $user->getId(),
            $user->getRole()->getValue(),
            $user ->getFullname(),
            $user->getEmail(),
            $user->getPassword(),
        ]);
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
