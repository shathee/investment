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

                        <table class="table table-striped .table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Branch Name</th>
                                <th>Bank  Name</th>
                                <th>Address</th>
                                <th></th>
                                <th></th>
                            </tr>


                            @forelse ($branchs as $branch)
                                <tr>
                                    <td>{{$branch->id}}</td>
                                    <td><a href="{{url('branch/').$branch->id}}" >{{$branch->branch_name}}</a></td>
                                    <td>{{$branch->bank['bank_name']}}</td>
                                    <td>{{$branch->branch_add}}</td>
                                    <td>
                                        <a href="{{ url('branch/'.$branch->id.'/edit') }}">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                EDIT
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="confirm_delete" data-title="Confirm Action" href="{{ url('branch/'.$branch->id.'/delete') }}">
                                            <button type="button" class="btn btn-danger btn-md"
                                                    data-toggle="" data-target="">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <p>No Branchws Found</p>
                            @endforelse
                                <tr>
                                    <td colspan="6">{!! $branchs->links() !!}</td>
                                </tr>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ url('branch/create') }}">
                    <button type="button" class="btn btn-primary">
                        Insert a new Branch
                    </button>
                </a>
            </div>
        </div>
    </div>

@endsection
