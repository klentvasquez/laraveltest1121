@extends('master.app')

@section('content')
	<table class="table table-condensed">
		<thead>
			<tr>
				<td>ID</td>
				<td>Message</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($messages as $message)
	        	<tr>
	        		<td>{{ $message->id }}</td>
	        		<td>{{ $message->message }}</td>
	        	</tr>
	    	@endforeach
		</tbody>
	    
	</table>
@endsection