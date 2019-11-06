<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Log In - Admin</title>

    <!-- Materialize-->
    <link href="{{asset('css/admin-materialize.min.css')}}" rel="stylesheet">
  </head>
  <body>
   
  
<main>

<div class="container" style="">
  <div class="row">
  
    <div class="col s8 offset-s2">
      
      <div class="card card-login">
        <div class="card-login-splash">
           
         

          <img src="{{asset('img/login2.png')}}" alt="" style="height: 310px !important;">
        </div>
        <div class="card-content">
          <span class="card-title">Log In</span>
          <form action="welcome" method="POST">
            {{ csrf_field() }}
            <div class="input-field">
              <input id="username" type="text" name="username" class="validate">
              <label for="username">ID</label>
            </div>
          <!--  <div class="input-field">
              <input id="password" type="text" name="password" class="validate">
              <label for="password">Period</label>
            </div>-->

            <a href="#!">Forgot Password?</a>

            <br><br>
            <div>
              <input class="btn right" type="submit" value="Log In">
           
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

</div>

    </main><footer class="page-footer" style="background-color: black;">
  <div class="container">
    <div class="row">
      <div class="col s6 m3">
          <img alt="Materialize" src="{{asset('img/logo.png')}}" style="height: 120; width: 200px;"  class="theme-logo">
        <p>Nikken Inc.</p>
      </div>
      <div class="col s6 m3">
        <h5>About</h5>
        <ul>
          <li><a href="#!">Blog</a></li>
          <li><a href="#!">Pricing</a></li>
          <li><a href="#!">Docs</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Connect</h5>
        <ul>
          <li><a href="#!">Community</a></li>
          <li><a href="#!">Subscribe</a></li>
          <li><a href="#!">Email</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Contact</h5>
        <ul>
          <li><a href="#!">Twitter</a></li>
          <li><a href="#!">Facebook</a></li>
          <li><a href="#!">Github</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!-- Scripts -->
<script src="{{asset('js/materialize.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>


  </body>
</html>