@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">More info on <strong>{{ $user->name }}</strong> :</div>
				<div class="panel-body">
					
					<div>
						Personal info:
						<ul>
						
							<li>{{ $user->name }}</li>
							<li>{{ $user->email }}</li>
						
						</ul>


						<br>
						
						Overview products: <a href="{{ url('/products') }}">
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection