<?php
namespace AppBundle\Model;

use AppBundle\Entity\Weather;

class Weather
{
    public function create()
    {
        error_log( "\n".print_r($_SERVER['SCRIPT_NAME'],true), 3, "../logs/error_log");
    }
}
