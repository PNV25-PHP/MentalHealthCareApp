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
            $user->getRole(),
            $user->getFullname(),
            $user->getEmail(),
            $user->getPassword(),
        ]);
    }

    public function selectAll()
    {
        $users = DB::table('users')->get();

        return $users;
    }

    public function update(User $model)
    {
        // TODO: Implement Update() method.
    }

    public function delete(string $id)
    {
        // TODO: Implement Delete() method.
    }

    public function findByEmailAndPassword($email, $password)
    {
        $result = DB::select("SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1", [$email, $password]);

        if (!empty($result)) {
            $user = $result[0];
            return $user;
        }

        return null;
    }
}
