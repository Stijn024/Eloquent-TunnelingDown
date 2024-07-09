<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return BrandResource::collection(Brand::all());
    }
    
    public function show(Brand $brand)
    {
        return new BrandResource($brand);
    }
}
