
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
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/banner1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Banarasi  Saree</h3>
          <p>It is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/banner1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Fantastic Kurties</h3>
          <p>Catchy and glazzy!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/banner1.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Best Lehngas </h3>
          <p>Special Collection Available!</p>
        </div>
      </div>
  
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

<div class="row">

@foreach($subproduct as $sproduct)
  <div class="col-md-3 col-sm-4 col-xs-6 ">
    <a href="{{route('product.show',$sproduct->id)}}" class="thumbnail">
    @php
      $img=$sproduct->images[0]->name
    @endphp
        
                
      <img src="{{asset('http://127.0.0.1:8080/images/'.$img)}}"  alt="bansuriya">
    </a>

<table width="100%">
<tr>
    <td>
    <p>{{$sproduct->product->name}}</p>
    </td>
    <td>
    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
    </td>
</tr>
<tr>
<td>
     <strike> Rs{{$sproduct->price}}</strike>
    @if($sproduct->discount_type=="Percentage")
        Rs{{$sproduct->price-($sproduct->price*$sproduct->discount)/100}}
        ({{$sproduct->discount}}% OFF)
    @else
         Rs{{$sproduct->price-$sproduct->discount}}({{floor($sproduct->discount*100/$sproduct->price)}}% OFF) 
    @endif

</td>
<td>
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</td>

</tr>
</table>
    </div>
@endforeach
</div>
</div>

  @endsection