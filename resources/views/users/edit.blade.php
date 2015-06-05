@extends('app')


@section('content')
<h1 style="text-align:center">Customer Edit Page</h1><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Customer: {{$user->name}}</div>
        <div class="panel-body">
          @include('errors.errorlist')

          {!! Form::model($user, array('method'=>'PATCH', 'action' => ['UserController@update', $user->id])) !!}
            @include('users.form', ['textButton' => 'Edit this User', 'edit' =>'edit'])
          {!! Form::close() !!} 

        </div>
      </div>
    </div>
  </div>
</div>

@endsection