
<div class="cardheader">

</div>

<div class="avatar" align="center">

	@if(count($imagedet)==0)

         <img class="dpimage" src="{{asset('images/default.png')}}" width="139" height="139"  >
    @else
         <img class="dpimage" src="{{asset('images/'.$imagedet->image)}}" width="139" height="139"  >
      
     @endif
</div>


<div class="info" align="center">
      <div class="title" style="text-transform: capitalize;">  {{ Auth::user()->name }}</div>
      
          {!!Form::open(array('route'=>'profileimg.store','files' => true))!!}

 <div class="btn btn-file">       
  <span class="glyphicon glyphicon-camera" aria-hidden="true">
 <input type="file" name="pp" id="pp">
  </span> 
</div>

<button type="submit" class="btn btn-default">
  <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Upload
</button>

     	{!!Form::close()!!}
