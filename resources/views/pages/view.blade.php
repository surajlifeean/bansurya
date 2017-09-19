
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
                <img class="bzoom_thumb_image" src="{{asset('http://127.0.0.1:8080/images/'.$image->name)}}"   />
                <img class="bzoom_big_image" src="{{asset('http://127.0.0.1:8080/images/'.$image->name)}}"/>

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
    @if($subproduct->discount_type=="Percentage")
        Rs{{$subproduct->price-($subproduct->price*$subproduct->discount)/100}}
        ({{$subproduct->discount}}% OFF)
    @else
         Rs{{$subproduct->price-$subproduct->discount}}({{floor($subproduct->discount*100/$subproduct->price)}}% OFF) 
    @endif


						</span></h4>
						<p class="vote"><strong>

						@if($subproduct->discount_type=="Percentage")
						{{floor(100/($subproduct->discount+8)+80)}}

    @else
    					{{floor(100/($subproduct->discount*100/$subproduct->price+8)+80)}}

    @endif

						%</strong> of buyers enjoyed this product! <strong><!-- (87 votes) --></strong></p>
						<h5 class="sizes">sizes:{{$subproduct->getsize->name}}
						<!-- 	<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span> -->
						</h5>
						<h5 class="colors">color: <div class="color" style="background-color:{{$subproduct->getcolor->color_code}};">
						</div>
							<!-- <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						 --></h5>
						<div class="action">

@if (Auth::guest())
  
     <a data-toggle="modal" data-target="#myModal">
              <button class="add-to-cart btn btn-default" type="button">add to cart</button>

@else
    {!!Form::open(array('route'=>'cart.store'))!!}

  <input type="hidden" value="{{$subproduct->id}}" id="subproduct" name="subproduct_id">

  <input type="hidden" value="{{Auth::user()->id}}" id="id" name="user_id">
  
  
              <button class="add-to-cart btn btn-default" type="submit">add to cart</button>

   {!!Form::close()!!}

@endif


							

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
              {{$subproduct->product->description}}
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

});
</script>



@endsection