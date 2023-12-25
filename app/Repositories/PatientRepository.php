<?php

namespace App\Repositories;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientRepository
{
    private string $tableName = "users";

    public function insert(Patient $patient)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$patient->id, $patient->userid]
        );
    }
}
