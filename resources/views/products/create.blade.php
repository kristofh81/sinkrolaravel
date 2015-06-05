@extends('app')

@section('content')
<h1 style="text-align:center">Products Creation Page</h1><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Products</div>
        <div class="panel-body">
          @include('errors.errorlist')

            {!! Form::open(array('route' => 'products.store', 'class' => 'form')) !!}
            
            <div class="form-group">
                {!! Form::label('Product Name') !!}
                {!! Form::select('product_type', array('domain' => 'domain', 'e-mail' => 'e-mail'), 'product', array('class' => 'form-control'));
              !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Select Date') !!}
                {!! Form::text('date', null, 
                    array(
                          'class'=>'form-control', 
                          'id'=>'datepicker')) !!}
            </div>
            

            {!! Form::hidden('userid', 1); !!}
                     
            <div class="form-group">
                {!! Form::submit('Submit Product!', 
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="{{ asset('/js/scripts.js') }}"></script>
@endsection

