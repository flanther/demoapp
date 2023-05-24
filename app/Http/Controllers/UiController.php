<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Facades\Log;

class UiController extends Controller
{
    public function index(){
        Log::info("UI is being requested. The view will be rendered");
        $actors = Actor::all();
        return view('ui', ['actors' => $actors]);
    }
}
