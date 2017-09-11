{{dump($subproducts)}}
{{dump($images)}}



@extends('main')

@section('stylesheets')
	<style>

/*filter*/
      .behclick-panel  .list-group {
        margin-bottom: 0px;
    }
    .behclick-panel .list-group-item:first-child {
      border-top-left-radius:0px;
      border-top-right-radius:0px;
    }
    .behclick-panel .list-group-item {
      border-right:0px;
      border-left:0px;
    }
    .behclick-panel .list-group-item:last-child{
      border-bottom-right-radius:0px;
      border-bottom-left-radius:0px;
    }
    .behclick-panel .list-group-item {
      padding: 5px;
    }
    .behclick-panel .panel-heading {
      /*        padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
      border-top-right-radius: 0px;
      border-top-left-radius: 0px;
      border-bottom: 1px solid darkslategrey;
    }
    .behclick-panel .panel-heading:last-child{
      /* border-bottom: 0px; */
    }
    .behclick-panel {
      border-radius: 0px;
      border-right: 0px;
      border-left: 0px;
      border-bottom: 0px;
      box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
    }
    .behclick-panel .radio, .checkbox {
      margin: 0px;
      padding-left: 10px;
    }
    .behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
      outline: none;
    }
    .behclick-panel .panel-body > .panel-heading{
      padding:10px 10px;
    }
    .behclick-panel .panel-body {
      padding: 0px;
    }
     /* unvisited link */
    .behclick-panel a:link {
        text-decoration:none;
    }

    /* visited link */
    .behclick-panel a:visited {
        text-decoration:none;
    }

    /* mouse over link */
    .behclick-panel a:hover {
        text-decoration:none;
    }

    /* selected link */
    .behclick-panel a:active {
        text-decoration:none;
    }

/*filter css ends*/


/*
.row {
    margin: 80px 0px 80px 0px;
    }
*/

.thumbnail {
    margin: 10px 10px 10px 10px;
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    transform: scale(1, 1);
    transition-duration: 0.3s;
    -webkit-transition-duration: 0.3s; /* Safari */
    }

.thumbnail:hover {
  cursor: pointer;
  -webkit-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    transition-duration: 0.5s;
    -webkit-transition-duration: 0.3s; /* Safari */
    box-shadow: 10px 10px 5px #888888;
    z-index: 1;
    }


/*on hover menu*/
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}


 </style>





@endsection


@section('content')
		
<!--filter starts-->
<div class="container">
  <div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12">

        <h3>SAREE</h3>

    </div>

    <div class="col-md-3  col-sm-3 col-xs-12">    
<label for="sel1">SORT BY:</label>
      <select class="form-control" id="sel1">
        <option>Price: High to Low</option>
        <option>Price: Low to High</option>
        <option>What's New</option>
      
      </select>
      </div>
    </div>
</div>
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-3">
              <div id="accordion" class="panel panel-primary behclick-panel">
                <div class="panel-heading" style="
    margin-top: 10px;">
                  <h3 class="panel-title">Filter By</h3>
                </div>
                <div class="panel-body" >
                  <div class="panel-heading " >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse0">
                        <i class="indicator fa fa-caret-right" aria-hidden="true"></i> Price
                      </a>
                    </h4>
                  </div>
                  <div id="collapse0" class="panel-collapse collapse" >
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            0 - 1000
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" value="">
                            1000 - 2000
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox"  >
                          <label>
                            <input type="checkbox" value="">
                            2000 - 6000
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox"  >
                          <label>
                            <input type="checkbox" value="">
                            More Than 6000
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="panel-heading " >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse1">
                        <i class="indicator fa fa-caret-right" aria-hidden="true"></i>Type
                      </a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse" >
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            Assam Silk Saree
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" value="">
                            Banarasi
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox"  >
                          <label>
                            <input type="checkbox" value="">
                            Dhakai
                          </label>
                        </div>
                      </li>
                    <li class="list-group-item">
                        <div class="checkbox"  >
                          <label>
                            <input type="checkbox" value="">
                             Tant – Cotton
                          </label>
                        </div>
                      </li>
                    
                    </ul>
                  </div>
                  <div class="panel-heading" >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Color</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            red
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" value="">
                            blue
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox"  >
                          <label>
                            <input type="checkbox" value="">
                            green
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="panel-heading" >
                    <h4 class="panel-title">
                      <a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Size</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            7
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" value="">
                            8
                          </label>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            9
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

	<div class="col-md-9 col-sm-9 col-xs-12">


<div class="row">
  

@foreach($subproducts as $subproduct)

<div class="col-md-4 col-sm-4 col-xs-6 ">
    
    @foreach($images as $img)
    	@if($img->p_id==$subproduct->id)
    <a href="{{route('product.show',$subproduct->id)}}" class="thumbnail">
      <img src="http://127.0.0.1:8080/images/{{$img->name}}" alt="...">
    </a>
    @endif
    @endforeach

<table width="100%">
<tr>
    <td>
    <p><b>{{$subproduct->name}}</b></p>
    </td>
    <td>
    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
    </td>
</tr>
<tr>
<td>
     <strike> Rs{{$subproduct->price}}</strike>
    @if($subproduct->discount_type=="Percentage")
        Rs{{$subproduct->price-($subproduct->price*$subproduct->discount)/100}}
        ({{$subproduct->discount}}% OFF)
    @else
         Rs{{$subproduct->price-$subproduct->discount}}({{floor($subproduct->discount*100/$subproduct->price)}}% OFF) 
    @endif

</td>
<td>
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</td>

</tr>
</table>


</div>
  
@endforeach  
  
  
</div>

            </div>
          </div>
        </div>




@endsection



@section('scripts')
	

  <script>

/*filter script to change the icons*/
$(function() {

  function toggleChevron(e) {
  
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-caret-down fa-caret-right');
  }
  $('#accordion').on('hidden.bs.collapse', toggleChevron);
  $('#accordion').on('shown.bs.collapse', toggleChevron);


});


/*filter script to change the icons ends*/

  if ( $(window).width() > 770) {      
  
          $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    }
    else{
         ;
           
}

/*filter*/
      



  </script>

@endsection