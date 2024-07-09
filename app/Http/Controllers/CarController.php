<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    public function show(Car $car)
    {
        return new CarResource($car->load('brand'));
    }

    public function cheap()
    {
        return CarResource::collection(Car::cheap()->get());
    }
    
    public function expensive()
    {
        return CarResource::collection(Car::expensive()->get());
    }    
}
