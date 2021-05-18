<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PriceResource;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        return PriceResource::collection(Price::all());
    }
}
