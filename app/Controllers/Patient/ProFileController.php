<?php

namespace App\Controllers\Patient;

use App\Dtos\Commom\ProFileReq;
use App\Models\User;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Models\Role;
use Laravel\Lumen\Routing\Controller;

class ProFileController extends Controller
{
    private UserRepository $userRepository;
    private PatientRepository $patientRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->patientRepository = new PatientRepository();
    }

    public function index()
    {
        return view('ProFile');
    }

    public function updatePatient(Request $req)
    {
        $proFileRequest = new ProFileReq($req);
        if ($proFileRequest->role == "Admin") {
            $role = Role::Admin;
        } elseif ($proFileRequest->role == "Doctor") {
            $role = Role::Doctor;
        } else {
            $role = Role::Patient;
        }
        $change = new UserRepository();
        $user = new User($role, $proFileRequest->email, $proFileRequest->password, $proFileRequest->fullname, $proFileRequest->address == null ? "" : $proFileRequest->address, $proFileRequest->phone == null ? "" : $proFileRequest->phone, $proFileRequest->url_image == null ? "" : $proFileRequest->url_image);
        $result =  $change->updateUser($user);
        if ($result) {
            return response()->json([
                'message' => 'Update user sucessful',
            ], 200);
        }
        return response()->json([
            'message' => 'Update user not sucessful',
        ], 404);
    }
}
