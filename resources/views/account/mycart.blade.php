{{dump($subproducts)}}

@extends('main')



@section('stylesheets')

<style>
.staticcontent{
    font-size: 16px;
    line-height: 28px;
    text-align: center;
    color: #818181;
    width: 800px;
    max-width: 94%;
    margin: 0 auto;

}

.rightPanelCartWrapper {
    border: 1px solid #dcdcdc;
    padding: 15px;
}

body {
    font-family: 'montserratLight';
    font-size: 12px;
    color: #5d5d5d;
    line-height: normal;
    background-color: #fff;
}

/*----------------------
Product Card Styles 
----------------------*/
.panel.panel--styled {
    background: #F4F2F3;
}
.panelTop {
    padding: 30px;
}

.panelBottom {
    border-top: 1px solid #e7e7e7;
    padding-top: 20px;
}
.btn-add-to-cart {
    background: #337ab7;
    color: #fff;
}
.btn.btn-add-to-cart.focus, .btn.btn-add-to-cart:focus, .btn.btn-add-to-cart:hover  {
    color: #fff;   
    background: #FD7172;
    outline: none;
}
.btn-add-to-cart:active {
    background: #F9494B;
    outline: none;
}


span.itemPrice {
    font-size: 24px;
    color: #FA5B58;
}


/*----------------------
##star Rating Styles 
----------------------*/
.stars {
    padding-top: 10px;
    width: 100%;
    display: inline-block;
}
span.glyphicon {
    padding: 5px;
}
.glyphicon-star-empty {
    color: #9d9d9d;
}
.glyphicon-star-empty, .glyphicon-star { 
    font-size: 18px;
}
.glyphicon-star {
    color: #FD4;
    transition: all .25s;
}   
.glyphicon-star:hover { 
    transform: rotate(-15deg) scale(1.3); 
}




/*color box
*/


.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: SENTANCECASE;
  font-weight: bold; }

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
    <h1 class="staticheading" style="text-align:center;">Shopping Bag</h1>
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="container">    
                                @php

                                        $totalprice=0;
                                        $totaldiscount=0;
        
                                @endphp

                    @foreach($subproducts as $subproduct)
        <div class="row">
            

                        <div class="col-md-8">             
                         <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
                                <div class="col-md-12 panelTop">  
                                  <div class="col-md-4">  

                                        @php
                                          $img=$subproduct->images[0]->name
                                        @endphp
                                            

                                    <img class="img-responsive" src="{{asset('http://127.0.0.1:8080/images/'.$img)}}" alt=""/>
                                  </div>
                                <div class="col-md-8">  
                                <h3>{{$subproduct->product->name}}</h3>
                                <p>{{$subproduct->product->description}}</p>

                                <p>


                        <h5 class="colors">Color: <div class="color" style="background-color:{{$subproduct->getcolor->color_code}};">
                        </div>
                            </h5>


                        <h5 class="colors">Size: <div class="color" style="
    margin-top: 10px;
">{{$subproduct->getsize->name}}
                        </div>
                            </h5>

                                </p>
                            


                            </div>

                        </div>
                        
                        <div class="col-md-12 panelBottom">
                            <div class="col-md-4 text-center">
                                <button class="btn btn-primary btn-add-to-cart"><span class="glyphicon glyphicon-heart"></span>Add to Wishlist</button>                       
                            </div>
                            <div class="col-md-4 text-left">
                                <h5>Price 

                                       <strike> Rs{{$subproduct->price}}
                                        </strike>

                                         @php
                                             $totalprice=$subproduct->price+$totalprice;
                                         @endphp

    @if($subproduct->discount_type=="Percentage")
        Rs{{$subproduct->price-($subproduct->price*$subproduct->discount)/100}}
        ({{$subproduct->discount}}% OFF)
        
        @php 
        $totaldiscount=$totaldiscount+($subproduct->price*$subproduct->discount)/100;
        @endphp
    @else
         Rs{{$subproduct->price-$subproduct->discount}}({{floor($subproduct->discount*100/$subproduct->price)}}% OFF) 


        @php 
        $totaldiscount=$totaldiscount+$subproduct->discount;
        @endphp
    @endif


                                </h5>
                            </div>
   {!!Form::close()!!}
       
                    {!! Form::open(['route'=>['cart.destroy',$subproduct->id],'method'=>'DELETE'])!!}


                           {!!Form::submit('Remove',array('class'=> 'btn-default btn pull-right'))!!}

                    {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
            </div>
            <div class="col-md-3">
                @include('partials._billdetails')
            </div>

        </div>


</div>
@endsection
