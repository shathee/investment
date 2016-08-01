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
                                <th>Fund Name</th>
                                <th>Fund Description</th>
                                <th>Fund Account No</th>
                                <th>fund_start_balance</th>
                                <th>fund_start_date</th>
                                <th colspan="2">

                                </th>
                            </tr>
                            @forelse ($fundlists as $fundlist)
                                <tr>
                                    <td>{{$fundlist->id}}</td>
                                    <td>{{$fundlist->branch_id}}</td>
                                    <td>
                                        <a href="#{{$fundlist->id}}" data-toggle="modal" data-target="#FundModal{{$fundlist->id}}">{{$fundlist->fund_name}}</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="FundModal{{$fundlist->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="FundModal{{$fundlist->id}}Label">{{$fundlist->fund_name}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="list-unstyled">
                                                            <li>{{$fundlist->branch->bank['bank_name']}}</li>
                                                            <li>{{$fundlist->branch['branch_name']}}</li>
                                                            <li><strong>Account No.:</strong>{{$fundlist->fund_acc_no}}</li>
                                                            <li><strong>Starting Balance:</strong>{{$fundlist->fund_start_balance}}</li>
                                                            <li><strong>Start Date:</strong>{{$fundlist->fund_start_date}}</li>
                                                        </ul>
                                                   </div>
                                                    <div class="modal-footer">
                                                        <p class="text-info">
                                                            {{$fundlist->fund_desc}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$fundlist->fund_desc}}</td>
                                    <td>{{$fundlist->fund_acc_no}}</td>
                                    <td>{{$fundlist->fund_start_balance}}</td>
                                    <td>{{$fundlist->fund_start_date}}</td>
                                    <td>
                                        <a href="{{ url('fundlist/'.$fundlist->id.'/edit') }}">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                EDIT
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                        <a class="confirm_delete" data-title="Confirm Action" href="{{ url('fundlist/'.$fundlist->id.'/delete') }}">
                                            <button type="button" class="btn btn-danger btn-md"
                                                    data-toggle="" data-target="">
                                                     <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                </tr>
                            @empty
                                <p>No Fund  DATA Found</p>
                            @endforelse
                            <tr>
                                <td colspan="6">{!! $fundlists->links() !!}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{URL('taxrates/create')}}">
                    <button type="button" class="btn btn-primary">
                        Fund List Entry
                    </button>
                </a>
            </div>

        </div>

    </div>




@endsection
