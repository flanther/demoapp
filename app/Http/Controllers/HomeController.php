<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class HomeController extends Controller
{
    public function index(){
        $actors = Actor::all();
        return view('home', ['actors' => $actors]);
    }
}
