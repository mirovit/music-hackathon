<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'user_id', 'project_id', 'instrument_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function instrument()
    {
        return $this->belongsTo(Instrument::class);
    }

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }
}
