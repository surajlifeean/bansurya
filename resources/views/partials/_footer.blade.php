
    <footer class="footer-distributed" >

<!-- @if(Session::has('sent'))
  
  <div class="alert alert-success" role="alert" style="width:400px; margin-left:10%">

    <strong>Done:</strong>{{Session::get('sent')}}
  </div>
  
@endif
 -->

 <div id="forfocus"></div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


       <div class="footer-left">

        <h3>Ban<span>suriyaa</span></h3>

        <p class="footer-links">
          <a href="{{route('home')}}">Home</a>
          ·
          <a href="{{route('policy')}}">Privacy Policy</a>
          ·
          <!-- <a href="#">Pricing</a>
           -->
          <a href="{{route('aboutus')}}">About Us</a>
          ·
          <!-- <a href="#">Faq</a>
          ·
          <a href="#">Contact</a> -->
        </p>

        <p class="footer-company-name">Bansuriyaa &copy; 2017. Powered By AIDA Labs</p>

        <div class="footer-icons">

          <a href="https://www.facebook.com/bansuriyaa.saree/?ref=br_rs" target=”_blank”><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>

        </div>

      </div>

      <div class="footer-right">

        <p>Contact Us</p>
    {!!Form::open(array('route'=>'contactus'))!!}

          <input type="text" name="email" placeholder="Email" id="email" />

          <textarea name="message" placeholder="Message" id="message"></textarea>
          <button class="submit">Send</button>
    {!!Form::close()!!}


      </div>

    </footer>
<script type="text/javascript">

// function getfocus(){
//       document.getElementById('forfocus').focus();

//   }


</script>