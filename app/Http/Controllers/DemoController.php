<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Demo;

class DemoController extends Controller
{
    // DemoController.php
public function index() {
    $demos = Demo::all(); 
    return view('demo.index', compact('demos'));
}

public function show($slug) {
    $demo = Demo::where('slug', $slug)->firstOrFail();
    return view('demo.show', compact('demo'));
}


}
