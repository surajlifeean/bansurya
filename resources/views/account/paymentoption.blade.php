@extends('main')


@section('stylesheets')

<style type="text/css">
    .rightPanelCartWrapper {
    border: 1px solid #dcdcdc;
    padding: 15px;
}
    

</style>


@endsection

@section('content')

<div class="container">

	<div class="row">
		  <div class="col-md-9">
                        @php

                                        $totalprice=0;
                                        $totaldiscount=0;
        
                                @endphp
                    @foreach($subproducts as $subproduct)

                                        @php
                                             $totalprice=$subproduct->price+$totalprice;
                                         @endphp

    @if($subproduct->discount_type=="Percentage")
        
        @php 
        $totaldiscount=$totaldiscount+($subproduct->price*$subproduct->discount)/100;
        @endphp
    @else
        @php 
        $totaldiscount=$totaldiscount+$subproduct->discount;
        @endphp
    @endif



@endforeach


                
                <div class="well">
                    <div class="tab-content">

                      <label style="text-align: center;"><U>PAYMENT METHOD</U></label>
                    <P>


                        {!!Form::open(array('route'=>'order.store','class'=>'confirmorder'))!!}             
                        <!-- 
                            ,'onsubmit' => 'return confirm()' -->
                        <input type="hidden" name="total_price" value="{{$totalprice}}">
                        <input type="hidden" name="total_discount" value="{{$totaldiscount}}">
                        <label style="text-align: center;">
                      Cash On Delivery</label>

                        <input type="radio" name="paymentmode" id="paymentmode" value="cod">
                        
                        {!!Form::close()!!}



                        <P>
            
                    </div>
                </div>

            </div>



		    <div class="col-md-3">

                @include('partials._billdetails')
            </div>

      </div>


</div>


@endsection



@section('scripts')

<script>
    $(".checkout").html('Confirm');
    

  $( ".checkout" ).click(function(event) {
    event.preventDefault();
    if($('#paymentmode').val()=="")
            alert("field empty");
    else        
          $( ".confirmorder" ).submit();
});


</script>
@endsection