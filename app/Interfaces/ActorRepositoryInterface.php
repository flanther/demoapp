<?php

namespace App\Interfaces;

interface ActorRepositoryInterface {
    public function getAllActors();
    public function getActorById($id);
}