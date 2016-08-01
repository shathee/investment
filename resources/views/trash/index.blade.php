@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$title}}</div>

                    <div class="panel-body">

                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))

                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div> <!-- end .flash-message -->

                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{ url('trash/taxrate') }}">
                                <button type="button" class="btn btn-default">Left</button>
                            </a>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>

        </div>

    </div>



@endsection
