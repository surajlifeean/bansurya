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
         {!!Form::open(array('route'=>'changepwd.store','class'=>'changepwd'))!!}             
    <div class="well">
              <div class="tab-content">
              <label>
                      <U>CHANGE PASSWORD</U></label>
                      
              <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        Old Password</label>
                       <input id="oldpwd" name="oldpwd" type="text" placeholder="Old Password"
                        class="input-xlarge form-control">
                       
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        New Password</label>
                       <input id="newpwd" name="newpwd" type="text" placeholder="New Password"
                        class="input-xlarge form-control">
                       

                    </div>

                  </div>

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        Confirm New Password</label>
                        <input id="cnewpwd" name="cnewpwd" type="text" placeholder="Confirm Password"
                        class="input-xlarge form-control">
                       
                       </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                        MOBILE NUMBER</label>
                        <span class="personalInfoValue">
                        8981527733
                        </span>

                    </div>
 -->
                  </div>
                  <!-- <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                       </div>
                    

                  </div> -->
                  <span class="editBtn" id="editPersonalInfo">
                  Change
                  </span>
                                   {!!Form::close()!!}

             </div>
              
        </div>
    </div>
</div>
</form>
</div>
</div>

</div>
<!-- container ends
 -->

 @endsection



@section('scripts')
    <script>
        $('#editPersonalInfo').click(function(event){
            event.preventDefault();
            $('.changepwd').submit();


        });
    </script>
@endsection
