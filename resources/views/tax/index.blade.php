@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Taxes</div>

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
                                <th>Tax Type Name</th>
                                <th>Deduction</th>
                                <th>Yearly</th>
                                <th colspan="2">

                                </th>
                            </tr>
                            @forelse ($tax as $tax)
                                <tr>
                                    <td>{{$tax->id}}</td>
                                    <td><a href="#{{$tax->id}}">{{$tax->tax_type_name}}</a></td>
                                    <td>{{$tax->deduct_on}}</td>
                                    <td>{{$tax->yearly_calculate}}</td>
                                    <td>
                                        <a href="tax/{{$tax->id}}/edit">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                EDIT
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="confirm_delete" data-title="Confirm Action" href="{{ url('tax/'.$tax->id.'/delete') }}">
                                            <button type="button" class="btn btn-danger btn-md"
                                                    data-toggle="" data-target="">
                                                     <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                </tr>
                            @empty
                                <p>No Tax DATA Found</p>
                            @endforelse

                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{URL('tax/create')}}">
                    <button type="button" class="btn btn-primary">
                        Tax Entry
                    </button>
                </a>
            </div>

        </div>

    </div>



@endsection
