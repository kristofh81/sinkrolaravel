@extends('app')


@section('content')
<h1 style="text-align:center">Customer Creation Page</h1><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Customer</div>
        <div class="panel-body">
          @include('errors.errorlist')

          {!! Form::open(array('route' => 'users.store', 'class' => 'form')) !!}
            @include('users.form', ['textButton' => 'Create new User!', 'edit' =>''])   
          {!! Form::close() !!}            

        </div>
      </div>
    </div>
  </div>
</div>

@endsection