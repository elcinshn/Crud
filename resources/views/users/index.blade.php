@extends('layout/template')

@section('content')
 <h1>Users</h1>
 <a href="{{url('/users/create')}}" class="btn btn-success">Create User</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>ID</th>
         <th>Username</th>
         <th>Password</th>
         <th>Mail</th>
         <th>Active</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->ID }}</td>
             <td>{{ $user->username }}</td>
             <td>{{ $user->password }}</td>
             <td>{{ $user->mail}}</td>
             <td>{{ $user->active }}</td>
             <td><a href="{{url('users',$user->ID)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('users.edit',$user->ID)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->ID]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
