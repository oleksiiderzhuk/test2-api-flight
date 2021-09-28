<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    public function arrivingFlights(){
        return $this->hasany('App\Flight','arrivalAirport_id');
    }

    public function departingFlights(){
        return $this->hasany('App\Flight','departureAirport_id');
    }
}
