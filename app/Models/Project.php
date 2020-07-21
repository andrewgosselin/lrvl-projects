<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ["name", "description", "visibility", "version", "links"];
    protected $casts = [
        "links" => "array"
    ];
}
