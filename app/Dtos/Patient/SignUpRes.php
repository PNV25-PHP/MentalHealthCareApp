<?php

namespace App\Dtos\Patient;

class SignUpRes
{
    public string $id;
    public string $role;

    /**
     * @param string $id
     * @param string $role
     */
    public function __construct(string $id, string $role)
    {
        $this->id = $id;
        $this->role = $role;
    }
}