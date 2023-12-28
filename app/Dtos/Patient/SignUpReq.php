<?php

namespace App\Dtos\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SignUpReq
{
    public string $email;
    public string $password;
    public string $fullname;
    public string $phone;

    // You can inject the UserRepository in the constructor if needed
    public function __construct(Request $req)
    {
        $this->email = $req->input("email");
        $this->password = $req->input("password");
        $this->fullname = $req->input("fullname");
        $this->phone = $req->input("phone");
    }

    public function validate(): ?array
    {
        $errors = [];
      
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Email is invalid";
        }
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $this->password)) {
            $errors["password"] = "Password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one digit, and one special character";
        }

        // Validate full name (at least 2 words)
        $nameWords = explode(' ', $this->fullname);
        if (count($nameWords) < 2) {
            $errors["fullname"] = "Full name must have at least 2 words";
        }
        if (!preg_match('/^0\d{9}$/', $this->phone)) {
            $errors["phone"] = "Phone number must be 10 digits starting with 0";
        }

        return empty($errors) ? null : $errors;
    }

   
}
