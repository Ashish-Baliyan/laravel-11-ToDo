<?php

namespace App\Http\Controllers;

use App\Facades\Greeting;
use Illuminate\Http\Request;

class CustomFacadeGreetingController extends Controller
{
    public function show()
    {
        $greeting = Greeting::getRandomGreeting(); // Using the facade
        return response()->json(['greeting' => $greeting]);
    }
}
