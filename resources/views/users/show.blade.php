@extends('users.layout')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>User Details</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a class="btn btn-secondary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
   
    <div class="row mt-4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>
                    <strong>Firstname:</strong>
                    {{ $user->firstname }}
                </h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>
                    <strong>Lastame:</strong>
                    {{ $user->lastname }}
                </h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>
                    <strong>Gender:</strong>
                    {{ $user->gender }}
                </h5>
            </div>
        </div>
    </div>
@endsection