@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body text-center">
                    <div class="col col-lg-12" id="ProjectContainer" >  

                        @foreach($projects as $project)
                        <div class="col-sm-6 col-md-4"> 
                            <div class="thumbnail"> 
                                <div class="caption">                                 
                                    <h3>#{{ $project->id }}</h3>
                                    <p>{{ $project->key->name }}</p>
                                    <p><b>Tempo:</b> {{ $project->tempo }}</p>
                                    <p><b>Progres:</b> @if($project->tracks->count() >4 ) {{ $project->tracks->count()-4 }} @else {{ $project->tracks->count() }} @endif/4</p>
                                    <p>
                                        <a href="{{ route('instrument.select') }}" class="btn btn-primary" role="button">Select</a> 
                                        <button class="btn btn-success play-stop-btn" role="button"><span>Play</span>
                                            <audio >
                                                <source src="{{ url('audio/1.mp3') }}" type="audio/mpeg">
                                            </audio>
                                        </button>
                                    </p> 
                                </div> 
                            </div> 
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function ()
    {
        $('.play-stop-btn').click(function () {
            if ($(this).hasClass('start')) {
                $(this).removeClass('start');
                $(this).children('span').html('Play');
                $(this).children('audio')[0].pause();

            } else {
                $(this).addClass('start');
                $(this).children('span').html('Pause');
                $(this).children('audio')[0].play();
            }
        });
    });
</script>
@endsection
