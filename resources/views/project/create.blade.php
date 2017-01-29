@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="exampleSelect1">Select Tempo</label>
                            <input class="form-control" type="number" name="tempo" min="60" max="200" step="5">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Select Legnth</label>
                            <select class="form-control" id="exampleSelect2">
                                <option>16 bars</option>
                                <option>32 bars</option>
                                <option>64 bars</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect3">Select Legnth</label>
                            <select class="form-control" id="exampleSelect3">
                                <option>16 bars</option>
                                <option>32 bars</option>
                                <option>64 bars</option>
                            </select>
                        </div>
                        <a href="{{ route('instrument.select') }}" class="btn btn-success btn-lg" >Start Project</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
