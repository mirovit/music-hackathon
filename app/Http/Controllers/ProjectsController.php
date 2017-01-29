<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Project;
use App\Models\Track;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function create()
    {
        $user = auth()->user();
        return view('projects.show', compact("title", "user", "hrAreas"));
    }

    public function index()
    {
        $projects = Project::with('tracks')->get();
        return view('projects.browse', compact("projects"));
    }

    //
    public function compose($progres = 0)
    {
        $user = auth()->user();

        $project = new Project();
        $project->parent_id = 120;
        $project->user_id = 1;
        $project->key_id = 2;
        $project->tempo = 120;
        $project->length = 16;
        $project->progress = "0/4";

        $track = new Track();
        $track->id = 1;
        $track->user_id = 2;
        $track->project_id = 1;

        $kickChannel = new Channel();
        $kickChannel->track_id = 1;
        $kickChannel->midi_data = $this->getMidiData();
        $kickChannel->volume = 50;

        $snareChannel = new Channel();
        $snareChannel->track_id = 1;
        $snareChannel->midi_data = $this->getMidiData();
        $snareChannel->volume = 100;

        $hihatChannel = new Channel();
        $hihatChannel->track_id = 1;
        $hihatChannel->midi_data = $this->getMidiData();
        $hihatChannel->volume = 60;

        $tomChannel = new Channel();
        $tomChannel->track_id = 1;
        $tomChannel->midi_data = $this->getMidiData();
        $tomChannel->volume = 1;

        $crashChannel = new Channel();
        $crashChannel->track_id = 1;
        $crashChannel->midi_data = $this->getMidiData();
        $crashChannel->volume = 1;

        return view('projects.compose', compact("user", "hrAreas"));
    }

    public function getMidiData()
    {

        $midiObject = new StdClass();
        $midiObject->name = "drum_track";
        $midiObject->track = 2;
        $midiObject->bulshits = 3;

        $JSON = json_encode($midiObject);

        return $JSON;
    }

}
