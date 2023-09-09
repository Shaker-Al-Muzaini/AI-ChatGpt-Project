<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatRequest;
use JetBrains\PhpStorm\NoReturn;
use OpenAI\Laravel\Facades\OpenAI;

class ChatGptStoreController extends Controller
{

    #[NoReturn] public function __invoke(StoreChatRequest $request){
            $messages=[];
            $messages[]=['role'=>'user','content',$request->input('promt')];
            $response=OpenAI::chat()->create([
                'model'=>'gpt-3.5-turbo',
                'messages'=>$messages
            ]);
            $messages[]=['role'=>'assistant','content'=>$response->choices[0]->message->content];
            dd($messages);
    }

}
