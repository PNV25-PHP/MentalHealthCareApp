<?php

namespace App\Models;

class User extends BaseModel
{
    public string $role;
    public string $email;
    public string $password;
    public string $fullName;

    public function __construct(Role $role, string $email, string $password, string $fullName)
    {
        parent::__construct();
        $this->role = $role->getValue();
        $this->email = $email;
        $this->password = $password;
        $this->fullName = $fullName;
    }
}
