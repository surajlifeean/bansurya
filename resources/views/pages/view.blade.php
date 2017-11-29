
@extends('main')

@section('stylesheets')
			
	{!!Html::style('css/style.css')!!}

<style>
	@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }
}

</style>
	
@endsection

@section('content')


<div class="container">
<!-- Product Zoom   -->
<div class="row">
	<div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
	<div class="bzoom_wrap">
        <ul id="bzoom">
        	@foreach($images as $image)
            <li>
                <img class="bzoom_thumb_image" src="{{asset('http://127.0.0.1:8080/images/'.$image->name)}}"  alt="" />
                <img class="bzoom_big_image" src="{{asset('http://127.0.0.1:8080/images/'.$image->name)}}" alt=""/>

            </li>
            @endforeach
        </ul>

</div>
</div>

		<div class="details col-md-5 col-sm-12  col-xs-12">
						<h3 class="product-title">{{$subproduct->product->name}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div><!-- 
							<span class="review-no">41 reviews</span> -->
						</div><!-- 
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p> -->
						<h4 class="price">current price: <span>
							

							<strike> Rs{{$subproduct->price}}</strike>
                  
             Rs{{$subproduct->sale_price}}
        ({{floor(($subproduct->price-$subproduct->sale_price)*100/$subproduct->price)}}% OFF)
    

						</span></h4>
						<p class="vote"><strong>
              80

						%</strong> of buyers enjoyed this product! <strong><!-- (87 votes) --></strong></p>
						<h5 class="sizes">sizes:{{$subproduct->getsize->name}}
						</h5>


@if(Auth::guest())
  
   @php
 if(Session::has('guest_id'))
        
        $id=session('guest_id');

      else
        $id=App\Http\Controllers\myhelper::createguest();
  @endphp

@else
 @php $id=Auth::user()->id; @endphp
@endif

    <div class="row">
      @if($subproduct->quantity==0)

<a data-toggle="modal" data-target="#mynotifyModal">

              <button class="add-to-cart btn btn-default add-to-cart-submit" type="submit">Notify</button>
            </a>
            <div>We will notify you once the product is available.</div>
      @else

                            <div class="col-md-3 col-sm-5 col-xs-3">
                                <h5 class="colors">Quantity:</h5>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-6">
                                <div class="input-group">
                                 
                                    
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-default btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>






    {!!Form::open(array('route'=>'cart.store','class'=>'addtocart'))!!}


  <input type="hidden" value="{{$subproduct->id}}" id="subproduct" name="subproduct_id">

  <input type="hidden" value="{{$id}}" id="id" name="user_id">
  

  <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" readonly>
  

   {!!Form::close()!!}





                                  <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-default btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                              </div>
                </div>


                        
						<div class="action" style="margin-top: 20px;">

<table>
  <tr> <td>
  
              <button class="add-to-cart btn btn-default add-to-cart-submit" type="submit">Add to cart</button>

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
</table>

@endif

						</div>
         
					</div>

	</div><!--row ends-->


<div class="row" style="
    margin-top: 200px;
">

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="
    margin-top:20px;">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Details
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
              <dl>
              {!!$subproduct->product->description!!}
              </dl>
    
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Delivery and Return
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      We do not accept returns for accessories- jewelry,stockings and pantyhose for hygienic reasons. Bags and footwear can be exchanged.
      </div>
    </div>
  </div>
 
        </div>
     </div>

</div>

<div class="modal fade" id="mynotifyModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Product Notification - <a href="http://www.jquery2dotnet.com"><b>Bansurya</b></a></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
   
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                

                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="show-message"></div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="notify-email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                               <p style="opacity:0.5;"> Provide your email we will notfy you once the product is available!</p>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                             
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary notify-button">
                                    Notify Me
                                </button>

                            </div>
                        </div>
                    </form>



                            </div>

                        </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>


      
@endsection




@section('scripts')

  {!!Html::script('js/jqzoom.js')!!}


  <script type="text/javascript">
$("#bzoom").zoom({
	zoom_area_width: 300,
    autoplay_interval :3000,
    small_thumbs : 4,
    autoplay : false
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


$(document).ready(function(){

	var size=$(window).width();
	if(size<970){
		$(".details").css('margin-top','500px');
	}


var $img = $a.getElementsByTagName("img")[0];

console.log($img.alt);

});

var $img = $a.getElementsByTagName("img")[0];

//sxript for quantity


</script>

<script type="text/javascript">
  


$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});




  $( ".add-to-cart-submit" ).click(function(event) {
          $( ".addtocart" ).submit();
});
</script>


<script type="text/javascript">
  
  $('.notify-button').click(function(e){
    e.preventDefault();
    var email=$('#notify-email').val();
    var product_id={{$subproduct->id}};

     $.ajax({
        url: "/ajaxreq",
        type:"GET",
        data:{email:email,id:product_id},
        success: function(result){
        $('.show-message').html("Done! We will notify you as soon as the product is available");
        
         
                // location.reload();
    
    }});
    

  })
</script>

@endsection