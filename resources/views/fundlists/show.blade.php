@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Banks</div>

                    <div class="panel-body">

                        <table class="table table-striped .table-bordered">
                            @forelse ($bank->branchs as $branchs)
                            <tr>
                                <td><a href="{!!URL('branch')!!}/{{$branchs->id}}" >{{$branchs->branch_name}}</a></a></td>
                            </tr>
                            @empty
                                <p>No branches Found</p>
                            @endforelse

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
