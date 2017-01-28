<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'track_id', 'midi_data', 'volume',
    ];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function setVolumeAttribute($volume)
    {
        $volume = (int)$volume;

        if($volume < 0) {
            $volume = 0;
        }

        if($volume > 100) {
            $volume = 100;
        }

        $this->attributes['volume'] = $volume;
    }
}
