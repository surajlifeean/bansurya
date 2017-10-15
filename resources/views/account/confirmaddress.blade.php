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
                      <U>DELIVERY ADDRESS</U></label>


            @if(!count($address))
			        {!!Form::open(array('route'=>'deliveryadd.store','class'=>'addressinput'))!!}             

              <input type="hidden" name="cart_id" value="{{$cart->id}}">      
              <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        NAME</label>
                    
                        <input id="full-name" name="name" type="text" placeholder="full name"
                        class="input-xlarge form-control">
                        <p class="help-block"></p>
                    
                  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        ADDRESS 1</label>
                       
                        <input id="address1" name="address1" type="text" placeholder="address line 1"
                        class="input-xlarge form-control">
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                   

                    </div>

                  </div>

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        ADDRESS 2</label>
                       
                       <input id="address2" name="address2" type="text" placeholder="address line 2"
                        class="input-xlarge form-control">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                   
                       </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        CITY/TOWN</label>
                        <select id="city" name="city" type="text" placeholder="city" class="input-xlarge form-control">
                          <option value="Kolkata">Kolkata</option>  
       <option value="Kolkata">Howrah  </option>
       <option value="Darjeeling">Darjeeling  </option>
       <option value="Kalimpong">Kalimpong </option>
       <option value="Sainthia">Sainthia  </option>
       <option value="Kharagpur">Kharagpur</option>
       <option value="Bardhaman">Bardhaman </option>
       <option value="Asansol">Asansol </option>
       <option value="Durgapur">Durgapur  </option>
       <option value="Murshidabad">Murshidabad</option>
       <option value="Siliguri">Siliguri  </option>
       <option value="Jalpaiguri">Jalpaiguri</option>
       <option value="Raiganj">Raiganj </option>
       <option value="Balurghat">Balurghat </option>
       <option value="Purulia">Purulia </option>
       <option value="Baharampur">Baharampur</option>
       <option value="Krishnanagar">Krishnanagar</option>
       <option value="Barasat">Barasat </option>
       <option value="Barrackpore">Barrackpore</option>
       <option value="Ranaghat">Ranaghat  </option>
       <option value="Serampore">Serampore </option>
       <option value="Chandannagar">Chandannagar  </option>
       <option value="Chinsura">Chinsura  </option>
       <option value="Kalyani">Kalyani </option>
       <option value="Tamluk">Tamluk  </option>
       <option value="Medinipur">Medinipur </option>
       <option value="Nabadwip">Nabadwip  </option>
       <option value="Contai">Contai  </option>
       <option value="Cooch Behar">Cooch Behar</option>
       <option value="Bankura">Bankura</option>
       <option value="Bishnupur">Bishnupur </option>
       <option value="Haldia">Haldia</option>

                        </select>
                    </div>

                  </div>


                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        STATE</label>
                       
                       
                       <input id="region" name="region" type="text" placeholder="state / province / region"
                        class="input-xlarge form-control" value="West Bengal" readonly>
                        <p class="help-block"></p>

                   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
                        POSTAL CODE</label>
                        <input id="pcode" name="pcode" type="text" placeholder="Postal Code"
                        class="input-xlarge form-control">
                        <p class="help-block"></p>

                    </div>

                  </div>


                  <!-- <button type="submit">Submit</button>
 -->
				          </div>
             </div>
                 {!!Form::close()!!}



            @else


                     {!!Form::model($address,['route'=>['deliveryadd.update',$address->id],'method'=>'PUT','class'=>'addressinput'])!!}
<!-- 
                     ,'onsubmit' => 'return confirm()' -->

                <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        NAME</label>
                    
                        <input id="full-name" name="name" type="text" placeholder="full name"
                        class="input-xlarge form-control" value="{{$address->name}}">
                        <p class="help-block"></p>
                    
                  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        ADDRESS 1</label>
                       
                        <input id="address1" name="address1" type="text" placeholder="address line 1"
                        class="input-xlarge form-control" value="{{$address->address1}}">
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                   

                    </div>

                  </div>

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        ADDRESS 2</label>
                       
                       <input id="address2" name="address2" type="text" placeholder="address line 2"
                        class="input-xlarge form-control" value="{{$address->address2}}">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                   
                       </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        CITY/TOWN</label>
                        <select id="city" name="city" type="text" placeholder="city" class="input-xlarge form-control" >
                          <option value="{{$address->city}}">{{$address->city}}</option>  

                          <option value="Kolkata">Kolkata</option>  
       <option value="Kolkata">Howrah  </option>
       <option value="Darjeeling">Darjeeling  </option>
       <option value="Kalimpong">Kalimpong </option>
       <option value="Sainthia">Sainthia  </option>
       <option value="Kharagpur">Kharagpur</option>
       <option value="Bardhaman">Bardhaman </option>
       <option value="Asansol">Asansol </option>
       <option value="Durgapur">Durgapur  </option>
       <option value="Murshidabad">Murshidabad</option>
       <option value="Siliguri">Siliguri  </option>
       <option value="Jalpaiguri">Jalpaiguri</option>
       <option value="Raiganj">Raiganj </option>
       <option value="Balurghat">Balurghat </option>
       <option value="Purulia">Purulia </option>
       <option value="Baharampur">Baharampur</option>
       <option value="Krishnanagar">Krishnanagar</option>
       <option value="Barasat">Barasat </option>
       <option value="Barrackpore">Barrackpore</option>
       <option value="Ranaghat">Ranaghat  </option>
       <option value="Serampore">Serampore </option>
       <option value="Chandannagar">Chandannagar  </option>
       <option value="Chinsura">Chinsura  </option>
       <option value="Kalyani">Kalyani </option>
       <option value="Tamluk">Tamluk  </option>
       <option value="Medinipur">Medinipur </option>
       <option value="Nabadwip">Nabadwip  </option>
       <option value="Contai">Contai  </option>
       <option value="Cooch Behar">Cooch Behar</option>
       <option value="Bankura">Bankura</option>
       <option value="Bishnupur">Bishnupur </option>
       <option value="Haldia">Haldia</option>

                        </select>
                    </div>

                  </div>


                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        STATE</label>
                       






                       
                       <input id="region" name="region" type="text" placeholder="state / province / region"
                        class="input-xlarge form-control" value="West Bengal" readonly>
                        <p class="help-block"></p>

                   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
                        POSTAL CODE</label>
                        <input id="pcode" name="pcode" type="text" placeholder="Postal Code"
                        class="input-xlarge form-control" value="{{$address->pcode}}">
                        <p class="help-block"></p>

                    </div>

                  </div>


</div>
</div>


                      {!!Form::close()!!}




            @endif




             </div>  <!-- TAB CONTENT ENDS -->
         </div> <!-- WELL ENDS -->
		</div> <!-- COL-MD-9 ENDS HERE -->



		<div class="col-md-3">
			  					@php

                                        $totalprice=0;
                                        $totaldiscount=0;
        
                                @endphp
                    @foreach($subproducts as $subproduct)

                                     
                                         @php
                                             $totalprice=$subproduct->price*$subproduct->pivot->quantity+$totalprice;
                                         @endphp
                                        
                                        @if($subproduct->discount_type=="Percentage")
                                            
                                            @php 
                                            $totaldiscount=$totaldiscount+$subproduct->pivot->quantity*($subproduct->price*$subproduct->discount)/100;
                                            @endphp
                                        @else
                                        

                                            @php 
                                            $totaldiscount=$totaldiscount+$subproduct->discount*$subproduct->pivot->quantity;
                                            @endphp
                                        @endif



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