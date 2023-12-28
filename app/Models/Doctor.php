<?php

namespace App\Models;

class Doctor extends BaseModel
{
    public string $userid;
    public string $specialization;
    public string $hospital;

    /**
     * @param string $userId
     * @param string $specialization
     * @param string $hospital
     * @throws \Exception
     */
    public function __construct(string $userid, string $specialization, string $hospital)
    {
        parent::__construct();
        $this->userid = $userid;
        $this->specialization = $specialization;
        $this->hospital = $hospital;
    }

    public function getUserId(): string
    {
        return $this->userid;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    public function getHospital(): string
    {
        return $this->hospital;
    }
}
