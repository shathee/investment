@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">

                            <table class="table table-striped .table-bordered">
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Designation</th>
                                   <th></th>
                               </tr>
                                @forelse ($users as $users)
                                    <tr>
                                        <td>{{$users->id}}</td>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>{{$users->designation}}</td>
                                        <td>EDIT</td>
                                        <td>DELETE</td>
                                    </tr>
                                @empty
                                    <p>No Users Found</p>
                                @endforelse

                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
