@extends('users.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Table CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Create New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered data-table mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->gender }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i> View</a>
                            <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-pencil"></i> Update</a>
                            <div class="dropdown-divider"></div>
                            <button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                      </div>
   
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  
    {!! $users ?? '' ?? ''->links() !!}
      
@endsection