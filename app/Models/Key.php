<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $fillable = [
        'slug', 'name',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
