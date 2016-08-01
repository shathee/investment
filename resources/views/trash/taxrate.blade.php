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
                                <th>Tax Type Name</th>
                                <th>Implementation Date</th>
                                <th>Amount(From)</th>
                                <th>Amount(To)</th>
                                <th>Tax Rate(taka)</th>
                                <th>Tax Rate(%)</th>
                                <th colspan="2">

                                </th>
                            </tr>
                            @forelse ($taxrates as $taxrate)
                                <tr>
                                    <td>{{$taxrate->id}}</td>
                                    <td><a href="#{{$taxrate->id}}">{{$taxrate->taxtype['tax_type_name']}}</a></td>
                                    <td>{{$taxrate->implement_date}}</td>
                                    <td>{{$taxrate->from_amount}}</td>
                                    <td>{{$taxrate->to_amount}}</td>
                                    <td>{{$taxrate->tax_rate_taka}}</td>
                                    <td>{{$taxrate->tax_rate_percent}}</td>
                                    <td>


                                    </td>
                                    <td>
                                        <a class="confirm_delete" data-title="Confirm Action" href="{{ url('taxrates/'.$taxrate->id.'/delete') }}">
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
                            <tr>
                                <td colspan="6">{!! $taxrates->links() !!}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{URL('taxrates/create')}}">
                    <button type="button" class="btn btn-primary">
                        Tax Rate Entry
                    </button>
                </a>
            </div>

        </div>

    </div>



@endsection
