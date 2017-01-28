<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'name', 'image',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
