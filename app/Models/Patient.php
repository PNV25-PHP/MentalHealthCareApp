<?php

namespace App\Models;

class Patient extends BaseModel
{
    public string $userid;

    /**
     * @param string $userid
     * @throws \Exception
     */
    public function __construct(string $userid)
    {
        parent::__construct();
        $this->userid = $userid;
    }
}
