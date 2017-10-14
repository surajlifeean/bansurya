@extends('main')

@section('stylesheets')

	<style type="text/css">


/*
  .navbar-default {
    background-color:  #d8fefa;
    border-color: #030033;
}
*/
.img-circle {

    border-radius: 360px;
    max-width: 80%;      
    
}

.cardheader{
  background-color: #FFB400;
  background-size: cover;
  height:90px;
}
.avatar{
  position: relative;
  top:-50px;
  margin-bottom: -50px;
}

.avatar img{
  vertical-align:center;
  border-radius: 50%;
  border:9px solid #fff;
}

.info{
  padding: 4px 8px 10px;
}

.title{
  margin-bottom: 4px;
  font-size: 20px;
  color: #262626;
 
  vertical-align: middle;
}

.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

.tab-pane{
  position: relative;
}

.tab-content>.active{
  display: block;
}

span.personalInfoValue {
    color: #292929;
    font-size: 18px;
    font-family: 'montserratRegular';
    width: 100%;
    display: block;
    padding: 2px 0;
    }

    .personalInfoWrapper label {
    font-weight: 400;
    font-family: 'montserratRegular';
    font-size: 15px;
    text-transform: uppercase;
    color: #9a9a9a;
    margin: 0;
    padding: 0;
    width: 100%;
}



.personalInfoWrapper .personalInfoIcon:before {
    display: inline-block;
    font: normal normal normal 22px/1 FontAwesome;
    position: absolute;
    left: 0;
    top: 0;
    width: 42px;
    height: 42px;
    background: #f2f2f2;
    border-radius: 100%;
    text-align: center;
    line-height: 42px;
    color: #292929;
}

.editBtn{
      position: absolute;
    top: -80px;
    right: -16px;
    background: #f2f2f2;
    width: 75px;
    height: 30px;
    color: #292929;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 30px;
    padding: 0 0 0 10px;
    cursor: pointer;
    font-family: 'montserratRegular';
}
}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }


  </style>


@endsection


@section('content')

@include('partials._imagespace')

<div class="container" >
  <div class="row">

      <div class="col-sm-3 col-md-3">
                        
          @include('partials._dashnav')

      </div>



        <div class="col-sm-9 col-md-9"> <!-- col-md-9 -->

            <div class="well">
                  
                <div class="tab-content">
        	            
                     <div class="row">



<!-- 
loop to display the wishlist products will be displayed here -->
                     <label style="margin-bottom: 10px;">
                                          <U>WISHLIST</U></label>


                              <div class="tab-pane personalInfoWrapper active">
                                  <div class="personalInfoView">




                                        @if(count($subproduct))
                                        @foreach($subproduct as $sproduct)
                                              	<div class="card col-sm-12 col-md-4">
                                                    @php
                                              $img=$sproduct->images[0]->name
                                            @endphp
                                                                  
                                  
                    <!--     <img src="{{asset('http://127.0.0.1:8080/images/'.$img)}}"  alt="bansuriya">
                     -->
                           <img class="card-img-top" src="{{asset('http://127.0.0.1:8080/images/'.$img)}}" alt="Card image cap" width="60%" height="30%">
                            <div class="card-block">
                              <h4 class="card-title">{{$sproduct->product->name}}</h4>
                              <p class="card-text">
                              	<strike> Rs{{$sproduct->price}}</strike>
                      @if($sproduct->discount_type=="Percentage")
                          Rs{{$sproduct->price-($sproduct->price*$sproduct->discount)/100}}
                          ({{$sproduct->discount}}% OFF)
                      @else
                           Rs{{$sproduct->price-$sproduct->discount}}({{floor($sproduct->discount*100/$sproduct->price)}}% OFF) 
                      @endif  </p>

                        {!!Form::open(array('route'=>'cart.store'))!!}

                        <input type="hidden" value="{{$sproduct->id}}" id="subproduct" name="subproduct_id">

                        <input type="hidden" value="{{Auth::user()->id}}" id="id" name="user_id">


                        <input type="hidden" value="1" id="qty" name="quantity">
            
            
                        <button class="add-to-cart btn btn-primary" type="submit">Add to cart</button>

                              {!!Form::close()!!}
       
                    {!! Form::open(['route'=>['wishlist.destroy',$sproduct->id],'method'=>'DELETE'])!!}


                           {!!Form::submit('Remove',array('class'=> 'btn-default btn'))!!}

                    {!!Form::close()!!}
             </div>
        </div>
@endforeach

@else 

No Products in Wishlist

@endif



			                                   </div>
	                             	</div>


                         </div>


                </div>




        </div>
    </div>


</div>  <!-- row ends -->

</div> <!-- container ends -->

@endsection