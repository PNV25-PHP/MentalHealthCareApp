<?php

namespace App\Dtos\Patient;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class SignUpReq
{
    public string $email;
    public string $password;
    public string $fullname;

    private UserRepository $userRepository;

    public function __construct(Request $req, UserRepository $userRepository)
    {
        $this->email = $req->input("email");
        $this->password = $req->input("password");
        $this->fullname = $req->input("fullname");

        $this->userRepository = $userRepository;
    }

    public function validate()
    {
        $error = [];
        // TODO check if email valid
        if (email invalid) {
            $error["email"] = "email invalid";
        }

        // TODO check if email exist
        // $this->userRepository->findByEmail()
        if (email exits) {
            $error["email"] = "email already taken";
        }

        // TODO check if password valid

        // TODO check if fullName valid

        return count($error) > 0 ? $error : null;
    }
}
