@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body text-center">
                    <a href='{{ route('app.projects.create') }}' type="button" class="btn btn-success btn-lg">Start</a><br><br>
                    <a href="{{ route('app.projects.random') }}" type="button" class="btn btn-default btn-lg">Get Random</a><br><br>
                    <a href="{{ route('app.projects.browse') }}" type="button" class="btn btn-default btn-lg">Browse</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
