<?php

namespace POO\Static;

class Booking
{

//    private static int $count = 0;
    private static ?self $_instance = null;

//    public function __construct()
    private function __construct()
    {
        echo "nouvelle instance !";
    }

//    public static function getCount(): int
//    {
//        return self::$count;
//    }
    /**
     * exemple de singleton
     * @return Booking|null
     */
    public static function getInstance(): ?Booking
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


}