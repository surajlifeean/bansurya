{{dump($orders)}}

@extends('main')

@section('stylesheets')

<style>

		
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


/*buttom*/
.returnBtn, .exchangeBtn {
    width: 92px;
    padding: 7px 0;
    border: #dcdcdc 1px solid;
    display: block;
    text-align: center;
    margin: 0 0 5px;
    float: right;
    font-size: 10px;
    text-transform: uppercase;
    background: #f2f2f2;
    letter-spacing: 1px;
    font-family: 'montserratregular';
    color: #5d5d5d!important;
}


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

      				<div class="row">
      					@if(count($orders)==0)

      	                 <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
      							 <img class="img-responsive" src="images/noorders.png" alt=""/>
      							<h3> No Orders Placed Yet!</h3>
      						</div>
      					</div>

      					@endif

      					@foreach($orders as $order)

      	                 <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
                                <div class="col-md-12 panelTop">  
                                  <div class="col-md-4">  
                 						 <img class="img-responsive" src="images/default.png" alt=""/>
                                  </div>
                                  <div class="col-md-6">  
                                <h3>{{$order->product_name}}</h3>
                                <p>Description</p>

                                <p>


                        			<h5 class="colors">Color: <div class="color">{{$order->subproduct->color}}</div></h5>


                                    <h5 class="colors">Size: <div class="color" style="margin-top: 10px;">{{$order->subproduct->size}}</div></h5>

                                </p>
                            


                                   </div>

                                   <div class="col-md-2">  

                        			<h4 class="colors">INR {{$order->product_price}} <div class="color"></div></h4>
                                   		<a href="" class="btn returnBtn">Return</a>
             							<a href="" class="btn exchangeBtn">Exchange</a>
             						</div>
           
                                 </div>

                             </div>
                         
						</div>
                       @endforeach
             	  </div>      


             </div>
           
      
	</div>  <!-- row ends -->
</div> <!-- container ends -->

@endsection