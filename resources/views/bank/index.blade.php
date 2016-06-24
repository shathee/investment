@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Banks</div>

                    <div class="panel-body">

                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))

                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            @endforeach
                        </div> <!-- end .flash-message -->
                        <table class="table table-striped .table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th colspan="2">

                                </th>
                            </tr>
                            @forelse ($banks as $banks)
                                <tr>
                                    <td>{{$banks->id}}</td>
                                    <td><a href="banks/{{$banks->id}}">{{$banks->bank_name}}</a></td>
                                    <td>{{$banks->bank_type}}</td>
                                    <td>
                                        <a href="banks/{{$banks->id}}/edit">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                EDIT
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="confirm_delete" data-title="Confirm Action" href="{{ url('banks/'.$banks->id.'/delete') }}">
                                            <button type="button" class="btn btn-danger btn-md"
                                                    data-toggle="" data-target="">
                                                     <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                </tr>
                            @empty
                                <p>No Banks Found</p>
                            @endforelse

                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="banks/create">
                    <button type="button" class="btn btn-primary">
                        Insert a new Bank
                    </button>
                </a>
            </div>

        </div>
    </div>



@endsection
