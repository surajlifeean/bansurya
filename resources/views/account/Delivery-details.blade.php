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

<div class="container">


	<div class="row">


		<div class="col-md-9">
			<div class="well">
              <div class="tab-content">

					 <label style="text-align: center;">
                      <U>CONTACT DETAILS</U></label>

			        {!!Form::open(array('route'=>'guest-shop.store','class'=>'addressinput'))!!}             

              <input type="hidden" name="cart_id" value="{{$cart->id}}">      
              <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        EMAIL</label>
                    
                        <input id="email" name="email" type="text" placeholder="Email Id"
                        class="input-xlarge form-control">
                        <p class="help-block"></p>
                    
                  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        PHONE NUMBER</label>
                       
                        <input id="phone_no" name="phone_no" type="text" placeholder="Phone Number"
                        class="input-xlarge form-control">
                        <p class="help-block"></p>
                   

                    </div>

                  </div>

                  </div>


                  
                  </div>


                  <!-- <button type="submit">Submit</button>
 -->
				         {!!Form::close()!!}



           



             </div>  <!-- TAB CONTENT ENDS -->
         </div> <!-- WELL ENDS -->
		</div> <!-- COL-MD-9 ENDS HERE -->



		<div class="col-md-3">
			  					@php

                                        $totalprice=0;
                                        $totalsp=0;
        
                                @endphp
                    @foreach($subproducts as $subproduct)

                                        @php
                                             $totalprice=$subproduct->price*$subproduct->pivot->quantity+$totalprice;
                                         @endphp
                                        
                                    
                                         Rs{{$subproduct->sale_price}}({{($subproduct->price-$subproduct->sale_price)*100/$subproduct->price}}%&nbspOFF)
            
                                            @php 
                                            $totalsp=$totalsp+$subproduct->pivot->quantity*($subproduct->sale_price)
                                            @endphp
                                      

@endforeach

			@include('partials._billdetails');


		</div>
	</div>
</div>


@endsection


@section('scripts')

<script type="text/javascript">


  $( ".checkout" ).click(function(event) {
    event.preventDefault();
  $( ".addressinput" ).submit();
});
	

</script>


@endsection