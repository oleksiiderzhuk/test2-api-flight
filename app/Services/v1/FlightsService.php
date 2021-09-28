<?php

namespace App\Services\v1;

use App\Flight;

class FlightService{
    public fnction getFlights(){
        return Flight::all();
    }
}

