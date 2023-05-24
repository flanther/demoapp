<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    protected $maps = [
        'id' => 'actor_id',
    ];

    protected $primaryKey = 'actor_id';
    protected $table = 'actor';
    public $timestamps = false;
}