{{dump($orderret)}}
{{dump($address)}}
@extends('main')

@section('stylesheets')

<style>

	h2 {
    color: #292929;
    font-size: 14px;
    font-family: 'montserratRegular';
    margin: 30px 0 10px;
    display: inline-block;
    width: 100%;
}



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
      			     
                   <div class="panel panel-default  panel--styled">
                              <div class="panel-body">
                                <u>
                                Purchase ID:BNY{{strtotime($orderret->created_at).$orderret->id}}</u>
                                <div class="col-md-12 panelTop">  
                                  <div class="col-md-4">
                                        @php
                                    $image=App\Http\Controllers\myhelper::getimagefromid($orderret->subproduct_id);
                                  @endphp  
                                       <img class="img-responsive" src="{{asset('http://127.0.0.1:8080/images/'.$image)}}" alt=""/>
                            




                                  </div>

                                    <div class="col-md-6"> 
                                          <h2>{{$orderret->product_name}}</h2> 
                                          <div class="row">
                                          <div class="col-md-1 col-md-offset-4">
                                            color:
                                          </div>
                                          <div class="col-md-1">
                                            <div style="width:10px; height:10px; background-color:{{App\Http\Controllers\myhelper::getcolorfromid($orderret->subproduct->color)}};"></div>
                                          </div>
                                          <div class="col-md-2"> 
                                             Quantity:{{$orderret->quantity}}
                                          </div>
                                        </div>
                                          
                                </div>
                                <div class="col-md-2">  
                                              <p><strike>Rs&nbsp{{$orderret->unit_price}}</strike></p>
                                              <p>Rs&nbsp{{$orderret->unit_sp}}</p>
                                                  
                                      <p>Delivery On:{{date('d-m-y', strtotime($orderret->created_at))}}</p>
                                      <p>Order Date:{{date('d-m-y', strtotime($orderret->created_at))}}</p>
                                       
                                  </div>
           


                                </div>
             	                </div>
                    </div>


              </div>      
            <div class="row">
            <div class="panel panel-default  panel--styled">

                   <form action="{{route('returns.store')}}" method="post">
              
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="hidden" name="id" value="{{$orderret->id}}">

                                        <input type="hidden" name="subproduct_id" value="{{$orderret->subproduct_id}}">
                                        

              <div class="row">
                <h2>Please tell us the reason for return</h2>
                Select issue*<br>
                <input type="radio" name="issue" value="Fit_issue" required>Fit Issue <br>
                <input type="radio" name="issue" value="Received_defective_merchandise" required>Received defective merchandise<br>
                <input type="radio" name="issue" value="Wrong_item_shipped" required>Wrong item shipped<br>
              </div>
              <div class="row">
                <h2>Address for pick up</h2>
                {{$address->address1}},
                {{$address->address2}},
                {{$address->city}},
                {{$address->pcode}},
                {{$address->region}}.


              </div>


            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <h2> Bank details for refund</h2>
                 
              <input type="text" class="form-control" name="account_number" type="number" placeholder="Account Number" required>
              <div style="margin-bottom: 5px"></div>
              <input type="text" class="form-control" name="ifsc_code" placeholder="IFSC Code" required>
              <div style="margin-bottom: 5px"></div>
              <input type="text" class="form-control" name="branch_code" placeholder="Branch Code" required>
              <div style="margin-bottom: 5px"></div>
                   <label>Remarks</label>
              <textarea row="4" name="remarks" class="form-control" required></textarea>
             
              <input type="checkbox" name="confirm" required>I confirm that the product is unused and with original tag intact.
              </div>
            </div>


            <button type="submit" class="btn exchangeBtn" style="margin-top:5px; ">Submit</button>
             
</form>
            </div> 
          </div>      
      </div>
           
      
	</div>  <!-- row ends -->
</div> <!-- container ends -->

@endsection
@section('scripts')
  <script type="text/javascript">
    $( document ).ready(function() {
    $('#collapseTwo').addClass("in");
    $('#collapseOne').removeClass("in");
      
  
});
  </script>

@endsection