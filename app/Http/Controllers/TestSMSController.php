<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class TestSMSController extends Controller
{
    public function send()
    {
        Nexmo::message()->send([
            'to'   => '0748368318',
            'from' => 'Vonage SMS API',
            'text' => 'Welcome to the Codezen Application!'

        ]);
    }
}
