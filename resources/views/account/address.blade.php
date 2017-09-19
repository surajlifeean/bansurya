@extends('main')


@section('stylesheets')

<style type="text/css">
.wrapper {
   position: relative;
}

.wrapper .glyphicon {
   position: absolute;
   top: 20px;
   left: 100px;
}


/*
  .navbar-default {
    background-color:  #d8fefa;
    border-color: #030033;
}
*/
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

.tab-pane{
  position: relative;
}

.tab-content>.active{
  display: block;
}

span.personalInfoValue {
    color: #292929;
    font-size: 18px;
    font-family: 'montserratRegular';
    width: 100%;
    display: block;
    padding: 2px 0;
    }

    .personalInfoWrapper label {
    font-weight: 400;
    font-family: 'montserratRegular';
    font-size: 15px;
    text-transform: uppercase;
    color: #9a9a9a;
    margin: 0;
    padding: 0;
    width: 100%;
}



.personalInfoWrapper .personalInfoIcon:before {
    display: inline-block;
    font: normal normal normal 22px/1 FontAwesome;
    position: absolute;
    left: 0;
    top: 0;
    width: 42px;
    height: 42px;
    background: #f2f2f2;
    border-radius: 100%;
    text-align: center;
    line-height: 42px;
    color: #292929;
}

.editBtn{
      position: absolute;
    top: -80px;
    right: -16px;
    background: #f2f2f2;
    width: 75px;
    height: 30px;
    color: #292929;
    font-size: 12px;
    text-transform: uppercase;
    line-height: 30px;
    padding: 0 0 0 10px;
    cursor: pointer;
    font-family: 'montserratRegular';
}
}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }


  </style>



@endsection



@section('content')

@include('partials._imagespace')

<!--side bar-->
    <div class="container" >
    <div class="row">
        <div class="col-sm-3 col-md-3">
            
            @include('partials._dashnav')

        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
              <div class="tab-content">
              <label>
                      <U>ADDRESS</U></label>
        {!!Form::open(array('route'=>'address.store'))!!}                   
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
                  <button type="submit" class="btn btn-block btn-primary">Submit</button>

                 {!!Form::close()!!}
                  <!-- <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                       </div>
                    

                  </div> -->
                  <span class="editBtn" id="editPersonalInfo">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                  Edit
                  </span>
             </div>
              
        </div>
    </div>
</div>

</div>
</div>

</div>
<!-- container ends
 -->

 @endsection



@section('scripts')




@endsection