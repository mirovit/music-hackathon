<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.browse', compact('projects'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('projects.show', compact('title', 'user', 'hrAreas'));
    }

    //
    public function compose()
    {
        $user = auth()->user();

        $project = Project::create([
            'parent_id' => 120,
            'user_id'   => 1,
            'key_id'    => 2,
            'tempo'     => 120,
            'length'    => 16,
            'progress'  => '0/4',
        ]);

        $track = $project->tracks()->create([
            'user_id'       => 2,
            'instrument_id' => 1,
        ]);

        $kickChannel = $track->channels()->create([
            'midi_data' => $this->getMidiData(),
            'volume'    => 50,
        ]);

        $snareChannel = $track->channels()->create([
            'midi_data' => $this->getMidiData(),
            'volume'    => 100,
        ]);

        $hihatChannel = $track->channels()->create([
            'midi_data' => $this->getMidiData(),
            'volume'    => 60,
        ]);

        $tomChannel = $track->channels()->create([
            'midi_data' => $this->getMidiData(),
            'volume'    => 1,
        ]);

        $crashChannel = $track->channels()->create([
            'midi_data' => $this->getMidiData(),
            'volume'    => 1,
        ]);

        return view('projects.compose', compact('user', 'hrAreas'));
    }

    public function getMidiData()
    {
        $midiObject = new \StdClass();
        $midiObject->name = 'drum_track';
        $midiObject->track = 2;
        $midiObject->bulshits = 3;

        return json_encode($midiObject);
    }
}
