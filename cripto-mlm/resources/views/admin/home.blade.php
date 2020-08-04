@extends('layouts.app')

@section('content')

	<div class="card-body">

		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Email</th>
				<th>phone</th>
			</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->email}}</td>
					<td>{{$user->phone}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection
