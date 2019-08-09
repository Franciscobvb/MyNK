<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="Mynikken" content="">
    <meta name="Nikken" content="">

    <title>My Nikken</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

   
    <!-- Stylesheet -->
    <link href="{{ asset('css/gallery-materialize.min.css')}}" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   

    <link href="{{ asset('css/estNav.css')}}" rel="stylesheet"> 

  </head>

  <body>

    <!-- Navbar and Header -->
   <nav class="nav-extended nav-full-header nav nav-opacity" style="">
      <div class="nav-background  img" style="">
        <img class="k" src="{{asset('img/2.png')}}" alt="cityscape" >
        <img class="active"src="{{asset('img/6.png')}}" alt="cityscape">
        <img src="{{asset('img/8.png')}}" alt="cityscape">
        <img src="{{asset('img/1.png')}}" alt="cityscape">
        <img src="{{asset('img/3.png')}}" alt="cityscape">
      </div>
      <div class="nav-wrapper container" >
        <img src="{{asset('img/logo.png')}}"  class="logo" alt="cityscape" style="">
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down ul-header"  style="">

          <!--DATOS DEL USUARIO -->
          
          <li class="li_perfil" style=""><a class='dropdown-trigger' href='#'  data-target='featur-dropdown' style=""> <img class="img_perfil" src="{{asset('img/face.jpg')}}" style=""><i class="material-icons right">arrow_drop_down</i></a></li>
           <ul id='featur-dropdown' class='dropdown-content'>
            <li> <a> Arturo Soltero (5000)</a></li>
            <li> <a> Rango Diamante </a></li>
            <li> <a> PATROCINADOR ANTOCORA, S.A. DE C.V. </a></li>
           </ul> 
           <li class="li_options_header" style=""><a href="#">PV: 150</a></li>
            <li class="li_options_header"><a href="#">PGV: 4,589</a></li>
            <li class="li_options_header"><a href="#">OV: 125,789</a></li> 
        <!------------------------------------------------------------------------------  --> 

          <li class="li_options_header"><a class='dropdown-trigger' href='#' data-target='feature-dropdown'>Select your languague<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="index-dark.html" class="li_options_header">My account</a></li>
          <li><a href="blog.html" class="li_options_header">Log off</a></li>
        </ul>
        <!-- Dropdown Structure -->
          <ul id='feature-dropdown' class='dropdown-content'>
          <li><a href="full-header.html">English</a></li>
          <li><a href="horizontal.html">French</a></li>
          <li><a href="no-image.html">Spanish</a></li>
        </ul>

      </div>
      <div class="nav-header valign-wrapper"  >
        <div class="carousel carousel-slider center" data-indicators="true" >
          <div class="carousel-item white-text" href="#one!">
            <div class="container valign-wrapper"  >
              <h1>BODY</h1>
              <div class="tagline">Portfolio</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#two!">
            <div class="container valign-wrapper">
              <h1>SOCIETY</h1>
              <div class="tagline">Dedicated to you</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#three!">
            <div class="container valign-wrapper">
              <h1>MIND</h1>
              <div class="tagline">together</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#four!">
            <div class="container valign-wrapper">
              <h1>FINANCE</h1>
              <div class="tagline">together</div>
            </div>
          </div>
          <div class="carousel-item white-text" href="#five!">
            <div class="container valign-wrapper">
              <h1>FAMILY</h1>
              <div class="tagline">together</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper menu-cat" style="">
        <div class="categories-container pin-top">
          <ul class="categories container">
            <li class="active"><a href="#all" class="a-ho">All</a></li>
            <li>  <a href="#communication" class="a-ho"><img class="icon-menu" src="{{asset('img/com.png')}}" style="">Communication</a></li>
            <li> <a href="#events" class="a-ho"><img class="icon-menu" src="{{asset('img/events.png')}}" style="">Events</a></li>
            <li><a href="#tools" class="a-ho"><img class="icon-menu" src="{{asset('img/tools.png')}}" style="">Business tools</a></li>
            <li><a href="#signup" class="a-ho"><img class="icon-menu" src="{{asset('img/singup.png')}}" style="">Sign up</a></li>
            <li><a href="#order" class="a-ho"><img class="icon-menu" src="{{asset('img/order.png')}}" style="">Order entry</a></li>
            <li><a href="#global" class="a-ho"><img class="icon-menu" src="{{asset('img/global.png')}}" style="">Global requirements</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <ul class="sidenav" id="nav-mobile">
      <li class="active"><a href="full-header.html"><i class="material-icons">home</i>Home</a></li>
      <li><a href="horizontal.html"><i class="material-icons">face</i>My account</a></li>
      <li><a href="no-image.html"><i class="material-icons">logout</i>Log off</a></li>
    </ul>

    

    <!-- Gallery -->
    <div id="portfolio" class="section white section-gallery" style="">
      <div class="container container-gallery" style=" " >
        <div class="gallery row gallery-est" style="">

          <!--News & Information Center-->

           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter communication">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/news.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>News & Information Center</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>News & Information Center</h3>
                </div>
                <h5>FALL BACK TO BASICS THIS SEPTEMBER</h5>
                <p>
                  “Fall Back to Basics” in September by taking advantage of this month’s incentive to sponsor new Consultants and advance in rank. The incentive period is from September 1 to September 30, 2018 and is open to all North American Nikken Consultants.
                </p>
                <br>
                <p>
                  Here’s what you need to do:<br>
                    • Personally achieve a minimum of 100 PPV this month.<br>
                    • Sponsor a new Consultant who achieves at least 500 PPV.*<br>
                    • The more PPV your new Consultant achieves during the signup month, the more NRPs you earn.
                </p>
                   <br>
                <p>
                   *If your new Consultant (sponsored in September) does at least 100 PPV in the month, then s/he is also eligible to participate in the incentive. To earn NRPs, the same rules that apply to you will apply to your new Consultant.
                </p>

                <p>
                    Here’s what you get:<br>
                    • If your new Consultant achieves 500 to 999 PPV, you will earn 75 NRP.<br>
                    • If your new Consultant achieves 1,000 to 1,999 PPV, you will earn 150 NRP.<br>
                    • If your new Consultant achieves 2,000 to 2,999 PPV, you will earn 250 NRP.<br>
                    • If your new Consultant achieves 3,000 or more PPV, you will earn 350 NRP.<br>
                </p>
                <br>
                <p>
                  For complete incentive rules, click here.
                </p>
                <br>
                <p>
                  31 August 2018
                </p>
                <hr>

                <h5>Water Pack Reminder to all Consultants </h5>
                <br>
                <p>
                  Effective September 1, 2018, all new Consultants who purchase or sell the Water Pack (Item 4406 or 4407) during their month of signup will receive free ground shipping in the 48 contiguous states and Canada. To qualify for free shipping, the Water Pack must be a stand-alone item and called in:
                </p>
                <br>
                <p>
                  800-669-8859 US toll free
                </p>
                <br>
                <p>
                  800-669-8890 CN toll free
                </p>
                <br>
                <p>
                  31 August 2018
                </p>
                <hr>

              </div>
            </div>
          </div>

          <!--Feedback-->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter communication">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/feedback.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>FeedBack</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Send Us Your Feedback</h3>
                </div>
                  <div class="container">
                      <div class="input-field col s12">
                        <select>
                          <option value="" disabled selected>Choose your option</option>
                          <option value="1">Website/Topic</option>
                          <option value="2">Nikken.com</option>
                          <option value="3">Mynikken.com</option>
                          <option value="4">Mynikken Genealogy Reports</option>
                          <option value="5">Mynikken Advanced Reports</option>
                          <option value="6">PWP</option>
                          <option value="7">Shopping Cart</option>
                          <option value="8">All</option>
                        </select>
                        <label>Select an option</label>
                      </div>
                      <br>
                      <br>
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea2" class="materialize-textarea" data-length="500"></textarea>
                          <label for="textarea2">Message</label>
                        </div>
                      </div>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Send Message
                        <i class="material-icons right">send</i>
                      </button>

                      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                      <script type="text/javascript">
                        $(document).ready(function() {
                          $('textarea#textarea2').characterCounter();
                        });
                      </script>

                  </div>
              </div>
            </div>
          </div>

          <!--Conference Calls and Recordings-->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter events">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/conference.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Conference Calls and Recordings</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Events Calendar</h3>
                </div>
                
              </div>
            </div>
          </div>



            <!--Conference Call Schedule -->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter events">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/conference_call.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Conference Call Schedule</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Conference Call Schedule</h3>
                </div>
                
              </div>
            </div>
          </div>


          <!--Incentives -->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter tools">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/incentives.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Incentives</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Incentives</h3>
                </div>
                <div class="container">
                  <img id="img-incentive" src="{{asset('img/incentives-int.png')}}" >
                </div>
              </div>
            </div>
          </div>


          <!--Video -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter tools">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/video.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Video Library</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Video Library</h3>
                </div>
                
              </div>
            </div>
          </div>          


          <!--Documents -->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter tools">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/document.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Document Library</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Document Library</h3>
                </div>
                 <ul class="collapsible">
                  <li class="active sombra">
                    <div class="collapsible-header sombra"><i class="material-icons">archive</i>Archives</div>
                    <div class="collapsible-body sombra"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">event_note</i>Brochures</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">business_center</i>Business Forms</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Incentives & Recognition</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">note</i>Manuals & Instructions</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">wallpaper</i>Media Kit & Advertisement</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">note_add</i>Police & Procedures</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">business</i>Presentations: Business</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">present_to_all</i>Presentations: Product</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>             
                  <li>
                    <div class="collapsible-header"><i class="material-icons">list</i>Price Lists</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">perm_device_information</i>Product Information</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>          


          <!--Image -->
           <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter tools">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/image.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Image Library</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Image Library</h3>
                </div>
                
              </div>
            </div>
          </div>        


          <!--My Bonus -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter tools">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/bonus.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>My Bonus</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>My Bonus</h3>
                </div>
                
              </div>
            </div>
          </div>    


          <!--Sig Up -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter signup">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/add.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Consultant</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Consultant</h3>
                </div>
              </div>
            </div>
          </div>


          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter signup">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/add.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Customer</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Customer</h3>
                </div>
              </div>
            </div>
          </div>


          <!--shop -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter order">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/shop.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Shop</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Shop</h3>
                </div>
                
              </div>
            </div>
          </div> 



          <!--Autoship -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter order">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/autoship.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Autoship</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Autoship</h3>
                </div>
                
              </div>
            </div>
          </div> 


          <!--Order Management -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter order">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/order2.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Order Management</span> 
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Order Management</h3>
                </div>
                  <table id="myTable" class="highlight">
                    <thead>
                      <tr>
                          <th>Invoice</th>
                          <th>Ship To</th>
                          <th>Ship Date</th>
                          <th>Order Date</th>
                          <th>PV Period</th>
                          <th>Volumen</th>
                          <th>Amount</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>18487134</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/24</td>
                        <td>2019/02/24</td>
                        <td>148.5</td>
                        <td>148.34</td>
                        <td>254.27</td>
                      </tr>
                      <tr>
                        <td><a>18487132</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/23</td>
                        <td>2019/02/23</td>
                        <td>148.5</td>
                        <td>148.34</td>
                        <td>254.27</td>
                      </tr>
                      <tr>
                        <td><a>18487133</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/25</td>
                        <td>2019/02/25</td>
                        <td>148.5</td>
                        <td>148.34</td>
                        <td>254.27</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div> 

          

          <!--Global -->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter global">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('img/global.png')}}" alt="placeholder" crossorigin="anonymous">
              </a>
              <div class="gallery-header">
                <span>Global requirements</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Global requirements</h3>
                  <span class="price">$14.99</span>
                </div>

                <p class="description">
                    Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
                    Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
        </div>
          <div class="table-space" style=""></div>
          <!--Tables-->
        <!--container -->
         <div class="container table-tabs" style="">
            <center>
               <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3"><a class="active color" href="#test-swipe-1" style="">Your Status</a></li>
                <li class="tab col s3"><a  href="#test-swipe-2" class="color">My Upline</a></li>
                <li class="tab col s3"><a href="#test-swipe-3" class="color">Top 5 of my Downline</a></li>
                <li class="tab col s3"><a href="#test-swipe-4" class="color">New Signups</a></li>
              </ul>

              <!--Status-->
              <div id="test-swipe-1" class="col s12">
                <h5>Rate your payment range</h5>
                <table class="responsive-table">
                    <thead>
                      <tr>
                          <th>Invoice</th>
                          <th>Volumen</th>
                          <th>Amount</th>
                          <th>Amount</th>
                          <th>Amount</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>18487134</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/24</td>
                        <td>2019/02/24</td>
                        <td>2019/02/25</td>
                       
                      </tr>
                      <tr>
                        <td><a>18487132</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/23</td>
                        <td>2019/02/23</td>
                        <td>2019/02/25</td>
                        
                      </tr>
                      <tr>
                        <td><a>18487133</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/25</td>
                        <td>2019/02/25</td>
                        <td>2019/02/25</td>
                        
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <br>
                <h5>Rate next rank</h5>
                <table class="responsive-table">
                    <thead>
                      <tr>
                          <th>Invoice</th>
                          <th>Volumen</th>
                          <th>Amount</th>
                          <th>Amount</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>18487134</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/24</td>
                        <td>2019/02/24</td>
                       
                      </tr>
                      <tr>
                        <td><a>18487132</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/23</td>
                        <td>2019/02/23</td>
                        
                      </tr>
                      <tr>
                        <td><a>18487133</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/25</td>
                        <td>2019/02/25</td>
                        
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!--Finish Status-->
              <div id="test-swipe-2" class="col s12">
                <h5>Rate next rank</h5>
                <table class="responsive-table">
                    <thead>
                      <tr>
                          <th>Invoice</th>
                          <th>Volumen</th>
                          <th>Amount</th>
                          <th>Amount</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>18487134</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/24</td>
                        <td>2019/02/24</td>
                       
                      </tr>
                      <tr>
                        <td><a>18487132</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/23</td>
                        <td>2019/02/23</td>
                        
                      </tr>
                      <tr>
                        <td><a>18487133</a></td>
                        <td>Pierrette Petit Marketing</td>
                        <td>2019/02/25</td>
                        <td>2019/02/25</td>
                        
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div id="test-swipe-3" class="col s12">Test 3</div>
              <div id="test-swipe-4" class="col s12">Test 3</div>
            </center>
          </div> <!-- /.container -->
      </div><!-- /.container -->
    </div>
     
    <footer class="page-footer black footer-content"  style="">
      <div class="container">
        <div class="row" style="">
          <div class="col s8 m3" >
            
        <img src="{{asset('img/logo.png')}}" style="" id="logo-footer" alt="cityscape">
            <p>Nikken Inc.</p>
          </div>
          <div class="col s6 m3" style=" ">
            <h6>Company</h6>
            <ul>
              <li><a href="#!" class="footer-color">Contac Us</a></li>
              <li><a href="#!" class="footer-color">Shop</a></li>
              <li><a href="#!" class="footer-color">Countries</a></li>
            </ul>
          </div>
          <div class="col s6 m3" >
            <h6>Support</h6>
            <ul>
              <li><a href="#!" class="footer-color">Return Policy</a></li>
              <li><a href="#!" class="footer-color">Privacy Policy</a></li>
              <li><a href="#!" class="footer-color">Terms of Use</a></li>
            </ul>
          </div>
          <div class="col s6 m3" id="footer-connec" style="">
            <h6>Connect</h6>
            <ul style="" id="ul-foother">
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/tweter.png')}}" style="">Twitter</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/facebook.png')}}" style="">Facebook</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/youtube.png')}}" style="">Youtube</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/wordpress.png')}}" style="">Nikken Wellness</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/color-thief.min.js') }}"></script>
    <script src="{{ asset('js/galleryExpand.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>

  </body>
</html>
