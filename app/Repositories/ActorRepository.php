<?php

namespace App\Repositories;

use App\Interfaces\ActorRepositoryInterface;
use App\Models\Actor;

class ActorRepository implements ActorRepositoryInterface {
    public function getAllActors()
    {
        return Actor::all();
    }

    public function getActorById($id)
    {
        return Actor::findOrFail($id);
    }
}