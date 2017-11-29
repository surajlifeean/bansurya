
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
/*
body {
    font-family: 'montserratLight';
    font-size: 12px;
    color: #5d5d5d;
    line-height: normal;
    background-color: #fff;
}
*/
/*----------------------
Product Card Styles 
----------------------*/
.panel.panel--styled {
    background: #F5F5F5;
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



    .returnBtn, .exchangeBtn {
    width: 105px;
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
    <h1 class="staticheading" style="text-align:center;">Shopping Bag</h1>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                                 @php

                                        $totalprice=0;
                                        $totalsp=0;
        
                                @endphp


                                @if(count($subproducts)==0)
                                <div class="col-md-8 col-md-offset-4">
                                 <img class="img-responsive" src="{{asset('/images/emptycart.png')}}" alt="Your Cart Is Empty"/>
                                 </div>
                                 
                                @endif


                                @foreach($subproducts as $subproduct)

                                        @php
                                          $img=$subproduct->images[0]->name
                                        @endphp
                                            


                         <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
                                <div class="col-md-12 panelTop">  
                                  <div class="col-md-4">  
                                         <img class="img-responsive" src="{{asset('http://127.0.0.1:8080/images/'.$img)}}" alt=""/>
                                  </div>
                                  <div class="col-md-6">  
                                <h3>{{$subproduct->product->name}}</h3>
                                <p>{!!$subproduct->product->description!!}</p>

                                <p>


                                <div class="col-md-6">
                                <h5 class="colors">Color: <div class="color" style="background-color:{{$subproduct->getcolor->color_code}};"></div></h5>
                            </div>


                                <div class="col-md-6">
                                <h5 class="colors">Size: <div class="color" style="margin-top: 10px;">{{$subproduct->getsize->name}}</div>
                                    </h5>
                                </div>
                                    <div class="col-md-6">

                                
                                 <h5 class="colors">Quantity:</h5>
                                        <div class="input-group">
                                 
                                    
                                        <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-default btn-number"  data-type="minus" data-field="" onclick="decreasequantity({{$subproduct->id}},{{$subproduct->pivot->quantity}})">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                        </span>

                                          <input type="text" id="quantity-{{$subproduct->id}}" name="quantity" class="form-control input-number" value=" {{$subproduct->pivot->quantity}}" min="1" max="100" readonly >

                                          <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-default btn-number" data-type="plus" data-field="" onclick="increasequantity({{$subproduct->id}},{{$subproduct->pivot->quantity}})">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>


                                </p>
                            


                                   </div>

                                   <div class="col-md-2">  

                                    <h5 class="colors"><div class="color">
                                        
                                        <strike>Rs{{$subproduct->price}}
                                        </strike>

                                         @php
                                             $totalprice=$subproduct->price*$subproduct->pivot->quantity+$totalprice;
                                         @endphp
                                        
                                    
                                         Rs{{$subproduct->sale_price}}({{floor(($subproduct->price-$subproduct->sale_price)*100/$subproduct->price)}}%&nbspOFF)
            
                                            @php 
                                            $totalsp=$totalsp+$subproduct->pivot->quantity*($subproduct->sale_price)
                                            @endphp
                                        
                                    </div></h5>


              <button class="btn returnBtn" type="submit">Add To Wishlist </button>
@if(Auth::user())
                <input type="hidden" value="{{Auth::user()->id}}" id="id" name="id">
@endif
  
                       

                                     {!!Form::open(['route'=>['cart.destroy',$subproduct->id],'method'=>'DELETE'])!!}

                                    {!!Form::submit('Remove',array('class'=> 'btn exchangeBtn'))!!}


                                    {!!Form::close()!!}


                                   <!--  <form method="get" action="/quantityincrement" class="test-form">

                                        <input type="hidden" name="id" value="{{$subproduct->id}}">

                                    </form>
 -->
                                    </div>
           
                                 </div>

                             </div>
                         
                        </div>




                        @endforeach



           </div> <!-- col ends -->
            <div class="col-md-3">
                @include('partials._billdetails')
            </div>

        </div>


</div>
@endsection


@section('scripts')

<script type="text/javascript">
  


function increasequantity(id,quantity){


        $.ajax({
        url: "/quantityincrement", 
        type:"GET",
        data:{quantity:quantity,id:id},
        success: function(result){

                location.reload();
    
    }});
    
    // $(".test-form").submit();
        
    

    
}


function decreasequantity(id,quantity){


        if(quantity==1)
            alert("Quantity Of a Product in Cart Can Not Be Made Zero")

        else
        $.ajax({
        url: "/quantitydecrement", 
        type:"GET",
        data:{quantity:quantity,id:id},
        success: function(result){

                location.reload();
    
    }});
    
}

</script>


@endsection