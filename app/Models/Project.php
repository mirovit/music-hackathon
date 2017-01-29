<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'parent_id', 'user_id', 'key_id', 'tempo', 'length',
    ];

    public function parent()
    {
        return $this->belongsTo(Project::class, 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function key()
    {
        return $this->belongsTo(Key::class);
    }

    public function instruments()
    {
        return $this->belongsToMany(Instrument::class);
    }

    public function styles()
    {
        return $this->belongsToMany(Style::class);
    }

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
