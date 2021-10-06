<?php

namespace App\Services\v1;

use App\Flight;
use App\Providers\v1\FlightServiceProvider;

class FlightService{
    
    protected $supportedIncludes = [
        'arrivalAirport' => 'arrival',
        'departureAirport' => 'departure'
    ];

    public function getFlights($parameters){
        if (empty($parameters)){
            return $this->filterFlights(Flight::all()); 
        }

        $withKeys = [];

        if (isset($parameters['include'])){
            $includeParms = explode(',', $parameters['include']);
            $includes = array_intersect($this->supportedIncludes, $includeParms);
            $withKeys = array_keys($includes);
        }

        return $this->filterFlights(Flight::with(withKeys)->get())
    }

    public function getFlight($flightNumber){
        return $this->filterFlights(Flight::where('flightNumber', $flightNumber)->get()); 
    }

    protected function filterFlights($flights){
        $data = [];

        foreach ($flights as $flight){
            $entry = [
                'flightNumber' => $flight->flightNumber,
                'href' => route('flights.show', $flight->flightNumber),
                'status' => $flight->status,
            ];

            $data[] = $entry;
        }

        return $data;
    }
}

