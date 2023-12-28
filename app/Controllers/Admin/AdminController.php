<?php

namespace App\Controllers\Admin;

use App\Repositories\AdminRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class AdminController extends Controller
{
    private $adminRepository;
    private $userRepository;

    public function __construct(AdminRepository $adminRepository, UserRepository $userRepository)
    {
        $this->adminRepository = $adminRepository;
        $this->userRepository = $userRepository;
    }

    public function addDoctor(Request $request)
    {
        // Validate request data if needed

        $email = $request->input('email');
        $password = $request->input('password');
        $fullName = $request->input('fullName');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $urlImage = $request->input('urlImage');
        $specialization = $request->input('specialization');
        $hospital = $request->input('hospital');

        $user = $this->userRepository->insert($email, $password, 'doctor', $fullName, $phone, $address, $urlImage);

        $this->adminRepository->addDoctor($user, $specialization, $hospital);

        // Handle the response or redirection accordingly
    }

    public function editDoctor(Request $request, $doctorId)
    {
        // Validate request data if needed

        $email = $request->input('email');
        $fullName = $request->input('fullName');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $urlImage = $request->input('urlImage');
        $specialization = $request->input('specialization');
        $hospital = $request->input('hospital');

        $user = $this->userRepository->getDoctorById($doctorId);

        $this->userRepository->updateUser($user, $email, $fullName, $phone, $address, $urlImage);

        $this->adminRepository->editDoctor($user, $specialization, $hospital);

        // Handle the response or redirection accordingly
    }

    // Add other CRUD methods as needed
}
