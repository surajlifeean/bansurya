@if(Session::has('success'))
	
	<div class="alert alert-success" role="alert" style="width:90%; margin-left:5%">

		<strong>Success:</strong>{{Session::get('success')}}
	</div>
	
@endif