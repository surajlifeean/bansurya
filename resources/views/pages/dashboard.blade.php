<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">


  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
 

 /* nav bar*/
.example3 .navbar-brand {
  height: 70px;

}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;

}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}

/* image thubnails */

.row {
    margin: 80px 0px 80px 0px;
    }


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
/*font style*/
@font-face {
    font-family: myFirstFont;
    src: url(sanam.TTF);
}


#navbar3 {
    font-family: myFirstFont;
    font-size: 20px;


}
/*wish list icon */

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
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }


  </style>


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
    
</head>
<body>

<div class="example3">
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
          
        </button>
        <a href="http://disputebills.com"><img src="images/logo2.jpg" height="70px" weight="90px" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="#">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Trending <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" >
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
      
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Ethnic Wear <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" >
              <li><a href="#">Saree</a></li>
              <li><a href="#">Lehenga</a></li>
              <li><a href="#">Salwar</a></li>
              <li><a href="#">Kurti</a></li>
            </ul> 
          </li>
      
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Collections <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Wedding Collection</a></li>
              <li><a href="#">Puja Collection</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">SEASONAL</li>
              <li><a href="#">Monsoon Collection</a></li>
              <li><a href="#">Winter Collection</a></li>
              <li><a href="#">Summer Collection</a></li>
            </ul>
          </li>
      
          
          <li>
              <a href="#">Login/Register</a>

          </li>
          <li>
              <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i></a>
        </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
  </div>
<div class="cardheader">

</div>
<div class="avatar" align="center">
         <img class="dpimage" src="images/demodp.jpg" width="139" height="139"  >
      
</div>


<div class="info" align="center">
      <div class="title" style="text-transform: capitalize;">Suraj Jeswara</div>
      <div class="desc">
 <div class="btn btn-file">       
  <span class="glyphicon glyphicon-camera" aria-hidden="true"> Change
      <form>
           <input type="file">
     </form>
  </span> 
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
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Personal Info</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">My Address</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Wishlist</a>
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
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Returns</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Replacements</a>
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
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
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
                <h1>
                    Accordion Menu With Icon</h1>
                Admin Dashboard Accordion Menu
            </div>
        </div>
    </div>
</div>

























      </div>
</div>






 <footer class="footer-distributed">

      <div class="fodemodpleft">

        <h3>Ban<span>surya</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Bansuriya &copy; 2015</p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>

        </div>

      </div>

      <div class="footer-right">

        <p>Contact Us</p>

        <form action="#" method="post">

          <input type="text" name="email" placeholder="Email" />
          <textarea name="message" placeholder="Message"></textarea>
          <button>Send</button>

        </form>

      </div>

    </footer>




</body>

</html>
