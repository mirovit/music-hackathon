@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Music Composer Editor</div>

                    <div class="panel-body text-center">
                        <form action="#" method="post">

                            <div id="editor">

                                <div id="trackMonitor" >

                                    <div id="projectSettings">

                                        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                        <div class="row">
                                            <div class="col-xs-12 col-md-8"><h1>My awesome project :)</h1></div>
                                            <div class="col-xs-6 col-md-4">
                                                <div id="progress" class="control-group">
                                                    <label class="control-label">Instrument progress</label>
                                                    <div class="controls readonly">
                                                        1/4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr/>

                                        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <div id="tempo" class="control-group">
                                                    <label class="control-label">Tempo</label>
                                                    <div class="controls readonly">
                                                        120
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <div id="measure" class="control-group">
                                                    <label class="control-label">Measure</label>
                                                    <div class="controls readonly">
                                                        4/4
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <div id="length" class="control-group">
                                                    <label class="control-label">Lenght</label>
                                                    <div class="controls readonly">
                                                        4/4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="instrumentTrack">
                                            <div id="ChannelGrid">
                                                <div class="measure">

                                                        <ul class="list-inline">
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                            <li class="slot16note">
                                                                <span>Test Data1</span>
                                                            </li>
                                                        </ul>

                                                </div>
                                            </div>
                                            <div id="">

                                            </div>
                                    </div>



                                </div>

                                <div id="instrumentController">

                                    <div class="octave">
                                        <div class="row">
                                            <div class="col-md-3"><i class="fa fa-minus" aria-hidden="true"></i></div>
                                            <div class="col-md-3">3</div>
                                            <div class="col-md-3"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                        </div>
                                    </div>

                                    <div class="noteLength">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="noteIcon wholeNote">
                                                    <img style="width: 100%;" src="{{ asset('img/icons/note-whole.png') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="noteIcon halfNote">
                                                     <img style="width: 100%;" src="{{ asset('img/icons/note-half.png') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="noteIcon quarterNote">
                                                     <img style="width: 100%;" src="{{ asset('img/icons/note-quarter.png') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="noteIcon eightNote">
                                                     <img style="width: 100%;" src="{{ asset('img/icons/note-eight.png') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="noteIcon sixteenthNote">
                                                     <img style="width: 100%;" src="{{ asset('img/icons/note-sixteen.png') }}" alt="" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tonal">

                                        <div class="row">
                                            <div class="col-md-3">C</div>
                                            <div class="col-md-3">C#</div>
                                            <div class="col-md-3">D</div>
                                            <div class="col-md-3">D#</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">E</div>
                                            <div class="col-md-3">F</div>
                                            <div class="col-md-3">F#</div>
                                            <div class="col-md-3">G</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">G#</div>
                                            <div class="col-md-3">A</div>
                                            <div class="col-md-3">A#</div>
                                            <div class="col-md-3">B</div>
                                        </div>

                                    </div>

                                    <div class="rithum">

                                        <div class="row">
                                            <div class="col-md-3">KICK</div>
                                            <div class="col-md-3">SNARE</div>
                                            <div class="col-md-3">HIHAT</div>
                                            <div class="col-md-3">D#</div>
                                            <div class="col-md-3">D#</div>
                                        </div>

                                    </div>

                                </div>



                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
