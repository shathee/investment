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
                                <th>Branch Name:</th>
                                <td>{{$branch->branch_name}}</td>
                            </tr>
                            <tr>
                                <th>Bank Name:</th>
                                <td>{{$branch->bank->bank_name}}</td>
                            </tr>
                            <tr>
                                <th>address:</th>
                                <td>
                                    <p>{{$branch->branch_add}}</p>
                                    <p>{{$branch->branch_dist}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Contact Person</th>
                                <td>
                                    <p>{{$branch->branch_cont_person}}</p>
                                    <p>{{$branch->cont_person_desig}}</p>

                                </td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td>{{$branch->branch_phone}}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
