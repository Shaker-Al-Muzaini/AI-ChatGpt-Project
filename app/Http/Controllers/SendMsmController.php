<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMsmController extends Controller
{
    public  function index (){
        $basic  = new \Vonage\Client\Credentials\Basic("b1e99e66", "TSilWaLlqBmJ8qeJ");
        $client = new \Vonage\Client($basic);
        $message=$client->sms()->send(
            new \Vonage\SMS\Message\SMS("970567379813", 'Shaker', 'ok')
        );
        return response()->json('successes',200);

    }
}
