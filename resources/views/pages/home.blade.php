
@extends('main')


@section('title','|Homepage')
@section('stylesheets')

  <style>

/* image thubnails */

.row {
    margin: 80px 0px 80px 0px;
    }


.thumbnail {
    margin: 10px 10px 10px 10px;
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    transform: scale(1, 1);
    transition-duration: 0.3s;
    -webkit-transition-duration: 0.3s; /* Safari */
    }

.thumbnail:hover {
  cursor: pointer;
  -webkit-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    transition-duration: 0.5s;
    -webkit-transition-duration: 0.3s; /* Safari */
    box-shadow: 10px 10px 5px #888888;
    z-index: 1;
    }


/*on hover menu*/
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
/*font style*/

/*wish list icon */

.wrapper {
   position: relative;
}

.wrapper .glyphicon {
   position: absolute;
   top: 20px;
   left: 100px;
}

.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h5 { 
   position: absolute; 
   top: 0px; 
   left: 5px; 
   
   color: white; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(83, 131, 211, 0.7);
   padding: 5px; 
}

/*
  .navbar-default {
    background-color:  #d8fefa;
    border-color: #030033;
}
*/
  </style>



@endsection

@section('content')
<!--image slider -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

<!--       <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
 -->
      @foreach($banners as $key=>$banner)

       <li data-target="#myCarousel" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
     
      @endforeach
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      
      @foreach($banners as $key=>$banner)
      <div class="item @if($key==0) active @endif">
        <img src="{{asset('http://127.0.0.1:8080/images/'.$banner->name)}}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>{{$banner->title}}</h3>
          <p>{{$banner->message}}</p>
        </div>
      </div>
      @endforeach

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
  <!--image slider ends-->
<div class="container">


  <h1 class="staticheading" style="text-align:center;">Our Products</h1>

<div class="row">

@foreach($subproduct as $sproduct)

  <div class="col-md-3 col-sm-4 col-xs-6 ">
    <a href="{{route('product.show',$sproduct->id)}}" class="thumbnail">
    @php
      $img=$sproduct->images[0]->name
    @endphp
    @if($sproduct->quantity==0)
      <h5>Out of Stock</h5>
    @endif
      <img src="{{asset('http://127.0.0.1:8080/images/'.$img)}}" class="image" alt="bansuriya" 
@if($sproduct->quantity==0)
   style="opacity: 0.3;"
  
 
@endif>
   </a>

<table width="100%">
<tr>
    <td>
    <p><b>{{$sproduct->product->name}}</b></p>
    </td>
    <td>
          
@if (Auth::guest())
  
     <a data-toggle="modal" data-target="#myModal">
                                        <button class="like btn btn-default" type="submit"><span class="fa fa-heart"></span></button> </a>  

@else
    {!!Form::open(array('route'=>'wishlist.store'))!!}

  <input type="hidden" value="{{$sproduct->id}}" id="subproduct" name="subproduct">

  <input type="hidden" value="{{Auth::user()->id}}" id="id" name="id">
  
  
              <button class="like btn btn-default" type="submit"><span class="fa fa-heart"></span></button>

  {!!Form::close()!!}

@endif
</td>
</tr>
<tr>
<td>
     <strike> Rs{{$sproduct->price}}</strike>
             Rs{{$sproduct->sale_price}}
        ({{floor(($sproduct->price-$sproduct->sale_price)*100/$sproduct->price)}}% OFF)
    
</td>
<td>


  @if (Auth::guest())
      
      @php
      if(Session::has('guest_id'))
        
        $id=session('guest_id');

      else
        $id=App\Http\Controllers\myhelper::createguest();
      @endphp

    
{!!Form::open(array('route'=>'cart.store'))!!}

  <input type="hidden" value="{{$sproduct->id}}" id="subproduct" name="subproduct_id">

  <input type="hidden" value="{{$id}}" id="id" name="user_id">

  
  <input type="hidden" id="quantity" name="quantity" class="form-control input-number" value="1">
  
  
  
              <button class="add-to-cart btn btn-default" type="submit" @if($sproduct->quantity==0)disabled="true" @endif"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>

  {!!Form::close()!!}

@else
    {!!Form::open(array('route'=>'cart.store'))!!}

  <input type="hidden" value="{{$sproduct->id}}" id="subproduct" name="subproduct_id">

  <input type="hidden" value="{{Auth::user()->id}}" id="id" name="user_id">

  
  <input type="hidden" id="quantity" name="quantity" class="form-control input-number" value="1">
  
  
  
              <button class="add-to-cart btn btn-default" type="submit" @if($sproduct->quantity==0)disabled="true" @endif><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>

  {!!Form::close()!!}

@endif

</td>

</tr>
</table>
    </div>
@endforeach
</div>
</div>

  @endsection