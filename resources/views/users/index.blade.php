@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Customer List</div>
				<div class="panel-body">

					This shows all the users:
					<ul>
						@foreach ($list as $user)
							<li><a href="users/{{ $user->id }}"> {{ $user->name }}</a></li>
							{{ $user->email }}
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection