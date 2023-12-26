<?php

namespace App\Models;

class User extends BaseModel
{

    private Role $role;
    private string $email;
    private string $password;
    private string $fullname;
   
    private string $address; 
    private string $phone;
    private string $url_image; 

 
    public function __construct(
        Role $role,
        string $email,
        string $password,
        string $fullname,
        string $phone = '',
        string $address = '', 
        string $url_image = '' 
    ) {
        parent::__construct();
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
        $this->fullname = $fullname;
        
        $this->phone = $phone;
        $this->address = $address;
        $this->url_image = $url_image;
    }

//     public function getRole(): Role
//     {
//     $role = Role::Doctor;
// $roleString = $role->getValue();

// // Bây giờ bạn có thể sử dụng $roleString nơi mà một chuỗi được yêu cầu

//     }
public function getRole(): string
{
    $role = Role::Doctor;
    $roleString = $role->getValue();

    // Bạn có thể thực hiện bất kỳ logic xử lý nào khác tại đây nếu cần thiết

    return $roleString;
}

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

   

 
    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getUrlImage(): string
    {
        return $this->url_image;
    }

    public function setUrlImage(string $url_image): void
    {
        $this->url_image = $url_image;
    }
}
