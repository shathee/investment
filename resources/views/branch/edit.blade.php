@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $title }}</div>

                    <div class="panel-body">
                        {!! form($form) !!}

                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>

        </div>
    </div>

@endsection
