<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="Mynikken" content="">
    <meta name="Nikken" content="">

    <title>My Nikken</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Stylesheet -->
    <link href="{{ asset('css/gallery-materialize.min.css')}}" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
   <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/estNav.css')}}" rel="stylesheet"> 

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>

    <style type="text/css">
      .desaparece{
        display: none;
      }

      .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url({{ asset('img/loader.gif')}}) 50% 50% no-repeat rgb(249,249,249);
          opacity: .8;
      }
      #obj1{
        display:none;
      }
    </style>

   
  </head>


  <body>
    <div class="loader"></div>

      <script type="text/javascript">
      
    //      function loadFinish(){

//               document.getElementById("all").click();

  //        }

      </script>

    <!-- Navbar and Header -->
   <nav style="background-color: #0aa6b6; margin-bottom: 0px !important; " class="navbar-fixed">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="{{asset('img/logo.png')}}"  class=""  ></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <!--datos del usuario-->
        <li class="li_perfil " ><a class='dropdown-trigger' href='#'  data-target='featur-dropdown' > <img class="img_perfil" src="{{asset('img/face.jpg')}}" ><i class="material-icons right">arrow_drop_down</i></a></li>
        <ul id='featur-dropdown' class='dropdown-content'>
            <li> <a> Arturo Soltero (5000)</a></li>
            <li> <a> Rango Diamante </a></li>
            <li> <a> PATROCINADOR ANTOCORA, S.A. DE C.V. </a></li>
            <li><a href="#pwp" class="modal-trigger">{{ __('PWP Manager') }}PWP Manager</a></li>
            <li><a href="{{ action('Controller@login') }}" class="">{{ __('Log off') }} </a></li>
        </ul>
        <li class="" ><a href="#"> {{ __('PPV') }}: 150</a></li>
        <li class="" ><a href="#" style="position: relative; top: -10px;  height: 10px; ">{{ __('PGPV') }}: 4,589</a><a href="#" style="position: relative; top: 0px;  height: 10px;">{{ __('OPV') }}: 125,789</a></li>
        <li class=""></li>
        <li class=""><a href="#" style="position: relative; top: -10px;  height: 10px;">{{ __('OPV-OPL') }}: 119,520</a><a href="#" style="position: relative; top: 0px;  height: 10px;">{{ __('OPV-OPL&SL') }}: 4,801</a></li> 
        <li class=""></li>
        <!------------------------------------------------------>
        <li class=""><a class='dropdown-trigger' href='#' data-target='feature-dropdown'>{{ __('Select your language') }}<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="#contact" class="modal-trigger">Contact Nikken</a></li>
        <ul id='feature-dropdown' class='dropdown-content'>

           <li><a  class="linken" value="en">{{__('English')}}</a></li>
          

            <li><a  class="lang/es" href="lang/es" value="fr">{{__('French')}}</a></li>
          

             <li>
              <a  class="welcome/es" href="welcome/es" value="fr">{{__('Spanish')}}</a>
             </li>
          
        </ul>
      </ul>
    </div>
  </nav>
 <!------- Modal Renewal process ------>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <form action="charge" method="post" id="renewalForm" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
          <div class="title-wrapper">
              <h6>Thank you for choosing to renew your Nikken Distributionship</h6>
              <hr>
          </div>
          <div class="row">
              <div class="col l1 m4 s4">
                  <img src="https://www.mynikken.com/modules/my-account-payment/assets/images/icon-renewal.jpg" width="100%">
              </div>
              <div class="col l11 m8 s8">
                  <p class="description">
                      Nikken Distributorship Yearly Renewal <span class="right">$ 79.00</span>
                  </p>
              </div>
          </div>
          <div class="title-wrapper">
              <h6>Payment</h6>
              <hr>
          </div>
          <div class="row">
              <div class="input-field col s6">
                  <div class="row">
                      <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="billingContact" name="billingContact" type="text" value="" class="validate" data-worldpay="name">
                          <label for="billingContact">Billing Contact</label>
                          <hr>
                      </div>
                      <div class="input-field col s12">
                          <i class="material-icons prefix">location_on</i>
                          <input id="street" name="street" type="text" class="validate" required>
                          <label for="street">Street</label>
                      </div>
                      <div class="input-field col s12">
                          <i class="material-icons prefix">location_city</i>
                          <input id="city" name="city" type="text" class="validate" required>
                          <label for="city">City</label>
                      </div>
                      <div class="input-field col s12">
                          <i class="material-icons prefix">domain</i>
                          <input id="state" name="state" type="text" class="validate" required>
                          <label for="state">State</label>
                      </div>
                      <div class="input-field col s12">
                          <i class="material-icons prefix">directions</i>
                          <input id="zipCode" name="zipCode" type="text" class="validate" required>
                          <label for="zipCode">Zip Code</label>
                      </div>
                  </div>
              </div>
              <div class="input-field col s6">
                  <div class="row">
                      <div class="input-field col s12">
                          <p>Card Information</p>
                          <div class="ccicons">
                              <div class="icon-visa"></div>
                              <div class="icon-amex"></div>
                              <div class="icon-disc"></div>
                              <div class="icon-mast"></div>
                          </div>
                      </div>
                      <div class="input-field col s12">
                          <label>(Example: 4000300020001000, no spaces or dashes)</label>
                          <br>
                      </div>
                      <div class="input-field col s12">
                          <i class="material-icons prefix">filter_1</i>
                          <input id="cardNumber" name="cardNumber" type="text" class="validate" maxlength="16" minlength="16" onblur="validateLengtCard()" data-worldpay="number">
                          <label for="cardNumber">Card Number</label>
                      </div>
                      <div class="input-field col s12">
                          <div class="input-field col s10">
                              <i class="material-icons prefix">fiber_pin</i>
                              <input id="securityCode" name="securityCode" type="text" class="validate" maxlength="3" minlength="3" onblur="validateLengtSecureCode()" data-worldpay="cvc">
                              <label for="securityCode">Security Code</label>
                          </div>
                          <div class="input-field col s2">
                              <i class="material-icons prefix tooltipped" data-position="left" data-tooltip="the three numbers behind the card">info_outline</i>
                          </div>
                      </div>
                      <div class="input-field col s12">
                          <div class="input-field col s6">
                              <i class="material-icons prefix">event</i>
                              <input id="expireMonth" name="expireMonth" class="validate" type="text" maxlength="2" minlength="2" data-worldpay="exp-month">
                              <label for="expireMonth">Expire Month</label>
                          </div>
                          <div class="input-field col s6">
                              <i class="material-icons prefix">event_available</i>
                              <input id="expireYear" name="expireYear" class="validate" type="text" maxlength="4" minlength="4" data-worldpay="exp-year">
                              <label for="expireYear">Expire Year</label>
                          </div>
                          <input id="associateid" name="associateid"  type="hidden" value="{{$ids}}" readonly>
                      </div>
                  </div>
              </div>
          </div>
          <div class="title-wrapper">
              <p>
                  <label>
                      <input type="checkbox" name="termsPoliciesProcedures" id="termsPoliciesProcedures"/>
                      <span>I agree to the current terms of <a href="http://library.nikken.com/document/?n=membership-agreement&lng=en" target="_new">the Consultant Agreement</a> and <a href="http://library.nikken.com/document/?n=policies-and-procedures-2016&lng=en" target="_new"> Policies and Procedures</a>. </span>
                  </label>
              </p>
              <hr>
          </div>
          <div class="title-wrapper center">
              <button class="btn waves-effect waves-light green" id="continuePayment" name="continuePayment" type="submit" disabled name="action">Continue
                  <i class="material-icons right">check</i>
              </button>
              <hr>
          </div>
          <div class="title-wrapper center">
              <h6>Any Questions?</h6>
              <i class="material-icons">local_phone</i>&nbsp; (US) 800-669-8859 x4 <br>
              <i class="material-icons">local_phone</i>&nbsp; (CN) 800-669-8890 x4 
          </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green red btn-flat ">Cancel</a>
    </div>
  </div>
  <!------- Modal Renewal process end ------>
 <!-- Modal Structure  Contact-->
  <div id="contact" class="modal">
    <div class="modal-content">
      <a href="#!" class="modal-close  waves-green btn-flat right">X</a>
      <h4>Contact Nikken</h4>
      <p>Because knowledge is power, Nikken wants you to have access to the most current information available at all times</p>

      <div class="row">
        <div class="grid-example col s7 ">
          <label>TO UPDATE YOUR CONTACT INFORMATION</label>
          <p>E-mail - Visit myNikken.com and access your personal information under "My Account" to verify or update your e-mail address.</p>
          <p><b>Address</b>- Have you moved? Submit your new address and telephone number to our Ordering Department via Mail (18301 Von Karman Ave., Suite 120 Irvine, CA 92612). Update requests must be signed by all Consultants listed under the distributorship.</p>
        </div>

        <div class="grid-example col s4 ">
          <img src="https://www.mynikken.com/views/global/help-center/images/contact.jpg">
        </div>
        <div class="grid-example col s7 " style="position: relative; top: -200px;">
          <label>HOW NIKKEN COMMUNICATES WITH YOU:</label>
          <ul>
             <li> <p><b>myNikken.com</b>- The latest in wellness news, product information, current promotions, helpful business-building tips and more are just a click away.</p></li>
             <li> <p><b>Living Well eNews</b>- Special offers, product news, training information and special event notifications are delivered via e-mail directly to your inbox.</p></li>
             <li>  <p><b>Flyers</b>- Your orders and bonus checks may include informative flyers with product announcements, promotions and other important news.</p></li>
             <li>  <p><b>Conference Calls</b> - Get inside tips from top Nikken leaders. Refer to the Conference Calls page under "Events" at myNikken.com for details on how to participate.</p></li>
          </ul>
        </div>
        <div class="grid-example col s12" style="position: relative; top: -200px;" >
          <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">contact_phone</i>Contact Phone</div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="grid-example col s12">
                      <table class="">
                        <tr >
                        <td ><b>US English orders:</b> Monday-Friday, 7 a.m.-5 p.m.</td>
                        <td >800-669-8859 option 2.</td>
                        </tr>
                        <tr>
                        <td><b>CN English orders:</b> Monday-Friday, 7 a.m.-5 p.m.</td>
                        <td>800-669-8890 option 2</td>
                        </tr>
                        <tr>
                        <td><b>Spanish orders:</b> Monday-Friday, 7 a.m.-4 p.m.</td>
                        <td>800-669-8897</td>
                        </tr>
                        <tr>
                        <td><b>International relations:</b> Monday-Friday, 8 a.m.-5 p.m.</td>
                        <td>800-669-8896</td>
                        </tr>
                        <tr>
                        <td><b>Internet support:</b> Monday-Friday, 7 a.m.-4 p.m.</td>
                        <td>888-NIKKEN3</td>
                        </tr>
                        <tr>
                            <tr>      
                                <td rowspan="2">
                                 <b> Training info/registration:</b> Monday-Friday, 7 a.m.-4 p.m
                                </td>
                                <td>(US) 800-669-8859 x2</td>
                            </tr>
                            <tr>
                                <td>(CN) 800-669-8890 x2</td>
                            </tr>
                        </tr>
                        <tr>
                            <tr>
                              <td rowspan="2"><b>Consultant Services (billing, shipping, Autoship,
                              package tracing):</b> Monday-Friday, 7 a.m.-4 p.m.</td>
                              <td>(US) 800-669-8859 x4</td>
                            </tr>
                            
                              <tr>
                                <td>(CN) 800-669-8890 x4</td>
                              </tr>
                        </tr>
                        <tr>
                          <td><b>myNikken:</b> 24 hours, seven days a week at:</td>
                          <td>myNikken.com</td>
                        </tr>

                      </table>
                    </div>
                    <div class="grid-example col s6">
                      
                    </div>
                  </div>
                </div>
              </li>
              <li class="active">
                <div class="collapsible-header"><i class="material-icons">contact_mail</i>Contact Mail</div>
                <div class="collapsible-body">
                  <table>
                        <tr>
                          <td><b>Events</b></td>
                          <td>events@nikken.com</td>
                        </tr>
                        <tr>
                          <td><b>Distributor Services/Autoship</b></td>
                          <td>consultantservices@nikken.com</td>
                        </tr>
                        <tr>
                          <td><b>Internet Support</b></td>
                          <td>internetsupport@nikken.com</td>
                        </tr>
                        <tr>
                          <td><b>Spanish Division</b></td>
                          <td>spanish@nikken.com</td>
                        </tr>
                        <tr>
                          <td><b>Testimonials</b></td>
                          <td>testimonials@nikken.com</td>
                        </tr>
                    </table>
                </div>
              </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      
    </div>
  </div>

 <!-- Modal Structure PWP-->
  <div id="pwp" class="modal modal-pwp" >
    <div class="modal-content">
          <div class="col s12"><h4>PWP Manager</h4></div>
          <form id="save_pwp_link" action="test.php">
            <div class="row">
               <div class="input-field col s3.5 ">
                    <input placeholder="herbrapp" id="pwp_lin" class="pwp_link" autocomplete="off" type="text" class="validate">
                    <label for="first_name">PWP Name</label>
              </div>
              <div class="input-field col s7">
                    <a href="">https://www.nikken.com/na/herbrapp</a>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s2">
                    <button class="btn  waves-light" id="save_pwp_link" type="submit" name="save_pwp_link">
                      Save<i class="material-icons right">save</i>
                    </button>
              </div>
            </div>
          </form>
          <div class="row">

             <div class=" col s12">
              <div class="row">
                <h6>Accept Customer Referrals</h6>
                  <label>Customers reserve the right to be re-assigned to a different sponsor.</label>
              </div>
             </div>

             <div class="input-field col s1">
                  <p>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                    </label>
                  </p>
            </div>
            <div class="col s11">
                <label>         
                  Nikken provides leads to best practicing Nikken Consultants. To receive leads you must first opt in above. To qualify for customer leads, a consultant must have reached the Executive rank and accumulated at least 500 PPV in the previous commission month. Leads should be contacted within 48 hours. If you are unable to do so please opt out of the accepting referrals. In order to serve your customers, you need to speak their language. Enter your first name and last name in the field so that people looking for you will be sent directly to your PWP. If you promote your business with a Business name, you can enter it also.
                  The information below is provided for website visitors looking for your PWP. Enter your First Name and Last Name in the fields provided so people looking for you will be sent directly to your PWP. If you promote your business with a Business Name, you can enter it also.
                  You are responsible for all customer transactions. This includes but is not limited to any product sales, returns and chargebacks that may occur. The Company is not responsible for any fraudulent transactions.
                </label>
            </div>
          </div>
           <div class="row">
              <div class="input-field col s12 l12">
                  <hr>
              </div>
              <div class="input-field col s12 l12">
                <p>Info with switch enabled will show on your PWP</p>
              </div>

              <div class="row">
                <div class="input-field col s3 m3 l1">
                  <div class="switch">
                    <label>
                      Name
                    </label>
                  </div>
                </div>
                <div class="input-field col s3 m3 l2">
                  <div class="switch">
                    <label>
                      <input type="checkbox">
                      <span class="lever"></span>
                    </label>
                  </div>
                </div>
                <div class="input-field col s6 m6 l9" style="padding-left: 15px !important;">
                  <div class="switch">
                    <label>
                      RAPP HERB MARTIN
                    </label>
                  </div>
                </div>
              </div>
            </div>

           <div class="row">
              <div class="input-field col s3 l1">
                <div class="switch">
                  <label>
                    Company Name
                  </label>
                </div>
              </div>
              <div class="input-field col s3 l2">
                <div class="switch">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
              <div class="input-field col s6 l9" style="padding-left: 15px !important;">
                <div class="switch">
                  <label>
                    Company Name
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s3 l1">
                <div class="switch">
                  <label>
                    Email
                  </label>
                </div>
              </div>
              <div class="input-field col s3 l2">
                <div class="switch">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
              <div class="input-field col s6 l9" style="padding-left: 15px !important;">
                <div class="switch">
                  <label>
                    WINNERSWELLNESS@AOL.COM
                  </label>
                </div>
              </div>
            </div>

             <div class="row">
              <div class="input-field col s3 l1">
                <div class="switch">
                  <label>
                    Phone
                  </label>
                </div>
              </div>
              <div class="input-field col s3 l2">
                <div class="switch">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
              <div class="input-field col s6 l9" style="padding-left: 15px !important;">
                <div class="switch">
                  <label>
                    7703541446
                  </label>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="input-field col s3 l1">
                <div class="switch">
                  <label>
                    Picture:
                  </label>
                </div>
              </div>
              <div class="input-field col s3 l2">
                <div class="switch">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
              <div class="input-field col s6 l9" style="padding-left: 15px !important;">
                <div class="switch">
                  <label>
                    <img src="{{asset('img/face.jpg')}}" style="height: 150px; width: 150px;">
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <button class="btn  waves-light" onclick="show()" id="send" type="button" name="edit">
                  Edit Contact Information<i class="material-icons right">edit</i>

                </button>
              </div>
              
            </div>
        </form>
        <form class="updatepwp" action="test.php">
                      <div id="obj1" class="container" style="margin-top: 20px;">

                        <div class="input-field">
                          <i class="material-icons prefix">person</i>
                          <label for="name" style="color: red;">Name</label>
                          <input type="text" name="name" class="name valid_pwp" >
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">business</i>
                          <label for="Company Name">Company Name</label>
                          <input type="text" name="company" class="company valid_pwp" >
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">email</i>
                          <label for="Email" style="color: red;">Email</label>
                          <input type="text" name="email" class="mail valid_pwp"  placeholder="example@gmail.com">
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">phone_iphone</i>
                          <label for="Phone" style="color: red;">Phone</label>
                          <input type="tel" name="phone" class="phone valid_pwp" placeholder="9419217186">
                        </div>
                         <div class="input-field">
                          <div class="file-field input-field">
                            <div class="btn">
                              <span >change picture</span>
                              <input type="file" accept="image/jpeg, image/png" class="tooltipped valid_pwp photo"  data-position="bottom"  data-tooltip="Picture must be a JPG or PNG and less than 1mg">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="input-field">
                          <p style="color: red;">Changing the email address here will also change the email address used for receiving leads from your lead collector page</p>
                        </div>

                        <div class="input-field col s2">
                           <button class="btn  waves-light"  id="sendpwp" type="submit" name="save">
                            Update<i class="material-icons right">update</i>
                          </button>
                        </div>
                      </div>      
               </form>
               <script type="text/javascript">
                 var modified;
                 $(document).ready(function () 
                  {  
                    $(".name, .company, .name, .phone, .photo").change(function () {   
                      modified = true;  
                    }); 
                  }); 
                 function validarCampos() {
                    if (modified) {
                    //return confirm('Puede haber cambios sin guardar en el formulario, ¿Desea salir de todas formas?'); 
                  Swal.fire({
                      title: 'Do you want to close this window without saving?',
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes'
                    }).then((result) => {
                      if (result.value) {
                        $('#pwp').modal('close');
                      }
                    })

                  }else{
                        $('#pwp').modal('close');
                  }
                }

               </script>
             </div>

      <div class="modal-footer">
        <a href="#!" class="waves-green btn-flat btn" onclick="validarCampos()" id="close_pwp" >Close</a>
      </div>
  </div>



  <ul class="sidenav" id="mobile-demo">
    <!--------------------Datos del  usuario--------------------------------->
    <center>
        <li class="li_perfil"><a class='' href='#'  data-target='featur-dropdown' > <img class="img_perfil" src="{{asset('img/face.jpg')}}" ></a></li>
    </center>
     <li> <a></a></li>
      <ul class="collapsible">
          <li >
            <div class="collapsible-header"><i class="material-icons">person_pin</i> Arturo Soltero (5000)</div>
            <div class="collapsible-body" ><span>
              <p style="margin-left: 20px !important;">Rango Diamante</p> 
              <p style="margin-left: 20px !important;">PATROCINADOR ANTOCORA, S.A. DE C.V.</p>
            </span>
          </div>
          </li>
          <li class="active">
            <div class="collapsible-header"><i class="material-icons">data_usage</i>{{ __('Points') }}</div>
            <div class="collapsible-body"><span  >
                <p style="margin-left: 20px !important;">{{ __('PPV') }}: 150 </p>
                <p style="margin-left: 20px !important;">{{ __('PGPV') }}: 4,589</p>
                <p style="margin-left: 20px !important;">{{ __('OPV') }}: 125,789</p>
                <p style="margin-left: 20px !important;">{{ __('OPV-OPL') }}: 119,520</p>
                <p style="margin-left: 20px !important;">{{ __('OPV-OPL&SL') }}: 4,801</p>
            </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">settings</i>Settings</div>
            <div class="collapsible-body" ><span>
             <div style="width: 60%;" > <a class='dropdown-trigger' href='#' data-target='feature-dropdown-mobile' style="margin-left: 20px !important;">Select your languague</a></div>
                <ul id='feature-dropdown-mobile'  class='dropdown-content'>
                  <li><a href="full-header.html">English</a></li>
                  <li><a href="horizontal.html">French</a></li>
                  <li><a href="no-image.html">Spanish</a></li>
                </ul>

                 <a href="#pwp" class="modal-trigger" style="margin-left: 20px !important;">PWP Manager</a><br>
                <a href="blog.html" class="" style="margin-left: 20px !important;">Log off</a>
            </span></div>
          </li>
         
      </ul>
        







    
    


    
      <!----------------------------------------------------->
   
   
  </ul>


    <div class="carousel carousel-slider" style="position: relative; margin-top: 0px !important; ">
    <a class="carousel-item" href="#one!"><img src="{{asset('img/8.png')}}"></a>
    <a class="carousel-item" href="#two!"><img src="{{asset('img/3.png')}}"></a>
    <a class="carousel-item" href="#three!"><img src="{{asset('img/2.png')}}"></a>
  </div>

  <nav class="navbar-fixed"  style="" >
    
     <!-- Fixed Masonry Filters-->
      <div class="categories-wrapper black" >
        <div class="categories-container black"  >
          <ul class="categories container black"  >

            <li class="active">  <a href="#home" class="a-ho"><img class="icon-menu" src="{{asset('img/hom.png')}}" >Home</a></li>
            <li><a href="#order" class="a-ho"><img class="icon-menu" src="{{asset('img/order.png')}}" >Order Entry</a></li>
            <li ><a href="#signup" class="a-ho"><img class="icon-menu" src="{{asset('img/singup.png')}}" >Sign Up</a></li>
            <li><a href="#report" class="a-ho"><img class="icon-menu" src="{{asset('img/reports.png')}}" >Reports</a></li>
            <li> <a href="#events" class="a-ho"><img class="icon-menu" src="{{asset('img/events.png')}}" >Events</a></li>
            <li>  <a href="#communication" class="a-ho" ><img class="icon-menu" src="{{asset('img/com.png')}}" >Communication</a></li>
            <li><a href="#tools" class="a-ho"><img class="icon-menu" src="{{asset('img/tools.png')}}" >Business Tools</a></li>
            <li><a href="#global" class="a-ho"><img class="icon-menu" src="{{asset('img/global.png')}}" >International Business</a></li>
          </ul>
        </div>
      </div> 
  </nav>
  <!---------------- renewal div ------------------------------------>
   @php
        $RenealDateEval = explode(" ", $response[0]->Renewal_Date);
        $today = Date("Y-m-d");
        $fecha1= new DateTime($RenealDateEval[0]);
        $fecha2= new DateTime($today);
        $diff = $fecha1->diff($fecha2);
        $remainingDays = $diff->days;
        $month = explode("-", $RenealDateEval[0]);
        $year = $month[0];
        $month = $month[1];
        $fecha = DateTime::createFromFormat('!m', $month);
        $mes = $fecha->format('F');
    @endphp
    @if ($remainingDays <= 90)
      <center>
        <div class="gallery-header warning lighten-3 alertRenewal" style="width: 80%; background-color: #fff2cf; padding: 20px; margin-top: 10px; border-radius: 5px;">
          <i class="material-icons">report_problem</i>
          <span>Your renewal date is on {{ $mes . " " . $month . ", " . $year }}. <a href="#modal1" class="modal-trigger">Click here to renew.</a></span>
        </div>
      </center>
    @endif
    <!----------------end renewal div------------------------------>
    <!-- Gallery -->
    <div id="portfolio" class="section white section-gallery" >
      <div class="container container-gallery"  >
        <div class="gallery row gallery-est">

   

          <!--shop -->
          <div class="col  l4 m4 s4 gallery-item gallery-expand gallery-filter order home contenedor">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img " src="{{asset('img/shop.png')}}" alt="placeholder"  crossorigin="anonymous">
                <h6 id="text">Shop</h6>
              </a>
              
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Shop</h3>
                </div>
                <form id='formchangelanguage' action="welcome" method="post">
                  {{ csrf_field() }}
                 <input type="text" name="username" id="username" value="{{ $ids }}">
                 <input type="text" name="eshi" id="eshi" value="es">
                 <input type="submit" name="esin" value="Spanish">
               </form>
              </div>
            </div>
          </div> 



           <!------------------------Sig Up ---------------------------------------------->
          <div class="col  l4 m4 s4 gallery-item  gallery-filter signup home ">
            <div class="gallery-curve-wrapper">
              <a href="http://signuptest.nikkenlatam.com/backoffice" target="_blank" class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/add_con.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Consultant</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Consultant</h3>
                </div>
              </div>
            </div>
          </div>


          <div class="col  l4 m4 s4 gallery-item  gallery-filter signup home ">
            <div class="gallery-curve-wrapper">
              <a href="http://signuptest.nikkenlatam.com/withpurchase/usa/en" target="_blank" class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/add_cos.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Customer</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Customer</h3>
                </div>
              </div>
            </div>
          </div>




          <!------------------------------------------------------------>








           <!-------------------Graphs----------------------------------------->
             <div class="col  l4 m4 s4 gallery-item gallery-expand gallery-filter report home ">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/graphs.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Graphs</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Graphs</h3>
                </div>
                
              </div>
            </div>
          </div> 
           <!------------------------------------------------------------>



         



            <!-----------------------Autoship -------------------------------------->
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter order home ">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/autoship.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Autoship</h6>
              </a>
             
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Autoship</h3>
                </div>
                
              </div>
            </div>
          </div> 


          <!------------------------------------------------------------------------>


<!------------------------Watch List ---------------------------------------------->
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter report desaparece ">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/watch.png')}}" alt="placeholder" crossorigin="anonymous">
                <input type="hidden" id="ids" name="ids" value="{{ $ids }}">
                <h6 id="text">Watch List</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Watch List</h3>
                </div>
                <ul class="collapsible collapsible-accordion">
                  <li class="active">
                      <div class="collapsible-header" tabindex="0">
                      <i class="material-icons">expand_more</i>Watch List (Click here)</div>
                      <div class="collapsible-body">
                          <span>
                              The watch list allows you to specify members that you want to monitor in your organization. If you know their ID you can add them below, or you can click on the add icon on any of the genealogy reports.
                          </span>
                          <div class="row">
                              <form action="{!! url('/watchlist/addAsoc') !!}" name="addAsoc" id="addAsoc" method="GET">
                                  <div class="input-field col s6">
                                      <i class="material-icons prefix">account_circle</i>
                                      <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" hidden></input>
                                      <input id="associated" name="associated" type="text" class="autocomplete">
                                      <label for="associated">Member ID:</label>
                                  </div>
                                  <div class="input-field col s6 ">
                                      <button type="submit" class="waves-effect waves-light btn cyan" id="sendForm">
                                          <i class="material-icons right">person_add</i>
                                          Add
                                      </button>
                                      <a class="waves-effect waves-light btn cyan" onclick="reloadReportW()">
                                          <i class="material-icons right">sync</i>
                                          Reload report
                                      </a>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </li>
                </ul>
                <ul class="collapsible collapsible-accordion">
                    <li class="active">
                        <div class="collapsible-header" tabindex="0">
                        <i class="material-icons">expand_more</i>Format (Click here)</div>
                        <div class="collapsible-body">
                            <div class="row list_view">
                                <div class="col l3 m3 s3">
                                    <p>
                                        <label>
                                            <input type="checkbox" id="line_number" data-target="1"/>
                                            <span>Line Number</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="levels" data-target="2"/>
                                            <span>Levels </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  disabled id="name" data-target="3"/>
                                            <span>Name</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="consultant_id" data-target="4"/>
                                            <span>Consultant ID</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="email" data-target="5"/>
                                            <span>E-mail Address</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="mobile_number" data-target="6"/>
                                            <span>Mobile Phone</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="alternative_num" data-target="7"/>
                                            <span>Alternative Phone</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="country" data-target="8"/>
                                            <span>Country</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="pay_rank" data-target="9"/>
                                            <span>Pay Rank </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="distributor_status" data-target="10"/>
                                            <span>Distributor status</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="inactive_months" data-target="11"/>
                                            <span>Inactive Months</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  id="renewal_date" data-target="12"/>
                                            <span>Renewal Date</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  name="mont1" id="period1" onclick="hideShowPeriod1()"/>
                                            <span>Period July 2019</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  name="mont2" id="period2" onclick="hideShowPeriod2()"/>
                                            <span>Period August 2019</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox"  name="mont3" id="period3" onclick="hideShowPeriod3()"/>
                                            <span>Period September 2019</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p>Your options can be saved as the defaults for the Watch List report.</p>
                                    <p>
                                    <button class="btn waves-effect waves-light cyan" onclick="saveTableConf()">Save Options
                                            <i class="material-icons right">save</i>
                                        </button> 
                                    </p>
                                    <p>
                                        <button class="btn waves-effect waves-light cyan" name="action">Update Watch List
                                            <i class="material-icons right">update</i>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="collapsible collapsible-accordion">
                    <li class="active">
                        <div class="collapsible-header" tabindex="0">
                        <i class="material-icons">expand_more</i>Info (Click here)</div>
                        <div class="collapsible-body">
                            <div>
                                <p>PPV: Personal Point Volume</p>
                                <p>PGPV: Personal Group Point Volume</p>
                                <p>OPV: Organizational Point Volume</p>
                                <p>OPV-OPL: Organizational Point Volume Outside Primary Leg</p>
                                <p>OPV-OP&SL: Organizational Point Volume Outside Primary & Secondary Leg</p>
                                <br>
                                <p>PPV is the accumulated point volume of product orders placed under a Consultant’s distributorship account. If Worldwide view is selected, the link is not active.</p>
                            </div>
                            <div class="row">
                                <div class="col s12" style="overflow-x: scroll; height: auto;">
                                    <table id="example" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th rowspan="2"></th>
                                                <th rowspan="2">Line<br>num</th>
                                                <th rowspan="2">LV</th>
                                                <th rowspan="2">Name</th>
                                                <th rowspan="2">Dist ID</th>
                                                <th rowspan="2">Email</th>
                                                <th rowspan="2">Mobile Number</th>
                                                <th rowspan="2">Alternative Mobile Number</th>
                                                <th rowspan="2">Country</th>
                                                <th rowspan="2">Pay Rank</th>
                                                <th rowspan="2">Distributor Status</th>
                                                <th rowspan="2">Inactive Months</th>
                                                <th rowspan="2">Renewal Date</th>
                                                <th colspan="5" class="mont1">July 2019</th>
                                                <th colspan="5" class="mont2">August 2019</th>
                                                <th colspan="5" class="mont3">September 2019</th>
                                            </tr>
                                            <tr>
                                                <th>PGPV</th>
                                                <th>PPV</th>
                                                <th>OPV</th>
                                                <th>OPV-OPL</th>
                                                <th>OPV-OPL&amp;SL</th>
                                                <th>PGPV</th>
                                                <th>PPV</th>
                                                <th>OPV</th>
                                                <th>OPV-OPL</th>
                                                <th>OPV-OPL&amp;SL</th>
                                                <th>PGPV</th>
                                                <th>PPV</th>
                                                <th>OPV</th>
                                                <th>OPV-OPL</th>
                                                <th>OPV-OPL&amp;SL</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
              </div>
            </div>
          </div> 
<!------------------------end Watch List ---------------------------------------------->




 <!--UP line -->
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter report desaparece ">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/upline.png')}}" alt="placeholder">
                <h6 id="text">Upline Listing</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <br>
                  <h3>Upline Listing</h3>
                </div>

                  <br>
                  <br>
                  <br>
                  <div class="col s12" style="overflow-x: scroll;">
                   <table id="upline" class="striped highlight">
                    <thead style="background-color: #0aa6b6;">
                      <tr>
                          <th>Distributor ID</th>
                          <th>Name (Dots indicate level)</th>
                          <th>Daytime Phone</th>
                          <th>Email</th>
                      </tr>
                    </thead>

                    <tbody>
                       
                    </tbody>
                  </table>
                </div>
              </div>
             
            </div>
          </div>




<!--------------- Tax Form Summary------------------>
  
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter report desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/tax.png')}}" alt="placeholder">
                <h6 id="text">Tax Summary</h6>
              </a>
              <div class="gallery-body">
                
                <div class="title-wrapper">
                  <h3>Tax Summary</h3>
                  <span class="price">Distributor ID:  </span>
                  <input type="text" id="consultantid" name="consultantid" readonly value="{{$ids}}" style="color: #000; width:105px; font-weight:bold; ">
                </div>
                <br> <br>
                <p class="textreports">
The tax summary shown is not a 1099/T4A. The online tax summary is an overview of your earnings, deductions and withholdings the past year. The official tax documents (1099 and T4A) have been printed and mailed out. If you are qualified to receive either a 1099 or T4A and have not received one in the mail, please contact Distributor Services for assistance.<b>Tax year based on bonus period ranges from December to November</b></p>
               
                <div class="row">
                  <div class="col s4">
                      <form action="">
                        <select id="Year">
                          <option value="0">Select year</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018" selected>2018</option>
                        </select>
                      </form>
                  </div>

                  <div class="col s4">     
                  </div>

                  <div class="col s4">
                    <a class="btn btn success" href="{{ asset('files/1099-T4A-FAQ-en.pdf') }}" target="_blank">Learn more</a>

                  <!--  <button class="btn success">Printer Friendly</button>-->
                </div>
              </div>

              <div class="col s12">
                <input type="text" id="yeartax" name="yeartax" readonly class="form-control" value="{{ $lastyear }}" style="color: #000; font-weight:bold;">
                <br><label style="color: #000; font-size: 18px"><b>Select Options:</b></label><br><br>
              </div>

              <div class="row">
                <div class="col s4">
                   <label style="font-size: 16px; color: #000;">Name: </label>
                    <select id="Name" width="20%">
                     <!-- <option value="System Architect">System Architect</option> -->
                    @foreach($queryTaxNames as $infonametax)
                      <option value="{{ $infonametax->Name }}">{{ $infonametax->Name }}</option>
                    @endforeach 
                     </select>     
                </div>

               <!--  <div class="col s4">
                   <label>Country: </label> -->
                 <!--   <select id="Country" width="20%">
                      <option value="0">Country: </option>
                      <option value="USA">USA</option>
                      <option value="CAN">CAN</option>
                    </select>    
                </div> -->

                <div class="col s4">
                    <button id="btnoptiontax" class="btn success" style="margin-top: 30px;">Update the data based on your options</button>
                </div>
              </div>


              <!-- Tables -->
              <div class="section no-padding white" style="overflow: auto;">
                <table id="default-table-example" class=" striped" cellspacing="0" width="100%"> <!--row-border-->
                  <thead style="background-color: #0aa6b6;">
                    <tr>
                        <th style="color: #fff;">Period</th>
                        <th style="color: #fff;">Name</th>
                        <th style="color: #fff;"><a style="color: #fff;" class="tooltipped" data-position="right" data-tooltip="The sum of your distributorship wholesale purchases within a calendar month.">Purchases</a></th>
                        <th style="color: #fff;">Commission Account</th>
                        <th style="color: #fff;">+</th>
                        <th style="color: #fff;"><a style="color: #fff;" class="tooltipped" data-position="right" data-tooltip="The sum of any bonus adjustments/deductions due to personal or downline returns, or bonus recalculations.">Bonus Deduction</a></th>
                        <th style="color: #fff;">+</th>
                        <th style="color: #fff;"><a style="color: #fff;" class="tooltipped" data-position="right" data-tooltip="Includes total value of contest incentives, prizes, and awards received.">Other</a></th>
                        <th style="color: #fff;">=</th>
                        <th style="color: #fff;">Adjusted Gross</th>
                        <th style="color: #fff;">Backup withholding</th>
                    </tr>
                  </thead>
                  <tbody id="contenido">
                    <!-----AGREGADO PARA CONEXION BD --->
                     @foreach($queryTax as $infotax)
                    
                    <tr>
                      <td>{{ $infotax->Period }}</td>
                      <td>{{ $infotax->Name }}</td> 
                      <td>{{ $infotax->Purchases }}</td>
                      <td>{{ number_format($infotax->Commission_Amount,2) }}</td>
                      <td>+</td>
                      <td>{{ number_format($infotax->Bonus_Deduction,2) }}</td>
                      <td>+</td>
                      <td>{{ number_format($infotax->Other,2) }}</td>
                      <td>=</td>
                      <td>{{ number_format($infotax->Adjusted_Gross,2) }}</td>
                      <td>{{ number_format($infotax->Backup_Withholding,2) }}</td>
                    </tr>
                     @endforeach  
                    <!-- FIN AGREGADO PARA CONEXION BD-->
                 </tbody>
                 <tfoot id="totaltax" style="background-color: #0aa6b6; color: #fff;">
                    <tr>
                        <th>Totals</th>
                        <th></th>
                        <th>{{ $contPurchases }}</th>
                        <th>{{ $contCommission_Amount }}</th>
                        <th>+</th>
                        <th>{{ $contBonus_Deduction }}</th>
                        <th>+</th>
                        <th>{{ $contOther }}</th>
                        <th>=</th>
                        <th>{{ $contAdjusted_Gross }}</th>
                        <th>{{ $contBackup_Withholding }}</th>
                    </tr>
                  </tfoot> 
                </table>

              </div>

              </div>

            </div>
          </div>


<!---------------END  Tax Form Summary------------------>



 <!----------------Genealogy and broadcast--------------------------------->
                 <style type="text/css">
                   .loade {
                          position: fixed;
                          left: 0px;
                          top: 0px;
                          width: 100%;
                          height: 100%;
                          z-index: 9999;
                          background: url('{{ asset('img/loader.gif')}}') 50% 30% no-repeat;
                          opacity: .9;
                      }
                 </style>
                <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter report home"  class="emailgen">
                  <div class="gallery-curve-wrapper" class="emailgen">
                    <a class="gallery-cover gray ver">
                      <img class="responsive-img" src="{{asset('img/genealogy.png')}}" alt="placeholder" crossorigin="anonymous">
                      <h6 id="text">Genealogy and Broadcast</h6>
                    </a>
                    <div class="gallery-body" class="emailgen">
                      <div class="title-wrapper">
                        <h3>Genealogy and Broadcast</h3>
                      </div>
                        <div class="container " style="height: 300px !important; width: 100%;" class="emailgen">
                            <div class="input-field col s4 m4 l4 xl4">
                              <div class="section">
                               <select id="range">
                                 <option value="">Range</option>
                                 <option value="s">Signup Date</option>
                                 <option value="R">Renewal Date</option>
                               </select>
                              </div>
                              <div class="section input-field">
                                <input type="text" class="DateGen" id="txtMin">
                                <label>Range Max Date</label>
                              </div>
                              <div class="section input-field">
                                <input type="text" class="DateGen" id="txtMax" >
                                <label>Range Min Date</label>
                              </div>
                            </div>

                            
                              <div class="input-field col s5 m4 l4 xl4">
                                  <div class="section">
                                    <select>
                                      <option>Tree Scope</option>
                                      <option>Entire Downline</option>
                                       <option>Personal Group</option>
                                       <option>Break Away</option>
                                    </select>
                                </div>

                                <div class="section inline input-field">
                                   From Level
                                   <input type="text" name="" id="minLevel" placeholder="1" style="width: 10%; text-align: center ">
                                   to
                                   <input type="text" name="" value="" id="maxLevel" placeholder="3" style="width: 10%; text-align: center">
                                </div>
                             </div>

                            


                          <div class="input-field col s3 m4 l4 xl4" style="position: relative; top: -13px;">

                            <div class="section input-field">
                               <select id="periodGenealogy">
                                  <option>Period</option>
                                  <option value="201908">August 2019</option>
                                   <option value="201909">September 2019</option>
                                   <option value="201910">October 2019</option>
                                </select>              
                            </div>

                            <div class="section input-field">
                                 <input type="text" name="" id="fromIDgen">
                                 <label>From ID</label>
                            </div>                         
                          </div>

                      </div>

                       <ul class="collapsible" style="margin-top: 50px;">
                            <li>
                              <div class="collapsible-header"><i class="material-icons">filter_list</i>Filter Columns</div>
                              <div class="collapsible-body">
                                  <div class="row list_view">
                                        <div class="col l4 m4 s4 ver">
                                            <p>
                                                <label>
                                                    <input type="checkbox"  data-target="1" id="line_numberGen" />
                                                    <span>Line Number</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="2"  id="levelGen" />
                                                    <span>Level </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="4"  disabled id="associatenameGen"/>
                                                    <span>Name</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="3"  id="associateidGen" />
                                                    <span>ID</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="6"  id="emailGenea" />
                                                    <span>E-mail Address</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="7"  id="mobile_numberGen"/>
                                                    <span>Mobile Phone</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="8"  id="alternative_numberGen" />
                                                    <span>Alternative Phone</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="9"  id="countryGen" />
                                                    <span>Country</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target="5"  id="distributor_statusGen" />
                                                    <span>Distributor status</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l4 m4 s4">
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  id="inactive_monthsGen" />
                                                    <span>Inactive Months</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  id="pay_rankGen"/>
                                                    <span>Pay Rank </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  id="renewal_dateGen" />
                                                    <span>Renewal Date</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  name="mont1" id="period1Gen" />
                                                    <span>Period July 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  name="mont2" id="period2Gen" />
                                                    <span>Period August 2019</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" data-target=""  name="mont3" id="period3Gen" />
                                                    <span>Period September 2019</span>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="col l4 m4 s4">
                                            <p>Your options can be saved as the defaults for the Genealogy report.</p>
                                            <p>
                                               <button class="btn  waves-light cyan" id="savefilter">Save Options
                                                    <i class="material-icons right">save</i>
                                                </button> 
                                            </p>
                                        </div>
                                  </div>
                              </div>
                            </li>
                        </ul>


                         <ul class="collapsible">
                            <li>
                              <div class="collapsible-header" ><i class="material-icons">filter_list</i>Filters</div>
                                <div class="collapsible-body">
                                <div class="row list_view">
                                </div>  
                                  <div class="container " style="height: 300px !important; width: 100%;" class="emailgen">
                                      <div class="input-field col s4 m4 l4 xl4">
                                        <div class="section">
                                         <select>
                                           <option>Activity</option>
                                         </select>
                                        </div>
                                          <div class="section inline input-field">
                                             PPV
                                             <input type="text" name="" id="minLevel" placeholder="1" style="width: 10%; text-align: center ">
                                             and
                                             <input type="text" name="" value="" id="maxLevel" placeholder="3" style="width: 10%; text-align: center">
                                          </div>
                                      </div>

                                      
                                        <div class="input-field col s5 m4 l4 xl4">
                                            <div class="section">
                                              <select>
                                                <option>Qualification</option>
                                              </select>
                                          </div>

                                          <div class="section inline input-field">
                                             PGPV
                                             <input type="text" name="" id="minLevel" placeholder="1" style="width: 10%; text-align: center ">
                                             and
                                             <input type="text" name="" value="" id="maxLevel" placeholder="3" style="width: 10%; text-align: center">
                                          </div>
                                       </div>

                                      


                                    <div class="input-field col s3 m4 l4 xl4" style="position: relative; top: -13px;">

                                      <div class="section input-field">
                                         <select id="EnrollmentGenea">
                                            <option>Quality Enrollment</option>
                                          </select>              
                                      </div>   
                                          <div class="section inline input-field">
                                             Postal Code
                                             <input type="text" name="" id="minLevel" placeholder="1" style="width: 10%; text-align: center ">
                                             and
                                             <input type="text" name="" value="" id="maxLevel" placeholder="3" style="width: 10%; text-align: center">
                                          </div>                     
                                    </div>

                                </div>   
                              </div>
                            </li>
                        </ul>


                        <br>
                         <div class="container col s6" >
                          <a class=" btn" href="gene/{{ $ids }}"><i class="material-icons right">cloud_download</i>Excel</a>

                          <button class="btn  waves-light" onclick="mostrar()"  id="send_email" type="button" name="action">Send Email
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                        <br>
                          <br>
                         <div class="col s12 m12 l12 xl12" id="emailgenealogy" style="margin-bottom: 40px;">
                          <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <label for="email">From</label>
                            <input type="email" name="email" id="from_email" required>
                          </div>
                          <div class="input-field">
                            <i class="material-icons prefix">subject</i>
                            <label for="email">Subject</label>
                            <input type="email" name="email" required>
                          </div>
                          <textarea name="content" id="editor" class="materialize-textarea"></textarea>
                          
                        </div>

                        <div class="users container" style="overflow-x: scroll; width: 95%;">
                           <table id="genealogy" class="striped highlight centered">
                              <thead style="background-color: #0aa6b6;">
                                <tr>
                                  <td> <p><label><input type="checkbox" name="email[]" class="check_mail"  name="countries[]" value="" /><span></span></label></p> </td>
                                  <th class="line_number">Line</th>
                                  <th class="level">Level</th>
                                  <th class="associateid">ID</th>
                                  <th class="associatename">Name</th>
                                  <th class="distributor_status">Status</th>
                                  <th class="email">Email</th>
                                  <th class="mobile_number">Mobile</th>
                                  <th class="alternative_number">Alternative Number</th>
                                  <th class="country">Country</th>
                                  <th class="PinRank">PinRank</th>
                                  <th class="PayRank">PayRank</th>
                                  <th class="InactiveMonths">Inactive Months</th>
                                  <th class="RenewalDate">RenewalDate</th>
                                </tr>
                              </thead>

                              <tbody>
                                 
                              </tbody>
                            </table>
                        </div>   
                       
                      <style>
                      #emailgenealogy{display:none;}
                      </style>
                      <script type="text/javascript">
                        function mostrar(){
                          document.getElementById('emailgenealogy').style.display = 'block';
                        }
                       $(document).ready(function(){
                           $("#send_email").click(function(){
                                $(".emailgen").scrollTop(3300)
                            });
                        }); 
                       
                      </script>
                      
                    </div>
                  </div>
                </div>



          <!------------------------------------------------------------------------>




<!-----------------------------Account Inquiry/Tracking----------------------------->      
         <!-----------------------------Account Inquiry/Tracking----------------------------->             
             <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter desaparece report">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/tracking.png')}}" alt="placeholder">
                <h6 id="text">Account inquiry/Tracking</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Account inquiry/Tracking</h3>
                </div>

                <div class="row" id="TransactionTable">
                  <div class="col s1">
                  </div>
                   <div class="col s10">

                     <!-- Tables -->
              <div class="section no-padding white" style="overflow-x: auto;">
                <table id="default-table-example" class=" striped" cellspacing="0" width="100%"> <!--row-border-->
                  <thead style="background-color: #0aa6b6;">
                    <tr>
                        <th style="color: #fff;">Type</th>
                        <th style="color: #fff;">Name</th>
                        <th style="color: #fff;">Type</th>
                        <th style="color: #fff;">Name</th>
                        <th style="color: #fff;">Type</th>
                        <th style="color: #fff;">Name</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>BC</td>
                      <td>Commission Conversion</td>
                      <td>CR</td>
                      <td>Account Adjustment – Credit</td>
                      <td>BE</td>
                      <td>Commission Earning</td> 
                    </tr>
                    <tr>   
                      <td>D</td>
                      <td>Retail Order</td>  
                      <td>BM</td>
                      <td>Commission Maintenance</td>
                      <td>DB</td>
                      <td>Account Adjustment – Debit</td>             
                    </tr>
                    <tr>
                      <td>BP</td>
                      <td>Commission Payment</td>
                      <td>I</td>
                      <td>Wholesale Order</td>
                      <td>BT</td>
                      <td>Commission Tax</td>
                    </tr>
                    <tr>                  
                      <td>IC</td>
                      <td>Customer Order Posted to their Sponsor</td>
                      <td>BX</td>
                      <td>Manual Check (Commission) – Earnings Amount</td>
                      <td>IP</td>
                      <td>Pre-Order</td>
                    </tr>
                    <tr>
                      <td>BY</td>
                      <td>Manual Check (Commission) – Withholding Amount</td>
                      <td>MA</td>
                      <td>Manual Check (Account)</td>
                      <td>BZ</td>
                      <td>Manual Check (Commission) – Check Amount</td>
                    </tr>
                    <tr>                   
                      <td>MP</td>
                      <td>Miscellaneous Cash Receipt</td>
                      <td>C</td>
                      <td>Credit Order</td>
                      <td>P</td>
                      <td>Order Payment</td>
                    </tr>
                    <tr>
                      <td>R</td>
                      <td>Replacement Order</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>


                  </div>
                </div>
                <!-------SECTION -------->
              <div id="legendSection" >
                <div class="row">
                  <div class="col s3">
                    <label class="textreports"><b>PV Period:  </b></label><label>Apr</label>
                  </div> 
                  <div class="col s3 brand-logo center">
                    <label class="textreports"><b>Currency:  </b></label><label>USA</label>
                  </div> 
                  <div class="col s3 brand-logo right">
                    <label class="textreports"><b>Begining Balance:  </b></label><label>0.00</label>
                  </div>   
                 </div> 

                <div class="row">
                  <!-- Tables -->
                  <div class="section no-padding white" style="overflow-x: auto;">
                    <table id="default-table-example" class="striped"  cellspacing="0" width="100%"> <!--row-border-->
                      <thead style="background-color: #0aa6b6;">
                        <tr>
                            <th style="color: #fff;">Type</th>
                            <th style="color: #fff;">Description/Ship to</th>
                            <th style="color: #fff;">Date</th>
                            <th style="color: #fff;">Number</th>
                            <th style="color: #fff;">Volume</th>
                            <th style="color: #fff;">Transaction Type</th>
                            <th style="color: #fff;">Amount</th>
                            <th style="color: #fff;">Transaction Type</th>
                            <th style="color: #fff;">Balance</th>
                            <th style="color: #fff;">Transaction Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>IC</td>
                          <td>Linda Tromburg Cox</td>
                          <td>04/05/2019</td>
                          <td><a class="link"><!--<a href="">-->151364151</a></td>
                          <td>28.00</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>I</td>
                          <td>Kevin Deason</td>
                          <td>04/19/2019</td>
                          <td><a class="link">15844545</a></td>
                          <td>28.80</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>P</td>
                          <td>Credit Card</td>
                          <td>04/05/2019</td>
                          <td><a class="link">08454415</a></td>
                          <td>28.80</td>
                          <td></td>
                          <td>0.00</td>
                          <td>CR</td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>P</td>
                          <td>Credit Card</td>
                          <td>04/05/2019</td>
                          <td><a class="link">15151454</a></td>
                          <td>0.00</td>
                          <td></td>
                          <td>78.12</td>
                          <td>CR</td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>P</td>
                          <td>Credit Card</td>
                          <td>04/16/2019</td>
                          <td><a class="link">18502587</a></td>
                          <td>0.00</td>
                          <td></td>
                          <td>129.32</td>
                          <td>CR</td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>IC</td>
                          <td>Leslie Levy</td>
                          <td>04/18/2019</td>
                          <td><a class="link">08503131</a></td>
                          <td>8.80</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>BE</td>
                          <td>Earrings Amount</td>
                          <td>04/19/2019</td>
                          <td><a class="link">901245235</a></td>
                          <td>0.00</td>
                          <td></td>
                          <td>15.90</td>
                          <td>CR</td>
                          <td>0.00</td>
                          <td>CR</td>
                        </tr>
                        <tr>
                          <td>BP</td>
                          <td>e-Deposit Amount</td>
                          <td>04/19/2019</td>
                          <td><a class="link">901245235</a></td>
                          <td>0.00</td>
                          <td></td>
                          <td>15.90</td>
                          <td></td>
                          <td>0.00</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> <!--div final legendsection-->  
              <!----------------------- SECTION ------------------------->
              <div id="Account_link" hidden>   
                <hr style=" display: block;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 1px;">
                <div class="row">
                  <div class="col s12">
                    <label class="textreports"><b>Order Number  </b></label><label class="textreports">11111111</label><br>
                    <label class="textreports"><b>Start date  </b></label><label class="textreports">04/05/19</label><br>
                    <label class="textreports"><b>Vol Month  </b></label><label class="textreports">4/19</label><br>
                    <label class="textreports"><b>Distributor ID  </b></label><label class="textreports">7512111215<label></label><br> 
                  </div>

                  <div class="row">
                    <div class="col s6">
                      <div class="col s3">
                        <br>
                        <label class="brand-logo center textreports"><b>Bill to</b></label>
                      </div>
                      
                      <div class="col s3">
                        <br>
                        <label class="textreports">Tromburg, Linda C.</label><br>
                        <label class="textreports">210 Golf Links Ln</label><br>
                        <label class="textreports">Magnota, DE 19952-1159</label><br>
                        <label class="textreports">USA</label><br>
                        <label class="textreports">4541581414</label><br>
                      </div>
                    </div>

                    <div class="col s6">
                      <div class="col s3">
                        <br>
                        <label class="brand-logo center textreports"><b>Ship to</b></label>
                      </div>

                      <div class="col s3">
                        <br>
                        <label class="textreports">Linda Tromburg Cox</label><br>
                        <label class="textreports">610 Golf Links Ln</label><br>
                        <label class="textreports">Magnota, DE 19952-1159</label><br>
                        <label class="textreports">USA</label><br>
                        <label class="textreports">4541581414</label><br>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12">
                      <!-- Tables -->
                      <div class="section no-padding white" style="overflow-x: auto;">
                        <table id="default-table-example" class="table table-striped" cellspacing="0" width="100%"> <!--row-border-->
                          <thead style="background-color: #0aa6b6;">
                            <tr>

                                <th style="color: #fff;">Item Code</th>
                                <th style="color: #fff;">Qty Ship</th>
                                <th style="color: #fff;">Qty order</th>
                                <th style="color: #fff;">Item Description</th>
                                <th style="color: #fff;">Item Volume</th>
                                <th style="color: #fff;">Total Volume</th>
                                <th style="color: #fff;">Item Price</th>
                                <th style="color: #fff;">Total price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>01/18</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>+</td>
                              <td>$320,800</td>
                              <td>+</td>
                              <td>System Architect</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total Volume</th>
                                <td >28.80</td>
                                <th>Subtotal</th>
                                <td >36.00</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Tax:</th>
                                <td>(Taxable 0.00  0.00%)</td>
                                <td >0.00</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Shipping/Handling</th>
                                <td>(Priority Mail -includes Sat Delivery)</td>
                                <td >4.95</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total Amount Due</th>
                                <td >40.95</td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div> 

                  <div class="row">
                    <div class="col s6">
                      <label class="textreports">Autoship #10266192** Internet Order **</label><br><br>
                      <label class="textreports"><b>Warehouse1</b></label><br>
                      <label class="textreports"><b>Irvine</b></label><br>
                      <label class="textreports">190 W. Crowther Avenue, Unit C</label><br>
                     <label class="textreports">Placentla, CA 92870</label><br>
                    </div>

                    <div class="col s6">
                      
                      <div class="row">
                        <div class="col s12 brand-logo center">
                          <label class="textreports brand-logo center"><b>Shipment Details for Order # 18533974</b></label><br><br>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col s3">
                          <label class="textreports"><b>Pkg:</b></label><label class="textreports">1</label><br>
                        </div>
                        <div class="col s3">
                          <label class="textreports"><b>Ship Date: </b></label><label class="textreports">08/13/19</label><br>
                        </div>
                        <div class="col s3">
                          <label class="textreports"><b>Carrier: </b></label><label class="textreports">US Mail</label><br>
                        </div>
                        <div class="col s3">
                          <label class="textreports"><b>Tracking: </b></label><label class="textreports"><a href="">51451441</a></label><br>
                        </div>
                      </div>
                      
                      
                      
                     
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s6 brand-logo center">
                      <label class="textreports">Payments Recived</label><br>
                    
                    <div class="col s4">
                      <label class="textreports"><b>Payment Type:</b></label><br>
                      <label class="textreports"><b>Card Number:</b></label><br>
                      <label class="textreports"><b>Receipt Amount:</b></label><br>
                      <label class="textreports"><b>Total Cash Receipts:</b></label><br>
                      <label class="textreports"><b>Invoice Balance:</b></label><br>
                    </div>

                    <div class="col s3">
                      <label class="textreports">Credit Card:</label><br>
                      <label class="textreports">*************7914</label><br>
                      <label class="textreports">40.95</label><br>
                      <label class="textreports">40.95</label><br>
                      <label class="textreports">0.00</label><br>
                    </div>

                    </div>

                  </div> 

                  <div class="row">
                    <div class="col s3"> 
                      <br><i class="small material-icons">arrow_back</i><input class="btn  waves-light btnAccountInquiry"  style="margin-bottom: 15px;" type="button" name="action" id="btnAccountInquiry" value="Back"  /> 
                    </div>
                  </div>
                                      
                </div> 
              </div>
            </div>
        </div>
        </div>
<!-----------------------------END Account Inquiry/Tracking----------------------------->  










<!---------------Comission/Earning Summary------------------>

        <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter report  desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/primary_bonus.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Commission/Earning Summary</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Commission/Earning Summary</h3>
                </div>
                 
                <div class="row">
                   <!----------------------------IFRAME------------------------------>
                      <iframe src="https://test.nikken.com:3000/select_bonus/{{$baseids}}1" frameborder="0" scrolling="no"  style="width:100%; min-height: 900px;" onload="resizeframe()" name="frame-us" id="frame-us"></iframe>
                      <!----------------------------END IFRAME------------------------------>     
              </div>
            </div>
          </div>
        </div>

        <!-------------END-------------------------->




          <!--News & Information Center-->

           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter communication desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/news.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">News & Information Center</h6>
              </a>
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
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter communication desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/feedback.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Feedback</h6>
              </a>
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
                      <button class="btn  waves-light" type="submit" name="action">Send Message
                        <i class="material-icons right">send</i>
                      </button>

                  </div>
              </div>
            </div>
          </div>

          <!--Conference Calls and Recordings-->
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter events desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/conference.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Events Calendar</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Events Calendar</h3>
                </div>
                
              </div>
            </div>
          </div>



            <!--Conference Call Schedule -->
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter events desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/conference_call.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Conference Call Schedule</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Conference Call Schedule</h3>
                </div>
                
              </div>
            </div>
          </div>


          <!--Incentives -->
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter tools desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/incentives.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Incentives</h6>
              </a>
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
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter tools desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/video.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Video Library</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Video Library</h3>
                </div>
                
              </div>
            </div>
          </div>          

   


          <!--Image -->
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter tools desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/image.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Image Library</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Image Library</h3>
                </div>
                
              </div>
            </div>
          </div>   


          <!--Documents -->
           <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter tools desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/document.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Document Library</h6>
              </a>
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



          <!--Order Management -->
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter order desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/order2.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Order Management</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Order Management</h3>
                </div>
                  <table id="myTable" class="responsive-table">
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
          <div class="col l4 m4 s4 gallery-item gallery-expand gallery-filter global desaparece">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray ver">
                <img class="responsive-img" src="{{asset('img/packs.png')}}" alt="placeholder" crossorigin="anonymous">
                <h6 id="text">Country Packs</h6>
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Country Packs</h3>
                </div>
                <br>
                <br>
                 <ul class="collapsible">
                    <li class="active">
                      <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/norte.png')}}" ></i><strong>North America</strong></div>
                      <div class="collapsible-body">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/canada.png')}}" ></i>Canada</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/usa.png')}}" ></i>U.S</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/latino.png')}}" ></i><strong>Latin America</strong></div>
                      <div class="collapsible-body">
                        <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/chile.png')}}" ></i>Chile</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/colombia.png')}}" ></i>Colombia</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/costa_rica.png')}}" ></i>Costa Rica</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/ecuador.png')}}" ></i>Ecuador</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/salvador.png')}}" ></i>El Salvador</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/guatemala.png')}}" ></i>Guatemala</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/mexico.png')}}" ></i>Mexico</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/panama.png')}}" ></i>Panama</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/peru.png')}}" ></i>Peru</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/europa.png')}}" ></i><strong>Europe</strong></div>
                      <div class="collapsible-body">
                         <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/alemania.png')}}" ></i>Germany</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/austria.png')}}" ></i>Austria</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/belgica.png')}}" ></i>Belgium</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/francia.png')}}" ></i>France</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/unido.png')}}" ></i>UK</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/suecia.png')}}" ></i>Sweden</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons"><img class="icon-country" src="{{asset('img/pais/suiza.png')}}" ></i>Switzerland</div>
                              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                          </ul>
                      </div>
                    </li>
                  </ul>
              </div>
             
            </div>
          </div>



    
        </div>

     





          <div class="table-space" ></div>


          <!--Tables-->
        <!--container -->
           <!-- Modal Structure 
                <div id="siglas" class="modal">
                  <div class="modal-content">
                        <p style="text-align: left;">PPV: Personal Point Volume</p>
                        <p  style="text-align: left;">PGPV: Personal Group Point Volume</p>
                        <p  style="text-align: left;">OPV: Organizational Point Volume</p>
                        <p  style="text-align: left;">OPV-OPL: Organizational Point Volume Outside Primary Leg</p>
                        <p  style="text-align: left;">OPV-OP&SL: Organizational Point Volume Outside Primary & Secondary Leg</p>
                  </div>
                  <div class="modal-footer">
                    <a class="modal-close red btn modal-trigger" href="#!">Close</a>
                  </div>
                </div>-->

          
          <!----------------Tabs--------------------------->      
         <div class="container table-tabs" style="margin-right: 50px; ">
            <center>
               <ul id="tabs-swipe-demo" class="tabs" style="height: 60px;">
                <li class="tab col s3"><a class="active " href="#test-swipe-1" style="color: #0aa6b6; ">Your Status</a></li>
                <li class="tab col s3"><a href="#test-swipe-2" class=""  style="color: #0aa6b6; ">Top 5 of my Organization</a></li>
                <li class="tab col s3"><a href="#test-swipe-3" class=""  style="color: #0aa6b6; ">New Signups</a></li>
                <li class="tab col s3"><a href="#test-swipe-4" class=""  style="color: #0aa6b6; ">Top Selling Products</a></li>
                <li class="tab col s3"><a href="#test-swipe-5" class=""  style="color: #0aa6b6; ">Close to Rank</a></li>
              </ul>

              <!--Status-->
              <div id="test-swipe-1" class="col s12">
                <h5>Achieve your pay rank</h5>
                <div>
                    <!--------------Erick---------------------->
                      <!--------test  input ----------->
                  <div class="" style="width: 30%;">
                     <div class="form-group col s10">
                        <label for="ID" style="color: #0aa6b6; font-weight:bold;">Search a consultant</label>
                        <input type="text" required class="form-control" id="abiID" name="abiID" placeholder="ID" onkeypress="return justNumbers(event);">
                      </div>

                      <div class="form-group col s1">
                      </div>

                      <div class="form-group col s6">
                        <label for="name" style="color: #0aa6b6; font-weight:bold;">Name</label> 
                        <input type="text" id="name" name="name" class="form-control" style="color: #000; font-weight:bold;" readonly='readonly'>
                      </div>                        
                  </div>

                <!-------------------------------->
                <div class="col s12 m12 l12" style="text-align: right;">
                  <a class=" btn modal-trigger" href="volume" target="_blank" align="left">volume explanation</a>
                </div>
                </div>
              
                <div hidden class="direct">
                <table class="responsive-table " >
                    <thead>
                      <tr>
                          <th>Volume</th>
                          <th>Volume Earned</th>
                          <th>Progress</th>
                          <th>Volume Needed</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>PPV</a></td>
                        <td>0 </td>
                        <td> 
                          <div class="progress">
                              <div class="determinate" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>100</td>         
                      </tr>
                    </tbody>
                </table>
               </div> 
               <div hidden class="executive">
                <table class="responsive-table " >
                    <thead>
                      <tr>
                          <th>Volume</th>
                          <th>Volume Earned</th>
                          <th>Progress</th>
                          <th>Volume Needed</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>PPV</a></td>
                        <td>0 </td>
                        <td> 
                          <div class="progress">
                              <div class="determinate" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td><a>PGPV</a></td>
                        <td>484 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 90%"></div>
                          </div>
                        </td>
                        <td>916</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div hidden class="silver">
                  <table class="responsive-table " >
                    <thead>
                      <tr>
                          <th>Volume</th>
                          <th>Volume Earned</th>
                          <th>Progress</th>
                          <th>Volume Needed</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>PPV</a></td>
                        <td>0 </td>
                        <td> 
                          <div class="progress">
                              <div class="determinate" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>100</td>                      
                      </tr>
                      <tr>
                        <td><a>PGPV</a></td>
                        <td>484 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 90%"></div>
                          </div>
                        </td>
                        <td>916</td>                        
                      </tr>
                      <tr>
                        <td><a>OPV</a></td>
                        <td>994 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 23%"></div>
                          </div>
                        </td>
                        <td>280.480</td>                        
                      </tr>
                    </tbody>
                  </table>
                </div>
                  <div hidden class="gold">
                  <table class="responsive-table " >
                    <thead>
                      <tr>
                          <th>Volume</th>
                          <th>Volume Earned</th>
                          <th>Progress</th>
                          <th>Volume Needed</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>PPV</a></td>
                        <td>0 </td>
                        <td> 
                          <div class="progress">
                              <div class="determinate" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>100</td>
                       
                      </tr>
                      <tr>
                        <td><a>PGPV</a></td>
                        <td>484 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 90%"></div>
                          </div>
                        </td>
                        <td>916</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV</a></td>
                        <td>994 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 23%"></div>
                          </div>
                        </td>
                        <td>280.480</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV-OPL</a></td>
                        <td>19,520 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 40%"></div>
                          </div>
                        </td>
                        <td>95.181</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV-OPL&SL</a></td>
                        <td>4,801 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 8%"></div>
                          </div>
                        </td>
                        <td>29.406</td>                        
                      </tr>
                    </tbody>
                  </table>
                </div>
                  <!--------------------------------->
                <!-------------------------end erick------------->
                <table class="responsive-table me">
                    <thead>
                      <tr>
                          <th>Volume</th>
                          <th>Points</th>
                          <th>Progress</th>
                          <th>Qualification Requirements</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a>PPV</a></td>
                        <td>0 </td>
                        <td> 
                          <div class="progress">
                              <div class="determinate" style="width: 70%"></div>
                          </div>
                        </td>
                        <td>100</td>
                       
                      </tr>
                      <tr>
                        <td><a>PGPV</a></td>
                        <td>484 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 90%"></div>
                          </div>
                        </td>
                        <td>916</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV</a></td>
                        <td>994 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 23%"></div>
                          </div>
                        </td>
                        <td>280.480</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV-OPL</a></td>
                        <td>19,520 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 40%"></div>
                          </div>
                        </td>
                        <td>95.181</td>
                        
                      </tr>
                      <tr>
                        <td><a>OPV-OPL&SL</a></td>
                        <td>4,801 </td>
                        <td>
                          <div class="progress">
                              <div class="determinate" style="width: 8%"></div>
                          </div>
                        </td>
                        <td>29.406</td>                        
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <br>
                 <table class="responsive-table">
                    <thead>
                      <tr>
                         
                      </tr>
                    </thead>

                    <tbody>
                     
                    </tbody>
                  </table>

              </div>
              <!--Finish Status-->


              <div id="test-swipe-2" class="col s12">

                <h5>Top 5 of my Organization</h5>

                 <div class="row" style="width: 90%;">

                   <div class="input-field col s4  m4 l4 xl4">
                    <select>
                      <option value="1">PPV</option>
                      <option value="2">PGPV</option>
                      <option value="3">OPV</option>
                      <option value="1">OPV</option>
                      <option value="2">OPV-OPL</option>
                      <option value="3">OPV-OPL&SL</option>
                      <option value="3">SIGNUPS</option>
                    </select>
                    <label>Type:</label>
                  </div>


                  <div class="input-field col  s8  m8 l8 xl8" style="text-align: right;"> 
                    <a class=" btn modal-trigger" href="volume" target="_blank" align="left">volume explanation</a>
                  </div>
                </div>


                <table class="responsive-table">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>PPV</th>
                          <th>PGPV</th>
                          <th>OPV</th>
                          <th>OPV-OPL</th>
                          <th>OPV-OPL&SL</th>
                          <th>Signups</th>
                          <th>Sponsor</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                        <td>5</td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                       
                      </tr>
                      <tr>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                        <td>5</td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                       
                      </tr>
                       <tr>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                        <td>5</td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                       
                      </tr>
                    </tbody>
                  </table>
                  <br>
              </div>


              <div id="test-swipe-3" class="col s12">
                <h5>New signups</h5>

                <div class="row" style="width: 90%;">

                   <div class="input-field col s4  m4 l4 xl4">
                    <select>
                      <option value="1">Any</option>
                      <option value="2">Consultant</option>
                      <option value="3">Customer</option>
                    </select>
                    <label>Type:</label>
                  </div>

                  <div class="input-field col s4  m4 l4 xl4">
                    <select>
                      <option value="1">03/2019</option>
                      <option value="2">04/2019</option>
                      <option value="3">05/2019</option>
                    </select>
                    <label>Period:</label>
                  </div>

                  <div class="input-field col s4  m4 l4 xl4">            
                      <a class=" waves-light btn">Run</a>
                  </div>

                  <div class="input-field col  s12  m12 l12 xl12" style="text-align: right;"> 
                    <a class=" btn modal-trigger" href="volume" target="_blank" align="left">volume explanation</a>
                  </div>
                </div>
                <table class="responsive-table">
                    <thead>
                      <tr>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Sponsor</th>
                          <th>PPV</th>
                          <th>PGPV</th>
                          <th>OPV</th>
                          <th>OPV-OPL</th>
                          <th>OPV-OPL&SL</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>02/26/19</td>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                       
                      </tr>
                      <tr>
                        <td>08/19/19</td>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                       
                      </tr>
                       <tr>
                        <td>08/09/19</td>
                        <td><a> VILLARREAL LOZANO, MINERVA (7787003)</a></td>
                        <td>VILLARREAL LOZANO, CRISTINA (7699303)</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940</td>
                        <td>2,940 </td>
                        <td>2,906</td>
                       
                      </tr>
                    </tbody>
                  </table>
                  <br>
              </div>

            <!---------top Seling--------->
            <div id="test-swipe-4" class="col s12 topSell">

               
            </div>

                   <!------------test-swipe-5------------>
                  <div id="test-swipe-5" class="col s12">
                <h5>Close to rank</h5>

                 <div class=" s4 m4 l4" style="width: 30%;">
                  <div class="col s3">
                    <select id="Close_Rank" name="consultantcloserank" class="form-control  form-control-lg">                   
                      <option value="0">Select rank</option>
                      <option value="Executive">Executive</option>
                      <option value="Silver">Silver</option>
                      <option value="Gold">Gold</option>
                      <option value="Platinum">Platinum</option>
                      <option value="Diamond">Diamond</option>
                      <option value="Royal Diamond">Royal Diamond</option>                                      
                    </select>
                  </div> 
                </div>

                <div class="rankexecutive" hidden >
                  <table class="responsive-table" style="width: 98%;">
                      <thead>
                       
                        <tr>
                            <th roswpan="2" class=" brand-logo center">Level</th>
                            <th class=" brand-logo center">Name</th>
                            <th class=" brand-logo center">Dist ID</th>
                            <th class=" brand-logo center">Rank</th>
                            <th class=" brand-logo center">3 Mo Comb PGPV</th>
                            <th class=" brand-logo center">OPV-OPL</th>
                            <th class=" brand-logo center">OPV-OPL&SL</th>
                            <th class="brand-logo center">100 PPV Met in last 3rd months</th>
                            <th class="brand-logo center">100 PPV Met in last 2nd months</th>
                            <th class="brand-logo center">100 PPV Met in last 1st month</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td class=" brand-logo center">2</td>
                          <td class=" brand-logo center"><a>Doe, John</a></td>
                          <td class=" brand-logo center">123456700</td>
                          <td class=" brand-logo center">Executive</td>
                          <td class=" brand-logo center">4000</td>
                          <td class=" brand-logo center">600</td>
                          <td class=" brand-logo center">150</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                        </tr>
                        <tr>
                          <td class=" brand-logo center">2</td>
                          <td class=" brand-logo center"><a>Doe, John</a></td>
                          <td class=" brand-logo center">123456700</td>
                          <td class=" brand-logo center">Executive</td>
                          <td class=" brand-logo center">4000</td>
                          <td class=" brand-logo center">600</td>
                          <td class=" brand-logo center">150</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                        </tr>
                         <tr>
                          <td class=" brand-logo center">2</td>
                          <td class=" brand-logo center"><a>Doe, John</a></td>
                          <td class=" brand-logo center">123456700</td>
                          <td class=" brand-logo center">Executive</td>
                          <td class=" brand-logo center">4000</td>
                          <td class=" brand-logo center">600</td>
                          <td class=" brand-logo center">150</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                        </tr>
                         <tr>
                          <td class=" brand-logo center">2</td>
                          <td class=" brand-logo center"><a>Doe, John</a></td>
                          <td class=" brand-logo center">123456700</td>
                          <td class=" brand-logo center">Executive</td>
                          <td class=" brand-logo center">4000</td>
                          <td class=" brand-logo center">600</td>
                          <td class=" brand-logo center">150</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                          <td class=" brand-logo center" >x</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="ranksilver" hidden >
                    <table class="responsive-table"  style="width: 98%;">
                        <thead>
                          
                        <tr>
                            <th roswpan="2" class=" brand-logo center">Level</th>
                            <th class=" brand-logo center">Name</th>
                            <th class=" brand-logo center">Dist ID</th>
                            <th class=" brand-logo center">Rank</th>
                            <th class=" brand-logo center">3 Mo Comb PGPV</th>
                            <th class=" brand-logo center">OPV-OPL</th>
                            <th class=" brand-logo center">OPV-OPL&SL</th>
                            <th colspan="3"  class=" brand-logo center">100 PPV Met in last 3 months</th>
                        </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td class=" brand-logo center" >2</td>
                            <td class=" brand-logo center" ><a>Doe, John</a></td>
                            <td class=" brand-logo center" >123456700</td>
                            <td class=" brand-logo center" >Executive</td>
                            <td class=" brand-logo center" >4000</td>
                            <td class=" brand-logo center" >600</td>
                            <td class=" brand-logo center" >150</td>
                            <td class=" brand-logo center" style="border-right: 1px solid #c4c4c4">x</td>
                            <td class=" brand-logo center" style="border-right: 1px solid #c4c4c4">x</td>
                            <td class=" brand-logo center" >x</td>
                          </tr>
                         
                        </tbody>
                      </table>
                  </div>

                  <div class="rankgold" hidden >
                    <table class="responsive-table">
                        <thead>
                          <tr>
                              <th >Level</th>
                              <th >Name</th>
                              <th >Dist ID</th>
                              <th >Rank</th>
                              <th >100 PPV</th>
                              <th >PGPV</th>
                              <th >OPV</th>
                              <th >OPV-OPL</th>
                              <th >OPV-OPL&SL</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td >2</td>
                            <td ><a>Doe, John</a></td>
                            <td >123456700</td>
                            <td >Executive</td>
                            <td >Yes</td>
                            <td >800</td>
                            <td >8000</td>
                            <td >3000</td>
                            <td >700</td>
                          </tr>
                         
                        </tbody>
                      </table>
                  </div>
                  <br>
              </div>
                <!------------------------->
            </center>
          </div> <!-- /.container -->
      </div><!-- /.container -->
    </div>
<footer class="page-footer" style="background-color: black;">
  <div class="container">
    <div class="row">
      <div class="col s6 m3">
        <img class="materialize-logo" src="{{asset('img/logo.png')}}" alt="Materialize">
        <p>Nikken Inc.</p>
      </div>
      <div class="col s6 m3">
        <h5>Company</h5>
        <ul>
              <li><a href="#!" class="footer-color">Contac Us</a></li>
              <li><a href="#!" class="footer-color">Shop</a></li>
              <li><a href="#!" class="footer-color">Countries</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Support</h5>
        <ul>
              <li><a href="#!" class="footer-color">Return Policy</a></li>
              <li><a href="#!" class="footer-color">Privacy Policy</a></li>
              <li><a href="#!" class="footer-color">Terms of Use</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Connect</h5>
         <ul>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/tweter.png')}}" >Twitter</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/facebook.png')}}" >Facebook</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/youtube.png')}}" >Youtube</a></li>
              <li><a href="#!" class="footer-color"><img class="icon-menu" src="{{asset('img/wordpress.png')}}" >Nikken Wellness</a></li>
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
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <script src="{{ asset('js/init.js') }}"></script>



    <style type="text/css">
      #gridContainer {
      height: 440px;
  }

  .options {
      padding: 20px;
      margin-top: 20px;
      background-color: rgba(191, 191, 191, 0.15);
  }

  .caption {
      font-size: 18px;
      font-weight: 500;
  }

  .option {
      margin-top: 10px;
  }

  .option > span {
      margin-right: 10px;
  }

  .option > .dx-selectbox {
      display: inline-block;
      vertical-align: middle;
  }
    </style>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>


    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script type="text/javascript" src="https://cdn.worldpay.com/v1/worldpay.js"></script>


<script>

function show(){
  document.getElementById('obj1').style.display = 'block';
}
                       
$(document).ready(function(){
   $("#send").click(function(){
        $("#pwp").scrollTop(1300)
    });
});



$(window).load(function() {
    $(".loader").fadeOut("slow");
});

$("#save_pwp_link").submit(function () {  
    if($(".pwp_link").val().length <= 3) {  
       // alert("El teléfono es obligatorio"); 
       Swal.fire({
          type: 'error',
          title: 'PWP name must be between 3 and *** characters'
        }) 
        return false; 
    }
});

//prohibir el ingreso de caracteres especiales
$(".pwp_link").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode < 48 || key.charCode > 57) //letras minusculas
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });

//prohibir el pegar texto
window.onload = function() {
  var myInput = document.getElementById('pwp_lin');
  myInput.onpaste = function(e) {
    e.preventDefault();
    Swal.fire({
          type: 'error',
          title: 'Prohibited action'
    }) 
    return false;
  }
};


$("#sendpwp").click(function () {  
    if($(".name").val().length < 1) {  
       // alert("El teléfono es obligatorio"); 
       Swal.fire({
          type: 'error',
          title: 'Name is required'
        }) 
        return false;  

    }else if ($(".mail").val().length < 1 ){
       Swal.fire({
          type: 'error',
          title: 'Email is required'
        }) 
        return false; 

    }else if($(".mail").val().indexOf('@', 0) == -1 || $(".mail").val().indexOf('.', 0) == -1) {  
        Swal.fire({
          type: 'error',
          title: 'Invalid email'
        })   
        return false;

    }else if($(".phone").val().length < 1){
       Swal.fire({
          type: 'error',
          title: 'Phone is required'
        }) 
        return false; 

    }else  if(isNaN($(".phone").val())) {  
        Swal.fire({
          type: 'error',
          title: 'Telephone must be numeric'
        })  
        return false;  

    }else if($(".phone").val().length != 10) {  
       Swal.fire({
          type: 'error',
          title: 'Telephone must be 10 digits long'
        })  
        return false;  
    }   

});

//Erick Js
var selectcloserank = document.getElementById('Close_Rank');
selectcloserank.addEventListener('change',
  function(){
    var selectedOptioncloserank = this.options[selectcloserank.selectedIndex];
    console.log(selectedOptioncloserank.value + ': ' + selectedOptioncloserank.text);


   if (selectedOptioncloserank.value == "Executive") {
      $(".rankexecutive").show();
      $(".ranksilver").hide();
      $(".rankgold").hide();

   } 

   if (selectedOptioncloserank.value == "Silver") {
      $(".rankexecutive").hide();
      $(".ranksilver").show();
      $(".rankgold").hide();
   } 

   if (selectedOptioncloserank.value == "Gold") {
      $(".rankexecutive").hide();
      $(".ranksilver").hide();
      $(".rankgold").show();
   } 

   if (selectedOptioncloserank.value == "Platinum") {
      $(".rankexecutive").hide();
      $(".ranksilver").hide();
      $(".rankgold").show();
   } 

   if (selectedOptioncloserank.value == "Diamond") {
      $(".rankexecutive").hide();
      $(".ranksilver").hide();
      $(".rankgold").show();
   } 

   if (selectedOptioncloserank.value == "Royal Diamond") {
      $(".rankexecutive").hide();
      $(".ranksilver").hide();
      $(".rankgold").show();
   }

  }); 

$("#Year").change(function(){
   var valueyear = $(this).val();
    $("#yeartax").val(valueyear);
  });




  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  
$(".btnAccountInquiry").click(function(event) {
  $("#legendSection").show();
  $("#Account_link").hide();
}); 

$(".link").click(function(event) {
  $("#Account_link").show();
  $("#legendSection").hide();
}); 

$("#continue").click(function(event) {
  if($("#RadioGroup1 input[value='detail']").is(':checked') && $("#RadioGroup2 input[value='primary']").is(':checked')){
    $("#detailPrimary").show();
    $("#detailSecondary").hide();
    $("#earningsPrimary").hide();
    $("#earningsSecondary").hide();
    $("#leadershipPrimary").hide();
  } else if($("#RadioGroup1 input[value='detail']").is(':checked') && $("#RadioGroup2 input[value='secondary']").is(':checked')){
    $("#detailSecondary").show();
    $("#detailPrimary").hide();
    $("#earningsPrimary").hide();
    $("#earningsSecondary").hide();
    $("#leadershipPrimary").hide();
  } else if($("#RadioGroup1 input[value='earnings']").is(':checked') && $("#RadioGroup2 input[value='primary']").is(':checked')){
    $("#earningsPrimary").show();
    $("#earningsSecondary").hide();
    $("#detailSecondary").hide();
    $("#detailPrimary").hide();
    $("#leadershipPrimary").hide();
  } else if($("#RadioGroup1 input[value='earnings']").is(':checked') && $("#RadioGroup2 input[value='secondary']").is(':checked')){
    $("#earningsSecondary").show();
    $("#detailSecondary").hide();
    $("#detailPrimary").hide();
    $("#earningsPrimary").hide();
    $("#leadershipPrimary").hide();
  } else if($("#RadioGroup1 input[value='leadership']").is(':checked') && $("#RadioGroup2 input[value='primary']").is(':checked')){ 
    $("#leadershipPrimary").show();
    $("#earningsPrimary").hide();
    $("#earningsSecondary").hide();
    $("#detailSecondary").hide();
    $("#detailPrimary").hide();
  } else if($("#RadioGroup1 input[value='leadership']").is(':checked') && $("#RadioGroup2 input[value='secondary']").is(':checked')){
    alert('Please select another option');
  } 
}); 
//erick js end
</script>




      <script type="text/javascript">

      $(document).ready(function() {
        ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                          console.log( editor );
                    } )
                    .catch( error => {
                           console.error( error );
                } );


       // $.fn.dataTable.ext.search.push(
       /*   function( settings, data, dataIndex ) {
                var min = parseInt( $('#min').val(), 10 );
                var max = parseInt( $('#max').val(), 10 );
                var lv = parseFloat( data[3] ) || 0; // use data for the level column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && lv <= max ) ||
                     ( min <= lv   && isNaN( max ) ) ||
                     ( min <= lv   && lv <= max ) )
                {
                    return true;
                }
                return false;
            }
*/

          

       /* $('#genealogy_tab tbody').on( 'click', 'tr', function ()
         {
          Swal.fire({
            type: 'error',
            title: ''+this.innerHTML 
          })  
        } );*/

      /* var table =  $('#genealogy_tab').DataTable({
            "order": [[ 1, "asc" ]],
            "pageLength": 30,
            "stateSave": true,
            "processing": true,
            "serverSide": true,
            "ajax": "genealogy/{{-- $ids --}}",
            columns:[
              {data: 'Line'},
              {data: 'Level'},
              {data: 'associateid'},
              {data: 'associatename'},
              {data: 'Distributor_status'},
              {data: 'email'},
              {data: 'mobile_number'},
              {data: 'country'},
              {data: 'PinRank'},
              {data: 'PayRank'},
              {data: 'InactiveMonths'},
              {data: 'RenewalDate'},
            ],
            "language": {
                          "sProcessing":     "Processing...",
                          "sLengthMenu":     " _MENU_ ",
                          "sZeroRecords":    "No results found",
                          "sEmptyTable":     "Ningún dato disponible en esta tabla",
                          "sInfo":           "Showing records  _START_ of _END_ from a total of _TOTAL_ records",
                          "sInfoEmpty":      "Showing records 0 of 0 from a total of 0 records",
                          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                          "sInfoPostFix":    "",
                          "sSearch":         "Search:",
                          "sUrl":            "",
                          "sInfoThousands":  ",",
                          "sLoadingRecords": "Loading Records...",
                          "oPaginate": {
                              "sFirst":    "First",
                              "sLast":     "Last",
                              "sNext":     "Next",
                              "sPrevious": "Previous"
                          },
                          "oAria": {
                              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                          }
                      },

                        dom: 'Bfrtip',

                        buttons: [
                          {
                              extend:    'excelHtml5',
                              text:      'Excel',
                              titleAttr: 'Excel',
                              className: 'btn '
                          },
                          {
                              extend:    'csvHtml5',
                              text:      'CSV',
                              titleAttr: 'CSV',
                              className: 'btn '
                          },
                          {
                              extend:    'pdfHtml5',
                              orientation: 'landscape',
                              pageSize: 'LEGAL',
                              text:      'PDF',
                              titleAttr: 'PDF',
                              className: 'btn '
                          },
                          {
                              extend:    'print',
                              text:      'Print',
                              titleAttr: 'Print',
                              className: 'btn '
                          },
                           {
                                extend: 'colvis',
                                postfixButtons: [ 'colvisRestore' ]
                            }
                        ]
          });
           
          // Event listener to the two range filtering inputs to redraw on input
          $('#min, #max').keyup( function() {
              table.draw();
          } );*/



      //////////////////////Reporte Upline//////////////////////////////////////////
         $.fn.dataTable.ext.errMode = 'none';
         $('#upline').DataTable({
            "searching": false,
            "ordering": false,
            "processing": true,
            "serverSide": true,
            
            "ajax": "http://mynikkentest.nikkenlatam.com/upline/{{ $ids }}",
            //"ajax": "upline/{{-- $ids --}}",
            columns:[
              {data: 'associateid'},
              {data: 'Name'},
              {data: 'Home_Phone'},
              {data: 'EMAIL'},
            ],

            "language": {
                          "sProcessing":     "Processing...",
                          "sLengthMenu":     " _MENU_ ",
                          "sZeroRecords":    "No results found",
                          "sEmptyTable":     "Ningún dato disponible en esta tabla",
                          "sInfo":           "Showing records  _START_ of _END_ from a total of _TOTAL_ records",
                          "sInfoEmpty":      "Showing records 0 of 0 from a total of 0 records",
                          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                          "sInfoPostFix":    "",
                          "sSearch":         "Search:",
                          "sUrl":            "",
                          "sInfoThousands":  ",",
                          "sLoadingRecords": "Loading Records...",
                          "oPaginate": {
                              "sFirst":    "First",
                              "sLast":     "Last",
                              "sNext":     "Next",
                              "sPrevious": "Previous"
                          },
                          "oAria": {
                              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                          }
                      },
                        dom: 'Bfrtip',
                        buttons: [
                          {
                              extend:    'excelHtml5',
                              text:      'Excel',
                              titleAttr: 'Excel',
                              className: 'btn '
                          },
                          {
                              extend:    'csvHtml5',
                              text:      'CSV',
                              titleAttr: 'CSV',
                              className: 'btn '
                          },
                          {
                              extend:    'pdfHtml5',
                              text:      'PDF',
                              titleAttr: 'PDF',
                              className: 'btn '
                          },
                          {
                              extend:    'print',
                              text:      'Print',
                              titleAttr: 'Print',
                              className: 'btn '
                          }
                        ]
          });

      });


///////Genealogia/////////////////////////////////
 $(document).ready(function(){ 
      //Report();
    }); 
$('#periodGenealogy').change(function(){
   var periodo = $('select[id=periodGenealogy]').val();
   var id = $('input[id=fromIDgen]').val();
   reloadReport(periodo, id);
   filtersGen();
});

$('#fromIDgen').change(function(){
   var id = $('input[id=fromIDgen]').val();
   var periodo = $('select[id=periodGenealogy]').val();
   reloadReport(periodo, id);
   filtersGen();
});
    

  
  function reloadReport(periodo, id){

    // Clear and reload Table of report
    if(id > 0){
      var idsponsor = id
    }else{
      var idsponsor = {{ $ids }};
    }
    if(periodo > 0){
      var period = periodo;
    }else{
      var y = new Date();
      var year = y.getFullYear();
      var m = new Date();
      var month = m.getMonth() + 1;
      var period = year+month;
    }
    //var period = 201909;
    
    var genealogytable = $('#genealogy').DataTable({
     
      //stateSave: true,
        destroy: true,
        ajax: "reloadTab/?idsponsor=" + idsponsor + "&&period=" + period,
        //ajax: "http://mynikkentest.nikkenlatam.com/reloadTab/?idsponsor=" + idsponsor + "&&period=" + period,
        deferRender: true,
        columns: [
            {
                data: null,
                className: "center",
                defaultContent: '<td> <p><label> <input type="checkbox" name="email[]" class="check_mail"  name="countries[]" value="" /><span></span></label></p> </td>'
            },
            {data: 'Line'},
            {data: 'Level'},
            {data: 'associateid'},
            {data: 'associatename'},
            {data: 'Distributor_status'},
            {data: 'email'},
            {data: 'mobile_number'},
            {data: 'alternative_number'},
            {data: 'country'},
            {data: 'PinRank'},
            {data: 'PayRank'},
            {data: 'InactiveMonths'},
            {data: 'RenewalDate', type:"date"},
        ],
        rowId: function(a) {
            return a.email;
        },
          "columnDefs": [
            { className: "line_number", "targets": [ 1 ] },
            { className: "level", "targets": [ 2 ] },
            { className: "associateid", "targets": [ 3 ] },
            { className: "associatename", "targets": [ 4 ] },
            { className: "distributor_status", "targets": [ 5 ] },
            { className: "email", "targets": [ 6 ] },
            { className: "mobile_number", "targets": [ 7 ] },
            { className: "alternative_number", "targets": [ 8 ] },
            { className: "country", "targets": [ 9 ] },
            { className: "PinRank", "targets": [ 10 ] },
            { className: "PayRank", "targets": [ 11 ] },
            { className: "InactiveMonths", "targets": [ 12 ] },
            { className: "RenewalDate", "targets": [ 13 ] },
          ],
        select: true,
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, 100 ],
            [ '10 rows', '25 rows', '50 rows', '100 rows' ]
        ],
        buttons: [
            'pageLength',
            {
                              extend:    'excelHtml5',
                              text:      'Excel',
                              titleAttr: 'Excel',
                              className: 'btn  waves-light'
            },
        ]
    });


    $('.ver input[type="checkbox"]').on('change', function(e) {


        // Get the column API object
        var col = genealogytable.column($(this).attr('data-target'));

        // Toggle the visibility
        col.visible(!col.visible());
    });

$('#minLevel, #maxLevel').keyup( function() {
  genealogytable.draw();
});


$.fn.dataTable.ext.search.push(
  function( settings, data, dataIndex ) {
    var min = parseInt( $('#minLevel').val(), 10 );
    var max = parseInt( $('#maxLevel').val(), 10 );
    var lv = parseFloat( data[2] ) || 0; // use data for the level column

    if ( ( isNaN( min ) && isNaN( max ) ) ||
    ( isNaN( min ) && lv <= max ) ||
    ( min <= lv   && isNaN( max ) ) ||
    ( min <= lv   && lv <= max ) )
    {
      return true;
    }
      return false;
  }
);

  $('#MinRangeDateGen, #MaxRangeDateGen').keyup( function() {
      genealogytable.draw();
      } );

    $.fn.dataTable.ext.search.push(

        function( settings, data, dataIndex ) {
            //var min = $("input[id$='MinRangeDateGen']").datepicker().format("yyyy-mm-dd");
            //var max = $("#input[id$='MaxRangeDateGen']").datepicker().format("yyyy-mm-dd");
            var min = Date.parse( $('#MinRangeDateGen').val());
            var max = Date.parse( $('#MaxRangeDateGen').val());
            //var lv = parseFloat( data[13] ) || 0; // use data for the level column
            var date = Date.parse( data[1] ) || 0;

            if ( ( isNaN( min ) && isNaN( max ) ) ||
               ( isNaN( min ) && date <= max ) ||
               ( min <= date   && isNaN( max ) ) ||
               ( min <= date   && date <= max ) )
            {
                return true;
            }
            return false;
        }
      );

};

  $(document).ready(function(){
    $('.DateGen').datepicker({
      format: 'yyyy-mm-dd'
    });
  });



//////////////////End  genealogia/////////////////////////////////////////////
//////////////////carga de filtros dela genealogia////////////////////////////
    function filtersGen(){
            var idsponsor = {{ $ids }}
            $.ajax({
                type: 'GET',
                //url: 'loadFilters',
                url: 'http://mynikkentest.nikkenlatam.com/loadFilters',
                data: {sponsorid: idsponsor},
                success: function(Response) {
                    var table = $('#genealogy').DataTable();
                    if(Response[0].Line_Number == 'true '){
                        $("#line_numberGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(1);
                        col.visible(!col.visible());
                    }
                    if(Response[0].Levels == 'true '){
                        $("#levelGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(2);
                        col.visible(!col.visible());
                    }
                    if(Response[0].consultant_id == 'true '){
                        $("#associateidGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(3);
                        col.visible(!col.visible());
                    }
                    if(Response[0].distributor_status == 'true '){
                        $("#distributor_statusGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(5);
                        col.visible(!col.visible());
                    }
                    if(Response[0].email_address == 'true '){
                        $("#emailGenea").prop('checked', true)
                    }
                    else{
                        var col = table.column(6);
                        col.visible(!col.visible());
                    }
                    if(Response[0].mobile_phone == 'true '){
                        $("#mobile_numberGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(7);
                        col.visible(!col.visible());
                    }
                    if(Response[0].alternative_phone == 'true '){
                        $("#alternative_numberGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(8);
                        col.visible(!col.visible());
                    }
                    if(Response[0].country == 'true '){
                        $("#countryGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(9);
                        col.visible(!col.visible());
                    }
                    if(Response[0].pay_rank == 'true '){
                        $("#pay_rankGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(11);
                        col.visible(!col.visible());
                    }
                    if(Response[0].inactive_months == 'true '){
                        $("#inactive_monthsGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(12);
                        col.visible(!col.visible());
                    }
                    if(Response[0].renewal_date == 'true '){
                        $("#renewal_dateGen").prop('checked', true)
                    }
                    else{
                        var col = table.column(13);
                        col.visible(!col.visible());
                    }


                    if(Response[0].period_1 == 'true '){
                        $("#period1Gen").prop('checked', true)
                    }
                    else{
                    }


                    if(Response[0].period_2 == 'true '){
                        $("#period2Gen").prop('checked', true)
                    }
                    else{
                    }


                    if(Response[0].period_3 == 'true '){
                        $("#period3Gen").prop('checked', true)
                    }
                    else{
                    }
                }
            });
    };
////////////////////////////////end filtros genealogia////////////////////////


///////////////////////////////add filters//////////////////////////////////
$("#savefilter").on('click',function(){

          var Line;
          var Level;
          var associateid;
          var associatename;
          var Distributor_status;
          var email;
          var mobile_number;
          var alternative_number;
          var country;
          var PinRank;
          var PayRank;
          var InactiveMonths;
          var RenewalDate;
          var period1;
          var period2;
          var period3;

        if($("input[id='line_numberGen']").is(':checked')){
          Line = true;
        }else{
          Line = false;
        }
        if($("input[id='levelGen']").is(':checked')){
          Level = true;
        }else{
          Level = false;
        }
        if($("input[id='associateidGen']").is(':checked')){
          associateid = true;
        }else{
          associateid = false;
        }
        if($("input[id='associatenameGen']").is(':checked')){
          associatename = true;
        }else{
          associatename = false;
        }
        if($("input[id='distributor_statusGen']").is(':checked')){
          Distributor_status = true;
        }else{
          Distributor_status = false;
        }
        if($("input[id='emailGenea']").is(':checked')){
          email = true;
        }else{
          email = false;
        }
        if($("input[id='mobile_numberGen']").is(':checked')){
          mobile_number = true;
        }else{
          mobile_number = false;
        }
        if($("input[id='alternative_numberGen']").is(':checked')){
          alternative_number = true;
        }else{
          alternative_number = false;
        }
        if($("input[id='countryGen']").is(':checked')){
          country = true;
        }else{
          country = false;
        }
        if($("input[id='pay_rankGen']").is(':checked')){
          PayRank = true;
        }else{
          PayRank = false;
        }
        if($("input[id='inactive_monthsGen']").is(':checked')){
          InactiveMonths = true;
        }else{
          InactiveMonths = false;
        }
        if($("input[id='renewal_dateGen']").is(':checked')){
          RenewalDate = true;
        }else{
          RenewalDate = false;
        }
        if($("input[id='period1Gen']").is(':checked')){
          period1 = true;
        }else{
          period1 = false;
        }
        if($("input[id='period2Gen']").is(':checked')){
          period2 = true;
        }else{
          period2 = false;
        }
        if($("input[id='period3Gen']").is(':checked')){
          period3 = true;
        }else{
          period3 = false;
        }
        $.ajax({
            type: 'GET',
             //url: 'saveFilters',
            url: 'http://mynikkentest.nikkenlatam.com/saveFilters',
            data: { 
               ids: {{ $ids }},
               Line: Line,
               Level: Level,
               associateid: associateid,
               associatename: associatename,
               Distributor_status: Distributor_status,
               email: email,
               mobile_number: mobile_number,
               alternative_number: alternative_number,
               country: country,
               PinRank: PinRank,
               PayRank: PayRank,
               InactiveMonths: InactiveMonths,
               RenewalDate: RenewalDate,
               period1: period1,
               period2: period2,
               period3: period3,
            },
            beforeSend: function() {
             
            }, success: function (msg) {
               Swal.fire({
                  type: 'success',
                  title: 'Saved filters',
                  showConfirmButton: false,
                  timer: 2000
                }) 

            }, error: function(msg){
               Swal.fire({
                type: 'error',
                title: 'Filters not saved'
              }) 
            }
          });
    });

/////////////////////////////////////////////////////////////////////////////



  ///////////funcion para mostrar tabla top Selling/////////////////////

    $(document).ready(function(){ 
      topSell();
    });  
    var topSell = function(){
      $.ajax({
        type:'get',
         //url:'http://mynikkentest.nikkenlatam.com/top',
         url:'top',
        success:function(data){
          $('.topSell').html(data);
          //console.log(data);
        }
      });
    }


//////////////////////Erick///////////////////////////////////

//year filter
$("#Year").on('change',function(){
        
        var year = $(this).val();
        console.log(year);

       

        $.ajax({
          url: "http://mynikkentest.nikkenlatam.com/selectyear", /* Llamamos a tu archivo */
          type: "GET",
          contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), year: year
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#contenido").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#contenido").append("<tr><td>" + value.Period + "</td><td>" + value.Name + "</td><td>" + value.Purchases + "</td><td>" + value.Commission_Amount + "</td><td>+</td><td>" + value.Bonus_Deduction+ "</td><td>+</td><td>" + value.Other+ "</td><td>=</td><td>" + value.Adjusted_Gross+ "</td><td>" + value.Backup_Withholding+ "</td></tr>");
                  });
              }
          }
        });

    
    }); 


//total year filter
$("#Year").on('change',function(){
        
        var year = $(this).val();
        console.log(year);

        $.ajax({
          url: "http://mynikkentest.nikkenlatam.com/selecttotalyear", /* Llamamos a tu archivo */
          type: "GET",
          contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), year: year
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#totaltax").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#totaltax").append("<tr><td>Totals</td><td></td><td>" + value.TotalPurchases + "</td><td>" + value.TotalCommission_Amount + "</td><td>+</td><td>" + value.TotalBonus_Deduction+ "</td><td>+</td><td>" + value.TotalOther+ "</td><td>=</td><td>" + value.TotalAdjusted_Gross+ "</td><td>" + value.TotalBackup_Withholding+ "</td></tr>");
                  });
              }
          }
        });

    
    }); 

// name filte
 $("#btnoptiontax").on('click',function(){
      $.ajax({
          url: "http://mynikkentest.nikkenlatam.com/selecttaxname", /* Llamamos a tu archivo */
          type: "GET",
         // contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), Name: $("#Name").val(), year: $("#yeartax").val()
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#contenido").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#contenido").append("<tr><td>" + value.Period + "</td><td>" + value.Name + "</td><td>" + value.Purchases + "</td><td>" + value.Commission_Amount + "</td><td>+</td><td>" + value.Bonus_Deduction+ "</td><td>+</td><td>" + value.Other+ "</td><td>=</td><td>" + value.Adjusted_Gross+ "</td><td>" + value.Backup_Withholding+ "</td></tr>");
                  });
              }
          }
        });
      }); 

// total name filter
 $("#btnoptiontax").on('click',function(){
      $.ajax({
          url: "http://mynikkentest.nikkenlatam.com/selecttotaltaxname", /* Llamamos a tu archivo */
          type: "GET",
         // contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), Name: $("#Name").val(), year: $("#yeartax").val()
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#totaltax").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#totaltax").append("<tr><td>Totals</td><td></td><td>" + value.TotalPurchases + "</td><td>" + value.TotalCommission_Amount + "</td><td>+</td><td>" + value.TotalBonus_Deduction+ "</td><td>+</td><td>" + value.TotalOther+ "</td><td>=</td><td>" + value.TotalAdjusted_Gross+ "</td><td>" + value.TotalBackup_Withholding+ "</td></tr>");
                  });
              }
          }
        });
      }); 


///////////////////////////Scrip Renewal Frank///////////////////////////////////////////////
  $(function () {
    var worldPayKey = "<?php echo config('worldpay.sandbox.service'); ?>";
    var form = document.getElementById('renewalForm');
    Worldpay.useOwnForm({
      'clientKey': worldPayKey,
      'form': form,
      'reusable': false,
      'callback': function (status, response) {
        if (response.error) {
          var error = response.error.message.length;
          if(error > 0 ){
            Swal.fire(
              'Validate the follow payment information:',
              response.error.message.toString(),
              'error'
            )
          }
        }
        else {
          M.toast({html: 'PROCESSING PAYMENT...', classes: 'rounded'});
          $("#continuePayment").attr("disabled", true);
          var token = response.token;
          Worldpay.formBuilder(form, 'input', 'hidden', 'token', token);
          var data = $('#renewalForm').serialize();
          $.ajax({
            type: 'POST',
            url: 'charge',
            data: data,
            success: function(Result) {
              if(Result.paymentStatus == 'SUCCESS' || Result.paymentStatus == 'success'){
                $('#renewalForm').trigger("reset");
                swal.fire({
                  title: Result.paymentStatus,
                  text: "Payment made successfully!!",
                  showCancelButton: false,
                  type: 'success',
                }).then((res) => {
                  $('#alertRenewal').css('display', 'none');
                  $('#modal1').modal('close');
                });
              }
              else{
                Swal.fire({
                  type: 'error',
                  title: Result.paymentStatus,
                  text: 'Payment declined',
                })
              }
            }
          });
        }
      }
    });
  });

/*-----------------------IFRAME-------------------- */
function resizeframe(){
 window.addEventListener("message", receiveSize, false);
}

function receiveSize(e) {
  if (e.origin = "https://test.nikken.com:3000/"){
    document.getElementById("frame-us").style.height = e.data + "px";
  }
}
/*-----------------------END IFRAME-------------------- */
//////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////// DATE RANGE FILTER START /////////////////////////////////////////

$.fn.dataTable.ext.search.push(
  function (settings, data, dataIndex) {
    
    var Range = $("#range").val();
    
    var valid = true;
    var min = moment($("#txtMin").val());
    var max = moment($("#txtMax").val());

    switch(Range){
      case "R":
        if (!min.isValid()) { 
          min = null; 
        }
        
        if (!max.isValid()) { 
          max = null; 
        }

        if (min === null && max === null) {
          valid = true;
        }
        else {
          $.each(settings.aoColumns, function (i, col) {
            if (col.type == "date") {
              var cDate = moment(data[i]);
              if (cDate.isValid()) {
                if (max !== null && max.isBefore(cDate)) {
                  valid = false;
                }
                if (min !== null && cDate.isBefore(min)) {
                  valid = false;
                }
              }
              else {
                valid = false;
              }
            }
          });
        }
        break;
    }
    
    return valid;
  }
);

$(document).ready( function () {
  $("#txtMax").on('change', function () {
    $('#genealogy').DataTable().draw();
  });
  var table = $('#genealogy').DataTable({
    columns:[
      {name: 'Line'},
      {name: 'Level'},
      {name: 'associateid'},
      {name: 'associatename'},
      {name: 'Distributor_status'},
      {name: 'email'},
      {name: 'mobile_number'},
      {name: 'alternative_number'},
      {name: 'country'},
      {name: 'PinRank'},
      {name: 'PayRank'},
      {name: 'InactiveMonths'},
      {name: 'RenewalDate', type:"date"}
    ]}
  );
});

//////////////////////////// DATE RANGE FILTER END ///////////////////////////////////////////

</script>

    <!-- MY FUNCTIONS -->
        <script src="{{ asset('js/ClosePayRank/functions.js') }}"></script>
    <!-- END MY FUNCTIONS -->
  </body>
</html>
 