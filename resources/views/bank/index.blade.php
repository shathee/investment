@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Banks</div>

                    <div class="panel-body">

                        <table class="table table-striped .table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th colspan="2">
                                    <a href="banks/create">
                                        <button type="button" class="btn btn-primary">
                                            Insert a new Bank
                                        </button>
                                    </a>
                                </th>
                            </tr>
                            @forelse ($banks as $banks)
                                <tr>
                                    <td>{{$banks->id}}</td>
                                    <td>{{$banks->bank_name}}</td>
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
                                        <a href="">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                DELETE
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <p>No Banks Found</p>
                            @endforelse

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
