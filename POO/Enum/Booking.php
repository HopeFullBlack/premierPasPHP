<?php

namespace POO\Enum;

class Booking{

    private OfficeStatus $status;

    public function __construct()
    {
        $this->status =  OfficeStatus::APPROVAL_PENDING;
    }
}