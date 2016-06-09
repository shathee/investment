@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$form}}</div>

                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-3">

                            <form method="POST" action="{{ URL::to('banks/1/edit')}}" accept-charset="UTF-8"><input name="_token" type="hidden" value="hAcevSN30buxd6KSEZQ7K2P2bnuzOPG94Pmvknuz">
                                <div class="form-group"  >
                                    <label for="bank_name" class="control-label required">Bank name</label>
                                    <input class="form-control input-sm" required="required" minlength="5" name="bank_name" type="text" id="bank_name" value="{{$user->bank_name}}">
                                </div>
                                <div class="form-group"  >
                                    <label for="bank_type" class="control-label required">Bank type</label>
                                    <select class="form-control" required="required" id="bank_type" name="bank_type">
                                        <option value="" selected="selected">=== Select Bank Type ===</option>
                                        <option value="1">Government</option>
                                    </select>
                                </div>
                                <button class="btn btn-info" type="submit">Save</button>
                                <button class="btn btn-warning" type="reset">Clear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection