@extends('layout.template')
@section('content')
    <h1>Update User</h1>
    {!! Form::model($user,['method' => 'PATCH','route'=>['users.update',$user->ID]]) !!}
    <div class="form-group">
        {!! Form::label('Username', 'Username:') !!}
        {!! Form::text('username',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Password', 'Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Mail', 'Mail:') !!}
        {!! Form::text('mail',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Active', 'Active:') !!}
        {!! Form::text('active',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
