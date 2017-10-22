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
.img-responsive{
    width: 60%;
    height: auto;
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

      					@foreach($orders as $key=>$order)
                           <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
                                <div class="col-md-12 panelTop">  
                                  <div class="col-md-4">
                                  @php
                                    $image=App\Http\Controllers\myhelper::getimagefromid($order->subproduct_id);
                                  @endphp  
                 						 <img class="img-responsive" src="{{asset('http://127.0.0.1:8080/images/'.$image)}}" alt=""/>
                                  </div>
                                  <div class="col-md-6"> 
                                  <p>{{$order->product_name}}</p> 
                                  <div class="row">
                                  <div class="col-md-1 col-md-offset-4">
                                    color:
                                  </div>
                                  <div class="col-md-1">
                                    <div style="width:10px; height:10px; background-color:{{App\Http\Controllers\myhelper::getcolorfromid($order->subproduct->color)}};"></div>
                                  </div>
                                  <div class="col-md-2"> 
                                     Quantity:{{$order->quantity}}
                                  </div>
                                </div>
                                  
                                </div>

                                   <div class="col-md-2">  
                                  <p><strike>Rs&nbsp{{$order->unit_price}}</strike></p>
                                  <p>Rs&nbsp{{$order->unit_sp}}</p>
                                  		<a href="" class="btn returnBtn">Return</a>
                                      
             							<a href="" class="btn exchangeBtn">Exchange</a>
                          <p>Order Date:{{date('d-m-y', strtotime($order->created_at))}}</p>
                                  
             						</div>
           
                                 </div>

                             </div>

                         
						</div>
          <div style="text-align:right; margin-bottom:10px;">
            @if(isset($orders[$key+1]))
            @if($orders[$key]->order_id!=$orders[$key+1]->order_id)
             Order Id:BNY{{strtotime($order->created_at).$order->order_id}}<br>
            @endif
            @else
               Order Id:BNY{{strtotime($order->created_at).$order->order_id}}<br>    
            @endif
          </div>
                       @endforeach
             	  </div>      


             </div>
           
      
	</div>  <!-- row ends -->
</div> <!-- container ends -->

@endsection

@section('script')
  

@endsection