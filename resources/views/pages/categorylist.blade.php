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


<!--used for filter-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


  <style>
 

 /* nav bar*/
.example3 .navbar-brand {
  height: 80px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}

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


@font-face {
    font-family: myFirstFont;
    src: url(sanam.TTF);
}

#navbar3 {
    font-family: myFirstFont;
    font-size: 20px;
}
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
    
</head>
<body>

<div class="example3">
  <nav class="navbar navbar-light navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
          
        </button>
        <a href="http://disputebills.com"><img src="images/img3.png" height="90px" alt="Dispute Bills">
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
  <div class="col-md-3 col-sm-4 col-xs-6 ">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>
    <p>Bansurya special</p>
    <p>price:Rs 1200</p>

    </div>
  <div class="col-md-3 col-xs-6 col-sm-4 ">
    <a href="#" class="thumbnail">
      <img src="images/item2.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>
    <p>Bansurya special-silk</p>
    <p>price:Rs 1200</p>
  </div>

  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item3.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-sipon</p>
    <p>price:Rs 1200</p>
    </div>
  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-taat</p>
    <p>price:Rs 1200</p>
  
  </div>
  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-taat</p>
    <p>price:Rs 1200</p>
  
  </div>
  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-taat</p>
    <p>price:Rs 1200</p>
  
  </div>
  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-taat</p>
    <p>price:Rs 1200</p>
  
  </div>
  <div class="col-md-3 col-xs-6 col-sm-4">
    <a href="#" class="thumbnail">
      <img src="images/item1.jpg" alt="..."><span class="glyphicon glyphicon-heart"></span>
    </a>

    <p>Bansurya special-taat</p>
    <p>price:Rs 1200</p>
  
  </div>

</div>

            </div>
          </div>
        </div>


<!--filter ends-->


<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Ban<span>surya</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
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

