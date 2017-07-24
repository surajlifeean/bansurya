<!DOCTYPE html>
<html lang="en">
<head>
  <title>product</title>
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
  /* TODO:
 * clean up!
 * ===============
 * horizontal thumbnails
 * at small screens
 * and in fullscreen
 * ===============
 * create Mixins
 * ===============
 */

/*for circular buttons*/
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

/*for circular buttons end*/


.btn-sq {
  width: 100px !important;
  height: 100px !important;
  font-size: 10px;
}



@import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
/* colors */
html {
  width: 100%;
  height: 100%;
}

/*body {
  background: #efefef;
  color: #333;
  font-family: "Raleway";
  height: 100%;
}

body
h1 {
  text-align: center;
  color: #428BFF;
  font-weight: 300;
  padding: 40px 0 20px 0;
  margin: 0;
}
*/
.gallery {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  position: relative;
  background:  #efefef;
  width: 100%;
  /*box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);*/
  border-radius: 1px;
}
.gallery input[name$="control"] {
  display: none;
}
.gallery .carousel {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  position: relative;
  height: 70vh;
  width: 100%;
}
.gallery .wrap {
  width: 100%;
  height: 100%;
  position: static;
  margin: 0 auto;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  margin-right: 10px;
}
.gallery .wrap figure {
  padding: 10px;
  height: 100%;
  min-width: 100%;
  -webkit-transition: opacity 0.25s ease-in-out 0.05s;
  transition: opacity 0.25s ease-in-out 0.05s;
  position: relative;
  left: 0;
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
  box-sizing: border-box;
  text-align: center;
  margin: 0;
  display: block;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  opacity: 1;
}
.gallery .wrap figure label {
  cursor: zoom-in;
  height: auto;
  width: 100%;
  height: 100%;
  position: relative;
  display: block;
}
.gallery .wrap figure img {
  cursor: inherit;
  height: auto;
  max-width: 100%;
  max-height: 100%;
  border-radius: 1px;
  margin: 0 auto;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.gallery .thumbnails {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  min-width: 60px;
  max-height: 100%;
  height: auto;
  -webkit-box-flex: 0;
      -ms-flex-positive: 0;
          flex-grow: 0;
  -ms-flex-item-align: center;
      align-self: center;
  -ms-flex-preferred-size: auto;
      flex-basis: auto;
  position: relative;
  white-space: nowrap;
  overflow: hidden;
  overflow-y: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding: 0 10px;
  z-index: 20;
}
.gallery .thumbnails .thumb {
  min-width: 60px;
  height: 60px;
  background-position: center center;
  background-size: cover;
  box-sizing: border-box;
  opacity: 0.7;
  margin: 5px 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  left: 0;
  border-radius: 3px;
  cursor: pointer;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-repeat: no-repeat;
}
.gallery .thumbnails .slider {
  position: absolute;
  display: block;
  width: 5px;
  height: calc(60px + 10px);
  z-index: 2;
  margin: 0;
  left: 0;
  -webkit-transition: all 0.33s cubic-bezier(0.3, 0, 0.33, 1);
  transition: all 0.33s cubic-bezier(0.3, 0, 0.33, 1);
}
.gallery .thumbnails .slider .indicator {
  width: 100%;
  height: 30px;
  max-height: calc(100% - 10px);
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background: #428BFF;
  border-radius: 1px;
}
.gallery input#fullscreen:checked ~ .wrap figure {
  position: fixed;
  z-index: 10;
  height: 100vh;
  width: 100vw;
  padding: 0;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) !important;
          transform: translate(-50%, -50%) !important;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}
.gallery input#fullscreen:checked ~ .wrap figure label {
  cursor: zoom-out;
}
.gallery input#fullscreen:checked ~ .wrap figure label img {
  -webkit-animation: shadow 0.2s;
          animation: shadow 0.2s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-direction: forwards;
          animation-direction: forwards;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  border-radius: 0;
}
.gallery input#image1:checked ~ .wrap figure {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.gallery input#image1:checked ~ .wrap figure:not(:nth-of-type(1)) {
  opacity: 0;
}
.gallery input#image1:checked ~ .thumbnails .slider {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.gallery input#image1:checked ~ .thumbnails .thumb:nth-of-type(1) {
  opacity: 1;
  cursor: default;
}
.gallery input#image2:checked ~ .wrap figure {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.gallery input#image2:checked ~ .wrap figure:not(:nth-of-type(2)) {
  opacity: 0;
}
.gallery input#image2:checked ~ .thumbnails .slider {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.gallery input#image2:checked ~ .thumbnails .thumb:nth-of-type(2) {
  opacity: 1;
  cursor: default;
}
.gallery input#image3:checked ~ .wrap figure {
  -webkit-transform: translateX(-200%);
          transform: translateX(-200%);
}
.gallery input#image3:checked ~ .wrap figure:not(:nth-of-type(3)) {
  opacity: 0;
}
.gallery input#image3:checked ~ .thumbnails .slider {
  -webkit-transform: translateY(200%);
          transform: translateY(200%);
}
.gallery input#image3:checked ~ .thumbnails .thumb:nth-of-type(3) {
  opacity: 1;
  cursor: default;
}
.gallery input#image4:checked ~ .wrap figure {
  -webkit-transform: translateX(-300%);
          transform: translateX(-300%);
}
.gallery input#image4:checked ~ .wrap figure:not(:nth-of-type(4)) {
  opacity: 0;
}
.gallery input#image4:checked ~ .thumbnails .slider {
  -webkit-transform: translateY(300%);
          transform: translateY(300%);
}
.gallery input#image4:checked ~ .thumbnails .thumb:nth-of-type(4) {
  opacity: 1;
  cursor: default;
}

@-webkit-keyframes full {
  from {
    -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
  }
  to {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
  }
}

@keyframes full {
  from {
    -webkit-transform: translate(-50%, -50%) scale(0.8);
            transform: translate(-50%, -50%) scale(0.8);
  }
  to {
    -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
  }
}
@-webkit-keyframes shadow {
  from {
    box-shadow: 0 0 0 100vmin rgba(24, 33, 45, 0), 0 0 10vmin rgba(13, 21, 31, 0);
  }
  to {
    box-shadow: 0 0 0 100vmin rgba(24, 33, 45, 0.6), 0 0 10vmin rgba(13, 21, 31, 0.6);
  }
}
@keyframes shadow {
  from {
    box-shadow: 0 0 0 100vmin rgba(24, 33, 45, 0), 0 0 10vmin rgba(13, 21, 31, 0);
  }
  to {
    box-shadow: 0 0 0 100vmin rgba(24, 33, 45, 0.6), 0 0 10vmin rgba(13, 21, 31, 0.6);
  }
}

 
@font-face {
    font-family: myFirstFont;
    src: url(sanam.TTF);
}


.navbar3{
    font-family: myFirstFont;
    font-size: 20px;
}

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
</style>
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
      <div id="navbar3" class="navbar3 navbar-collapse collapse">
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
      
    </div>
  
  </nav>
</div>
</div>

</div>

  <!--gallary-->
<div class="container">
  <div class="row ">
  <div class="col-md-8">
                   
                <section class="gallery">
                  <div class="carousel">
                    
                    <input type="radio" id="image1" name="gallery-control" checked>
                    <input type="radio" id="image2" name="gallery-control">
                    <input type="radio" id="image3" name="gallery-control">
                    <input type="radio" id="image4" name="gallery-control">
                    
                    
                    <input type="checkbox" id="fullscreen" name="gallery-fullscreen-control"/>
                    
                    <div class="wrap">
                      
                      <figure>
                        <label for="fullscreen">
                          <img src="/images/kurti.jpg" alt="image1"/>
                        </label>
                      </figure>
                      
                      <figure>
                        <label for="fullscreen">
                          <img src="/images/banner3.jpg" alt="image2"/>
                        </label>
                      </figure>

                      <figure>
                        <label for="fullscreen">
                          <img src="/images/banner2.jpg" alt="image3" />
                        </label>
                      </figure>

                      <figure>
                        <label for="fullscreen">
                          <img src="/images/banner1.jpg" alt="image4"/>
                        </label>
                      </figure>
                    </div>
                    
                    <div class="thumbnails">
                      
                      <div class="slider"><div class="indicator"></div></div>
                      
                      <label for="image1" class="thumb" style="background-image: url('/images/kurti.jpg')"></label>
                      
                      <label for="image2" class="thumb" style="background-image: url('/images/banner3.jpg')"></label>
                      
                      <label for="image3" class="thumb" style="background-image: url('/images/banner2.jpg')"></label>
                        
                      <label for="image4" class="thumb" style="background-image: url('/images/banner1.jpg')"></label>
                    </div>
                  </div>
                </section>
                </div>
          <div class="col-md-4">
                   <p style=" font-family: myFirstFont;
    font-size: 30px;">Puja Special Saree-yellow-Red</p>
                   <h3><b><p> Rs 2000</p></b></h3>
                   Color 

                   <button type="button" class="btn btn-default btn-circle"></button>
<button type="button" class="btn btn-primary btn-circle"></button>
<button type="button" class="btn btn-success btn-circle"></button>
<button type="button" class="btn btn-info btn-circle"></button>
<button type="button" class="btn btn-warning btn-circle"></button>
<button type="button" class="btn btn-danger btn-circle"></button>
<br><br>
<p>Select size:</p>

  
  <div class="row">
        <div class="col-lg-12">
          <p>
            <a href="#" class="btn btn-sq-xs btn-primary">XXL
              <br/>
            </a>
             <a href="#" class="btn btn-sq-xs btn-primary">M
              <br/>
            </a>
             <a href="#" class="btn btn-sq-xs btn-primary">S
              <br/>
            </a>
             <a href="#" class="btn btn-sq-xs btn-primary">XL
              <br/>
            </a>
            <a href="#" class="btn btn-sq-xs btn-primary">L
              <br/>
            </a>            
          </p>
        </div>
  </div>

<br>
<p>Select Quantity</p>
  <input type="number" step="1" value="1" class="form-control" style="width:100px">
  <br>
  <br>
  <button type="button" class="btn btn-lg btn-primary">Add To Wish List</button>
<button type="button" class="btn btn-secondary btn-lg">Add to Cart</button>
</div>
 </div>
     

<div class="row">

     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="
    margin-top: 20px;
">
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
  <dt>Description</dt>
  <dd>Knitted Cotton Solid Top, Has A Round Neck And 3/4 Sleeves, Has Zip Detailing On The Sleeves

</dd>
  <dt>Fabric</dt>
  <dd>Single Jersey
</dd>

</dd>
  <dt>Washcare
</dt>
  <dd>Machine wash with mild detergent, do not bleach, tumble dry low, wash dark colours separately, warm iron, dry in shade out

</dd>


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
        You can place a request for exchange or return any time within 30 days from the date you receive your shipment. We won't be able to process returns in case the request for returns is placed after 30 days from the date you receive your shipment. We recommend that if you need an alternate size or replacement, do get in touch with us at the earliest as your desired size may get sold out.

Please note : All the products requested for returns must be unworn, unwashed products and should have the price tags and merchandise tags attached. Items that do not match these criteria are non-returnable and will be denied. We do not accept returns for accessories- jewelry,stockings and pantyhose for hygienic reasons. Bags and footwear can be exchanged.
      </div>
    </div>
  </div>
 
        </div>
     </div>
  </div>  
<!--done-->

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
