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
						Products table:

						<table data-toggle="table"  data-cache="false" data-height="299">
    						<thead>
        						<tr>
            						<th data-field="id">Product Name</th>
            						<th data-field="name">Date of purchase</th>
            						<th data-field="price">Expiry Date Product</th>
        						</tr>
    						</thead>
    							<tr>
            						<td data-field="id">product1</td>
            						<td data-field="name">01/05/2015</td>
            						<td data-field="price">01/05/2016</td>
        						</tr>
						</table>
					</div>
					<br>
					<ul>
						<li><a href="{{ route('users.edit', $user->id) }}">Edit this User</a></li>
						<li><a href="{{ route('users.destroy', $user->id) }}">Delete this User</a></li>
						<li><a href="{{ url('/users') }}">Back to Overview of Users</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection