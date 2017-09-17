@if(Session::has('success'))
	
	<div class="alert alert-success" role="alert" style="width:400px; margin-left:10%">

		<strong>Success:</strong>{{Session::get('success')}}
	</div>
	
@endif