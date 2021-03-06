

@extends('main')

@section('stylesheets')

 <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">

	<style>

/*filter*/
      .behclick-panel  .list-group {
        margin-bottom: 0px;
    }
    .behclick-panel .list-group-item:first-child {
      border-top-left-radius:0px;
      border-top-right-radius:0px;
    }
    .behclick-panel .list-group-item {
      border-right:0px;
      border-left:0px;
    }
    .behclick-panel .list-group-item:last-child{
      border-bottom-right-radius:0px;
      border-bottom-left-radius:0px;
    }
    .behclick-panel .list-group-item {
      padding: 5px;
    }
    .behclick-panel .panel-heading {
      /*        padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
      border-top-right-radius: 0px;
      border-top-left-radius: 0px;
      border-bottom: 1px solid darkslategrey;
    }
    .behclick-panel .panel-heading:last-child{
      /* border-bottom: 0px; */
    }
    .behclick-panel {
      border-radius: 0px;
      border-right: 0px;
      border-left: 0px;
      border-bottom: 0px;
      box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
    }
    .behclick-panel .radio, .checkbox {
      margin: 0px;
      padding-left: 10px;
    }
    .behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
      outline: none;
    }
    .behclick-panel .panel-body > .panel-heading{
      padding:10px 10px;
    }
    .behclick-panel .panel-body {
      padding: 0px;
    }
     /* unvisited link */
    .behclick-panel a:link {
        text-decoration:none;
    }

    /* visited link */
    .behclick-panel a:visited {
        text-decoration:none;
    }

    /* mouse over link */
    .behclick-panel a:hover {
        text-decoration:none;
    }

    /* selected link */
    .behclick-panel a:active {
        text-decoration:none;
    }

/*filter css ends*/


/*
.row {
    margin: 80px 0px 80px 0px;
    }
*/

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




.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }



 </style>





@endsection


@section('content')
		
<!--filter starts-->
<div class="container">
  <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12">

        
  <h3 class="staticheading">@if(count($subproducts)){{$subproducts[0]->title}}@endif</h3>

    </div>

    <div class="col-md-3  col-sm-3 col-xs-12">    
<label for="sel1">SORT BY:</label>
<!-- 
<form action="{{route('category.store')}}" method="post" class="form-sort">
  {{ csrf_field() }} -->
      <select class="form-control" name="sort-option" id="sel1">
        <option>Select</option>
        <option value="htol">Price: High to Low</option>
        <option value="ltoh">Price: Low to High</option>
        <option value="new">What's New</option>
      
      </select>
    <!-- </form> -->
      </div>
    </div>
</div>
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div id="accordion" class="panel panel-primary behclick-panel">
                <div class="panel-heading" style="
    margin-top: 10px;">
                  <h3 class="panel-title">Filter By</h3>
                </div>
                <div class="panel-body" >
                  <div class="panel-heading " >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse0">
                        <i class="indicator fa fa-caret-right" aria-hidden="true"></i> Price
                      </a>
                    </h4>
                  </div>
                  <div id="collapse0" class="panel-collapse collapse" >
                     <p>
         <label for = "price">Price range:</label><br>

         <div class="row">
         	<div class="col-md-6 col-sm-6 col-xs-6">
        Min:<input type = "text" id = "start_price" name="start_price" class="form-control"><br>
         <!-- 
            style = "border:0; color:#337ab7; font-weight:bold;">

 --> 
 			</div>
 			<div class="col-md-6 col-sm-6 col-xs-6">

        Max:<input type= "text" id="end_price" name="end_price" class="form-control">
 			</div>

 		</div>
      </p>
      <div id = "slider-3"></div>
 

                  </div>

                  <div id="showPrice"></div>
                  <div id="showDiv"></div>


                   <div class="panel-heading" >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Color</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="row">
                      
                    @foreach($colors as $color)

                      <div class="col-md-6 col-xs-6" style="margin-top: 10px;">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="{{$color->id}}">
								              <div class="color" style="background-color:{{$color->color_code}};">   
								              </div>
                          </label>
                        </div>
                      </div>
                      
					@endforeach

                       </div>
                  </div>
                  <div class="panel-heading" >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Size</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                   
                    @foreach($sizes as $size)
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="{{$size->id}}">
                            {{$size->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>

	<div class="col-md-9 col-sm-9 col-xs-12">


<div class="row">
  
@if(count($subproducts)!=0)
@foreach($subproducts as $subproduct)

<div class="col-md-4 col-sm-4 col-xs-6 ">
    
    @foreach($images as $img)
    	@if($img->p_id==$subproduct->id)
    <a href="{{route('product.show',$subproduct->id)}}" class="thumbnail">
      <img src="http://127.0.0.1:8080/images/{{$img->name}}" alt="...">
    </a>
    @endif
    @endforeach

<table width="100%">
<tr>
    <td>
    <p><b>{{$subproduct->name}}</b></p>
    </td>
    <td>

@if (Auth::guest())
  
     <a data-toggle="modal" data-target="#myModal">
                                        <button class="like btn btn-default" type="submit"><span class="fa fa-heart"></span></button> </a>  

@else
    {!!Form::open(array('route'=>'wishlist.store'))!!}

  <input type="hidden" value="{{$subproduct->id}}" id="subproduct" name="subproduct">

  <input type="hidden" value="{{Auth::user()->id}}" id="id" name="id">
  
  
              <button class="like btn btn-default" type="submit"><span class="fa fa-heart"></span></button>

  {!!Form::close()!!}

@endif
</td>
</tr>
<tr>
<td>
     <strike> Rs{{$subproduct->price}}</strike>
  
             Rs{{$subproduct->sale_price}}
        ({{floor(($subproduct->price-$subproduct->sale_price)*100/$subproduct->price)}}% OFF)
    
</td>
<td>
  @if(Auth::guest())
     @php
    if(Session::has('guest_id'))
        
        $id=session('guest_id');

      else
        $id=App\Http\Controllers\myhelper::createguest();
      @endphp


  @else
    @php $id=Auth::user()->id @endphp
   @endif

    {!!Form::open(array('route'=>'cart.store'))!!}

  <input type="hidden" value="{{$subproduct->id}}" id="subproduct" name="subproduct_id">

  <input type="hidden" value="{{$id}}" id="id" name="user_id">
  

  <input type="hidden" id="quantity" name="quantity" class="form-control input-number" value="1">
  
  
              <button class="add-to-cart btn btn-default" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>

  {!!Form::close()!!}


<!--   <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
 --></td>

</tr>
</table>


</div>
  
@endforeach  
@endif
  
</div>

            </div>
          </div>
        </div>




@endsection



@section('scripts')
  <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
	

  <script>


/*filter script to change the icons*/
$(function() {

  function toggleChevron(e) {
  
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-caret-down fa-caret-right');
  }
  $('#accordion').on('hidden.bs.collapse', toggleChevron);
  $('#accordion').on('shown.bs.collapse', toggleChevron);


});


/*filter script to change the icons ends*/

  if ( $(window).width() > 770) {      
  
          $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    }
    else{
         ;
           
}

/*filter*/
      



  </script>

 <script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 200,
               max: 10000,
               values: [ 100, 1500 ],  // setting the initial value
               slide: function( event, ui ) {
                  $( "#start_price" ).val(ui.values[ 0 ]);
                  $( "#end_price" ).val(ui.values[ 1 ]);
               }
            });

            $( "#price" ).val( "Rs" + $( "#slider-3" ).slider( "values", 0 ) +
               " - Rs" + $( "#slider-3" ).slider( "values", 1 ) );
         });
      </script>

 <script type="text/javascript">
    $('#sel1').change(function(){
        var x=$(this).val();
        var url=window.location.pathname;
        var arr=url.split("/");
        var element=arr.slice(-1);
      
      $.ajax({
      url:"{{route('category.create')}}",
      data: {sortby:x,id:element},
      type: 'get',
      success:function(response)
      {
          location.reload();
          
      }
    });

//    $('.form-sort').submit();

      
    });
   

 </script>
@endsection