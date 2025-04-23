<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class ChatbotController extends Controller
{
    public function show()
    {
        return view('includes.chat');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $input = $request->message;

        $match = Question::where('question', 'LIKE', "%$input%")->first();

        $response = $match ? $match->answer : "Sorry, I didn't understand that.";

        return view('includes.chat', [
            'message' => $input,
            'response' => $response,
        ]);
    }

    public function toggle()
{
    session()->put('chatbot_hidden', !session('chatbot_hidden', false));
    return redirect()->back();
}
}

