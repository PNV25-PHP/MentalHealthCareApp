<?php

namespace App\Controllers\Patient;

use App\Dtos\Patient\LogInReq;

use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class loginController extends Controller
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
        return view('login');
    }

    public function login(Request $req)
    {
        $loginRequest = new LogInReq($req);

        $email = $loginRequest->getEmail();
        $password = $loginRequest->getPassword();

        $userRepository = new UserRepository();
        $user = $userRepository->findByEmailAndPassword($email, $password);

        if ($user) {
            $userRole = $user->Role;

            return response()->json([
                'message' => 'User found',
                'email' => $email,
                'role' => $userRole,
            ]);
        }

        return response()->json([
            'message' => 'User not found or invalid credentials',
            'email' => $email,
        ], 404);
    }
}
