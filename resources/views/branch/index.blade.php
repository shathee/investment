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
                                <th>Branch Name</th>
                                <th>Bank  Name</th>
                                <th>Address</th>
                                <th></th>
                                <th></th>
                            </tr>


                            @forelse ($branchs as $branch)
                                <tr>
                                    <td>{{$branch->id}}</td>
                                    <td>{{$branch->branch_name}}</td>
                                    <td>{{$branch->bank['bank_name']}}</td>
                                    <td>{{$branch->branch_add}}</td>
                                    <td>EDIT</td>
                                    <td>DELETE</td>
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
        </div>
    </div>
@endsection
