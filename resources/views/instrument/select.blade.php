@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                    <div class="col col-lg-12">
                        <div class="col col-lg-3">
                            <a href="{{ route('project.compose') }}" class="selectInstrument">
                                <img style="width: 100%;" src="{{ url('images/piano.png') }}" />
                            </a>
                        </div>
                        <div class="col col-lg-3">
                            <a href="{{ route('project.compose') }}" class="selectInstrument">
                                <img style="width: 100%;" src="{{ url('images/drum.png') }}" />
                            </a>
                        </div>
                        <div class="col col-lg-3">
                            <a href="{{ route('project.compose') }}" class="selectInstrument">
                                <img style="width: 100%;" src="{{ url('images/bass.png') }}" />
                            </a>
                        </div>
                        <div class="col col-lg-3">
                            <a href="{{ route('project.compose') }}" class="selectInstrument inactive">
                                <img style="width: 100%;" src="{{ url('images/guitar.png') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
