<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatGptIndexController extends Controller
{
    public function __invoke(string $id =null): \Inertia\Response
    {
       return Inertia::render('Chat/ChatIndex');
    }
}
