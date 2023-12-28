<?php

namespace App\Dtos\Patient;

use Illuminate\Http\Request;

class BookingReq
{
    private string $userId;
    private string $doctorId;
    private string $option;
    private string $startAt;
    private string $endTimeOption;

    public function __construct(Request $request)
    {
        $this->userId = $request->input("userId");
        $this->doctorId = $request->input("doctorId");
        $this->option = $request->input("option");
        $this->startAt = $request->input("startAt");
        $this->endTimeOption = $request->input("endTimeOption");
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getDoctorId()
    {
        return $this->doctorId;
    }

    public function getOption()
    {
        return $this->option;
    }

    public function getStartAt()
    {
        return $this->startAt;
    }

    public function getEndTimeOption()
    {
        return $this->endTimeOption;
    }
}
