 <div class="rightPanelCart">
					<div class="rightPanelCartWrapper">
			                  
	<div class="priceDetails">
		<h4 class="couponTitle">Price Details</h4>
		<p class="title">Bag Total: 
			<span class="pull-right">
				Rs. 
				<span id="grand_total_price_summery">{{$totalprice}}</span>
			</span>
		</p>
		<p class="title">Bag Discount: 
			<span class="pull-right">
				Rs. 
				<span id="discount_price_summery"> 
					{{$totalprice-$totalsp}}
				</span>
			</span>
		</p>
		<p class="title">Estimated VAT: 
			<span class="pull-right">
				Rs. 
				<span id="vat_price_summery"> 
					0 
				</span>
			</span>
		</p>
		<!-- <p class="title">Coupon Discount: <span class="pull-right">
			<a href="javascript:void(0);" style="cursor: default;">
				 Not Applied 			</a></span>
		</p> -->
		<p class="title">Shipping Cost: <span class="pull-right">

			@php 
				$shipcost=App\Http\Controllers\myhelper::getshippingcost();
			@endphp
	@if($totalsp<=$shipcost->cart_value && $totalsp>0)
	{{$shipping=$shipcost->shipping_cost}}
				
	@else
		{{$shipping=0}}
	@endif
		</span></p>
	</div>
	
	<div class="orderDetails">
		<h4 class="couponTitle">Order Total 
			<span class="pull-right">
				Rs. 
				<span id="order_total_summery">{{$totalsp+$shipping}}</span>
				<input type="hidden" id="bag-total-balance" value="1949">
			</span>
		</h4> 
		
	</div>  
		      {!! Form::open(['route'=>['cart.show',$cart->id],'method'=>'GET'])!!}
				
						<button type="submit" class="checkout btn btn-primary">Checkout</button> 

				</form>	
		       <h6 class="proceed-to-checkout-error-msg error"></h6> 
	                      
					</div>

					<div class="rightPanelBottom">
						<p>Need Help?<br>Call us on (022) 3077 0260</p>
					</div>

					
</div>
