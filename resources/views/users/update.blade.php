@extends('users.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Update User</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a class="btn btn-secondary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" placeholder="Firstname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" placeholder="Lastname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <select name="gender" class="form-control">
                        <option value="Male" @if ($user->gender == 'Male') selected @endif>Male</option>
                        <option value="Female" @if ($user->gender == 'Female') selected @endif>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection