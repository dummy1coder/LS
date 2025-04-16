<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Invalid email or already subscribed.'
            ], 422);
        }

        Subscriber::create([
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'Thanks for subscribing!'
        ]);
    }
}
