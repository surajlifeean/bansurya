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
                      <U>  PERSONAL INFO</U></label>
                      
              <div class="tab-pane personalInfoWrapper active">
                  <div class="personalInfoView">
                    <div class="infodisplay">

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      
                        NAME</label>
                        <span class="personalInfoValue username">
                        {{Auth::user()->name}}
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        EMAIL ID</label>
                        <span class="personalInfoValue useremail">
                          {{Auth::user()->email}}
                        </span>
                   

                    </div>

                  </div>

                  <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                        <label>
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        NEWSLETTER SUBSCRIPTION</label>
                        <span class="personalInfoValue newslettersub">
                        Email:Yes
                        </span>
                   
                       </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label>
                      <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                        MOBILE NUMBER</label>
                        <span class="personalInfoValue mobno">
                         {{Auth::user()->mobile_number}}
                        </span>

                    </div>

                  </div> 
                </div>
                      

                    {!!Form::open(array('route'=>'profile.store','class'=>'editform'))!!}  


                    <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      
                        NAME</label>
                             

                           <input type='text' name='username' value='{{Auth::user()->name}}' class='form-control' id='iusername'>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                          EMAIL</label>
                      
                      <input type='text' name='useremail' value='{{Auth::user()->email}}' class='form-control iemail'>
                    </div>
                    </div>

                    <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                      
                        NEWSLETTER SUBSCRIPTION</label>
                    
                    
                      <div class='row'><div class='col-md-6 col-sm-6'><input type='radio' name='newslettersub' value='Yes' class='form-control inewslettersub'>Yes</div><div class='col-md-6 col-sm-6'><input type='radio' name='newslettersub' value='No' class='form-control inewslettersub'>No</div></div>
                    </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                      <label><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                      
                        MOBILE NO.</label>
                    

                      <input type='text' name='mobno' value='{{Auth::user()->mobile_number}}' class='form-control imobno'>

                    </div>
                  </div>
                      {!!Form::close()!!}             

                  <!-- <div class="row vspace5">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 personalInfoIcon name">
                       </div>
                    

                  </div> -->
                  <span class="editBtn" id="editPersonalInfo">
                  <span class="" aria-hidden="true"></span>
                  <div class="edittxt">
                  Edit
                </div></span>


                  

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


<script type="text/javascript">
  
      $('.editform').hide();

  

  $('#editPersonalInfo').click(function(){

      $('.editform').show();
      $('.infodisplay').hide();
      $('.edittxt').html("<div id='savetxt'>Save</div>");




  });


</script>

<script type="text/javascript">
  
$(document).on('click', '#savetxt', function(){
//         var name = document.getElementById('iusername').value;

//         var email = $('.iemail').val();

//         var mobno = $('.imobno').val();

// console.log(name+email+mobno);

//         $.ajax({
//         url: "/profile", 
//         type:"GET",
//         data:{name:name,email:email,mobno:mobno},
//         success: function(result){

//           console.log(result);

    
//     }});

  $('.editform').submit();

        
    });
</script>

@endsection
