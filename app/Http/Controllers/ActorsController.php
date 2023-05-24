<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ActorRepositoryInterface;

class ActorsController extends Controller
{
    private ActorRepositoryInterface $actorRepository;
    public function __construct(ActorRepositoryInterface $actorRepository)
    {
        $this->actorRepository = $actorRepository;
    }

    public function index(){
        $actors = $this->actorRepository->getAllActors();
        return view('home', ['actors' => $actors]);
    }

    public function getActor(Request $request){
        $actor = $this->actorRepository->getActorById($request->route('id'));
        return view('home', ['actors' => $actor]);
    }
}
