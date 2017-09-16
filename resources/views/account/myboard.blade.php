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


<div class="cardheader">

</div>
<div class="avatar" align="center">
         <img class="dpimage" src="images/Kurti.jpg" width="139" height="139"  >
      
</div>


<div class="info" align="center">
      <div class="title" style="text-transform: capitalize;">  {{ Auth::user()->name }}</div>
      
 <div class="btn btn-file">       
  <span class="glyphicon glyphicon-camera" aria-hidden="true"> Change
      <form>
           <input type="file">
     </form>
  </span> 
</div>

  </div> 

<!--side bar-->
    <div class="container" style="margin-top:-50px;">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>My Profile</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">Personal Info</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">My Address</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="#">Wishlist</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Order Summary</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Returns</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Replacements</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
              <div class="tab-content">
              <label>
                      <U>  PERSONAL INFO</U></label>
                      
              <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        FIRST NAME</label>
                        <span class="personalInfoValue">
                        Suraj
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        LAST NAME</label>
                        <span class="personalInfoValue">
                        Jeswara
                      </span>

                    </div>

                  </div>

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">

                      <label>
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        EMAIL ID</label>
                        <span class="personalInfoValue">
                        surajjeswara@yahoo.com
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                        MOBILE NUMBER</label>
                        <span class="personalInfoValue">
                        8981527733
                        </span>

                    </div>

                  </div>
                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        NEWSLETTER SUBSCRIPTION</label>
                        <span class="personalInfoValue">
                        Email:Yes
                        </span>
                    </div>
                    

                  </div>
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

  <script>

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

  </script>



@endsection
