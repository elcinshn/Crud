@extends('layout/template')
@section('content')
    <h1>User Details</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ID" placeholder={{$users->ID}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder={{$users->username}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="pass" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" id="password" placeholder={{$users->password}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="mail" class="col-sm-2 control-label">Mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mail" placeholder={{$users->mail}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="active" class="col-sm-2 control-label">Active</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="active" placeholder={{$users->active}} readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('users')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop
