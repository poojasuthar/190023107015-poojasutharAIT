<!DOCTYPE html>
<html>
  <head>
    <title> AIT | index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,3 00,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> 
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/external.css">
    <style>
      #myBtn {
      display: none;
      position: fixed;
      height:50px;
      width:50px;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #ff4c00;
      color: white;
      cursor: pointer;
      border-radius: 10px;
      }
      #myBtn:hover {
      background-color: #555;
      }
      #branch_engineering, #branch_mba, #branch_master {
      display: none;
      }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178419263-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178419263-1');
</script>

  </head>
  <body  oncontextmenu="return false">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>
    <!--Modal Grievance -->
    <div class="modal" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Grievance</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="grievance.php" id="form" name="gform" onsubmit = "return(myvalidationg());">
            <div class="modal-body mx-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon12"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon12" id="name">
                <span id="namespan"></span>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon2"><i class="fa fa-envelope-o"></i></span> 
                </div>
                <input type="email" class="form-control" name="email" autocomplete="off"  placeholder="email" aria-label="Username" aria-describedby="basic-addon2" id="email">
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Your Grievance</span>
                </div>
                <textarea class="form-control" name="info" autocomplete="off"  aria-label="With textarea" id="grivance_textarea"></textarea>
              </div>
               <center> <div class="wrap-input100 validate-input pb-2" data-validate="Enter password">
            <div class="g-recaptcha" data-sitekey="6LfE5r8ZAAAAAGiQJ0ViTDgFh0D2igK2Cfr5SRDq"
              data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
          </div></center>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" name="submit" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
    function myvalidationg(){
            var emailID = document.gform.email.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
            if( document.gform.name.value == "" ) {
            alert( "Please provide your name!" );
            document.gform.name.focus() ;
            return false;
         }
         if( document.gform.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.gform.email.focus() ;
            return false;
         }
         else if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.gform.email.focus() ;
            return false;
         }
         if( document.gform.info.value == "" ) {
            alert( "Please provide your information!" );
            document.gform.info.focus() ;
            return false;
         }
         return (true);
        }
    //   $(function(){
    //       var form=$("#form");
    //      form.submit(function(event){
    //          console.log("hello");
    //         var name=$("#name").val();
    //         console.log(name);
    //         namevalidate(name,event);
    //      });
    //      function namevalidate(name,evnet){
    //          if(!isvalidName(name)){
    //             $("#namespan").text("enter the name more then two charater");
    //             event.preventDefault();
    //          }
    //          else{
    //              $("#namespan").text("");
    //          }
    //   }
    //         function isvalidName(name){
    //             return name.length>=2;
    //         }
    </script>
    <!-- End Modal Grievance -->
    <!-- Admission Inquiry -->
    <div class="modal" id="modalRegisterForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Admission Inquiry</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="admission_inquiry.php" name="myform" onsubmit = "return(myvalidation());"> 
            <div class="modal-body mx-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon21"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" autocomplete="off" name="fullname" placeholder="Full Name" aria-label="Username"
                  aria-describedby="basic-addon21">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon3"><i class="fa fa-phone"></i></span>
                </div>
                <input type="number" name="mobilenumber" autocomplete="off" class="form-control" placeholder="Mobile Number"
                  aria-label="Username" aria-describedby="basic-addon3">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon4"><i class="fa fa-envelope-o"></i></span>
                </div>
                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email" aria-label="Username"
                  aria-describedby="basic-addon4">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon5"><i class="fa fa-envelope-o"></i></span>
                </div>
                <textarea class="form-control" name="address" autocomplete="off" placeholder="Address" aria-label="Username"
                  aria-describedby="basic-addon5"></textarea>
              </div>
              <p><b>Current Academic Status</b></p>
              <div class="input-group mb-3">
                <label class="radio-inline"><input type="radio" name="course" value="After 12th">&nbsp;&nbsp;After
                12th</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="radio-inline"><input type="radio" name="course" value="After Diploma">&nbsp;&nbsp;After
                Diploma</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="radio-inline"><input type="radio" name="course" value="After Graduation">&nbsp;&nbsp;After
                Graduation</label>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon6"><i class="fa fa-percent"></i></span>
                </div>
                <input type="text" class="form-control" autocomplete="off" name="Percentage" placeholder="Percentage/CGPA"
                  aria-label="Username" aria-describedby="basic-addon6">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text width_admission" id="basic-addon7"><i class="fa fa-university"></i></span>
                </div>
                <input type="text" class="form-control" name="school" autocomplete="off" placeholder="School/Collage" aria-label="Username"
                  aria-describedby="basic-addon7">
              </div>
              <p class="hide"><b>Interested In?</b></p>
              <div class="input-group mb-3">
                <select name="branch" class="interested" id="branch" onchange="dropdownChange();">
                  <option value="M.B.A"> MBA</option>
                  <option value="ENGINEERING"> ENGINEERING</option>
                  <option value="MASTER OF ENGINEERING"> MASTER OF ENGINEERING</option>
                </select>
              </div>
              <div id="branch_engineering">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck1" value="Computer Engineering">
                  <label class="form-check-label" for="exampleCheck1">Computer Engineering</label> <br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck2" value="Information Technology">
                  <label class="form-check-label" for="exampleCheck2">Information Technology</label><br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck3" value="Automobile Engineering">
                  <label class="form-check-label" for="exampleCheck3">Automobile Engineering</label><br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck4" value="Electrical Engineering">
                  <label class="form-check-label" for="exampleCheck4">Electrical Engineering</label><br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck5" value="Electronics and Communication">
                  <label class="form-check-label" for="exampleCheck5">Elcetronics and communication</label><br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck6" value="Mechanical Engineering">
                  <label class="form-check-label" for="exampleCheck6">Mechanical Engineering</label><br>
                  <input type="checkbox" class="form-check-input" name="choice[]" id="exampleCheck7" value="Civil Engineering">
                  <label class="form-check-label" for="exampleCheck7">Civil Engineering</label><br>
                </div>
              </div>
              <div id="branch_mba">
                <div class="form-check">     
                  <input type="checkbox" class="form-check-input" name="choice[]" id="mba" value="M.B.A">
                  <label class="form-check-label" for="exampleCheck6">M.B.A</label><br>
                </div>
              </div>
              <div id="branch_master">
                <div class="form-check">     
                  <input type="checkbox" class="form-check-input" name="choice[]" id="master" value="Mechanical Engineering">
                  <label class="form-check-label" for="exampleCheck6">Mechanical Engineering (Production)</label><br>
                </div>
                <div class="form-check">     
                  <input type="checkbox" class="form-check-input" name="choice[]" id="master1" value="Electrical Engineering">
                  <label class="form-check-label" for="exampleCheck6">Electrical Engineering</label><br>
                </div>
              </div>
              
               <center> <div class="wrap-input100 validate-input pb-2" data-validate="Enter password">
            <div class="g-recaptcha" data-sitekey="6LfE5r8ZAAAAAGiQJ0ViTDgFh0D2igK2Cfr5SRDq"
              data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
          </div></center>
              
              <script>
                function dropdownChange() {
                
                  var e = document.getElementById("branch");
                
                  var result = e.options[e.selectedIndex].value;
                  // var result1 = e.options[e.selectedIndex].value;
                      // alert(result);
                  if (result == "ENGINEERING") {
                    document.getElementById("branch_engineering").style.display = "block";
                 
                  }
                  if(result == "M.B.A"){
                      // document.getElementById("branch_mba").style.display = "block";
                       document.getElementById("mba").checked = true;
                  }
                  if(result == "MASTER OF ENGINEERING") {
                      document.getElementById("branch_engineering").style.display = "none";
                      document.getElementById("branch_master").style.display = "block";
                  }
                  
                   else {
                
                      document.getElementById("branch_select").style.display = "none";
                      document.getElementById("branch_master").style.display = "none";
                  }
                  
                
                }
                
              </script>
             
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <input type="submit" name="admission_submit" class="btn btn-success" value="send">
            </div>
          </form>
        </div>
      </div>
    </div>
     <script>
        function myvalidation(){
            var emailID = document.myform.email.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
            if( document.myform.fullname.value == "" ) {
            alert( "Please provide your name!" );
            document.myform.fullname.focus() ;
            return false;
         }
         if( document.myform.mobilenumber.value == "" ) {
            alert( "Please provide your mobile number!" );
            document.myform.mobilenumber.focus() ;
            return false;
         }
         else if(document.myform.mobilenumber.value.length < 10){
            alert( "Please provide 10 digit contact number!" );
            document.myform.mobilenumber.focus() ; 
            return false;
         }
         if( document.myform.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myform.email.focus() ;
            return false;
         }
         else if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myform.email.focus() ;
            return false;
         }
         if( document.myform.address.value == "" ) {
            alert( "Please provide your address!" );
            document.myform.address.focus() ;
            return false;
         }
         if( document.myform.Percentage.value == "" ) {
            alert( "Please provide your Percentage!" );
            document.myform.Percentage.focus() ;
            return false;
         }
         if( document.myform.school.value == "" ) {
            alert( "Please provide your school!" );
            document.myform.school.focus() ;
            return false;
         }
         return (true);
        }
    </script>
    <!-- <script src="captcha.js"></script> -->
   
    <!-- End Admission Inquiry -->
    <!-- Modal PayFees -->
    <div id="modalLoginForm" class="modal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Pay Fees</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="light">
            <p>
            <form onsubmit="return redirectedToWebfronts()" name="frmWebfronts" id="frmWebfronts" action="#">
              <p>Please select from the following:</p>
              <table class="billing_table">
                <tbody>
                  <tr>
                    <td>
                      <input type="radio" id="semester3" name="webfronts"
                        value="https://www.payumoney.com/customer/paymentOptionsGroup/#/10DD32A7A1F4009ADBBE7B12EA9D6BFB/semester3"
                        class="check" checked="checked" style="height:15px; width:15px" />
                      &nbsp; &nbsp;3RD SEMESTER
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="radio" id="semester5" name="webfronts"
                        value="https://www.payumoney.com/customer/paymentOptionsGroup/#/10DD32A7A1F4009ADBBE7B12EA9D6BFB/semester5"
                        class="check" style="height:15px; width:15px" />
                      &nbsp; &nbsp;5TH SEMESTER
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="radio" id="semester7" name="webfronts"
                        value="https://www.payumoney.com/customer/paymentOptionsGroup/#/10DD32A7A1F4009ADBBE7B12EA9D6BFB/semester7"
                        class="check" style="height:15px; width:15px" />
                      &nbsp; &nbsp;7TH SEMESTER
                    </td>
                  </tr>
                </tbody>
              </table>
              <br /><br />
              <div class="modal-footer d-flex justify-content-center">
                <input type="button" class="btn btn-success" value="Submit" name="webfronts"
                  onclick="onPayNowClick()">
              </div>
            </form>
            <div
              onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"
              class="black_overlay" id="fade"></div>
            <br>
            <div style="text-align:center; margin-top:-5%">
              <a href="javascript:void(0)"
                onclick="document.getElementById('light').style.display='block';document.getElementById('fade').stylead.display='block'"
                style="display:inline-block; margin:0;"><img alt=""
                src="https://www.payumoney.com/media/images/payby_payumoney/buttons/payfee-green-large.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"-->
    <!--  aria-hidden="true">-->
    <!--  <div class="modal-dialog" role="document">-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-header text-center">-->
    <!--        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>-->
    <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--        <span aria-hidden="true">&times;</span>-->
    <!--        </button>-->
    <!--      </div>-->
    <!--      <div class="modal-body mx-3">-->
    <!--        <div class="input-group mb-3">-->
    <!--          <div class="input-group-prepend">-->
    <!--            <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-envelope"></i></span>-->
    <!--          </div>-->
    <!--          <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">-->
    <!--        </div>-->
    <!--        <div class="input-group mb-3">-->
    <!--          <div class="input-group-prepend">-->
    <!--            <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-lock"></i></span>-->
    <!--          </div>-->
    <!--          <input type="text" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="modal-footer d-flex justify-content-center">-->
    <!--        <button class="btn btn-success">Login</button>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- End Model pay fees -->
    <div class="clg_header">
      <div class="row12">
        <!-- logo ait -->          
        <div class="col-md-2">
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight logo"><a href="index"><img src="images/img.png"
              class="img-fluid rounded float-left animated bounceInLeft" alt="ait image"></a></div>
          </div>
        </div>
        <!-- End logo ait -->
        <!-- image and menu of ait -->
        <div class="col-md-9 pt-5px">
          <div class="p-2 bd-highlight aitimage"><a href="index"><img src="images/AIT.png" alt="CLG NAME" class="img-fluid"></a></div>
          <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container ">
              <div class="button12">
                <button class="navbar-toggler collapsed" id="main" type="button" data-toggle="collapse"
                  data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                  aria-label="Toggle navigation color-white">
                <span class="navbar-toggler-icon text-white" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i>
                </span>
                </button>
              </div>
              <div class="navbar-collapse collapse menu">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-link">            
                    <a href="" class="nav-link js-scroll-trigger"><i
                      class="fa"> &nbsp;EST.2004 | AICTE APPROVED | GTU AFFILIATED</i></a>
                  </li>
                  <li class="nav-link">
                    <a href="" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modalLoginForm"><i
                      class="fa fa-envelope"> &nbsp;Pay Fees</i></a>
                  </li>
                  <li class="nav-link">
                    <a href="" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modalRegisterForm"><i
                      class="fa fa-envelope">&nbsp;Grievance</i></a>
                  </li>
                  <!--<li class="nav-link">-->
                  <!--  <a class="nav-link js-scroll-trigger" href="https://www.aicte-india.org/feedback/index"-->
                  <!--  target="_blank"><i class="fa fa-envelope">&nbsp;AICTE FEEDBACK</i></a>-->
                  <!--</li>-->
                  <li class="nav-link">
                    <a href="" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modalRegisterForm1"><i
                      class="fa fa-envelope">&nbsp;Admission</i></a>
                  </li>
                </ul>
              </div>
              <div class="navbar-collapse  sidenav" id="mySidenav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                  </li>
                  <li class="nav-item1">
                    <a class="nav-link js-scroll-trigger" href="index">Home</a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 ">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height" >About</button>
                      <div class="dropdown2-content mx-auto text-justify">
                        <a href="about" class="text-white text-left">About Organization</a>
                        <a href="m_team">Message</a>
                        <a href="management_team">Management Team</a>
                        <a href="welfare_team">Welfare Team</a>
                        <a href="intake">Intake</a>
                        <!--<a href="campus.php">Campus</a>-->
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 ">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height" >Academics</button>
                      <div class="dropdown2-content mx-auto text-justify">
                        <a href="ac" class="text-white text-left">Academics Calender</a>
                        <a href="ac_workshop">Workshops</a>
                        <a href="subject">Education Material</a>
                        <a href="ac_blog">E-Blog</a>
                        <a href="online_course">E-Courses</a>
                        <a href="research">Publications</a>
                        <!--<a href="welfare_team">News Letter</a>-->
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 ">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height" >UG Programs</button>
                      <div class="dropdown2-content">
                        
                        <a href="branch_detail?id=2" class="white text-left">Automobile Engineering</a>
                                                <a href="branch_detail?id=6" class="white text-left">Civil Engineering</a>
                                                <a href="branch_detail?id=7" class="white text-left">Computer Engineering</a>
                                                <a href="branch_detail?id=9" class="white text-left">Electrical Engineering</a>
                                                <a href="branch_detail?id=11" class="white text-left">Electronics and Communication</a>
                                                <a href="branch_detail?id=16" class="white text-left">Information Technology</a>
                                                <a href="branch_detail?id=19" class="white text-left">Mechanical Engineering</a>
                                              </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 ">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height" >PG Programs</button>
                      <div class="dropdown2-content">
                                                <span><a href="branch_detail?id=19&is_pg=1" class="white text-left">Mechanical Engineering</a></span>  
                                                <span><a href="branch_detail?id=9&is_pg=1" class="white text-left">Electrical Engineering</a></span>  
                                                <span><a href="branch_detail?id=53&is_pg=1" class="white text-left">M.B.A</a></span>  
                                                <!--<a href="mba.php" class="white text-left">MBA</a>-->
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 ">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height" >Campus</button>
                      <div class="dropdown2-content mx-auto text-justify">
                        <a href="campus_event" class="text-white text-left">Events</a>
                        <a href="campus_media" class="white text-left">Media Coverage</a>
                        <a href="campus_gallery" class="white text-left">Gallery</a>
                        <a href="campus_student_section" class="white text-left">Student Section</a>
                        <!--                          <a href="welfare_team">News Letter</a>-->
                      </div>
                    </div>
                  </li>
                  <!--<li class="nav-item">-->
                  <!--  <div class="dropdown2 pt-0 text-center sidenavbar_height">-->
                  <!--    <button class="dropbtn2 pt-0 text-center sidenavbar_height">Academics</button>-->
                  <!--    <div class="dropdown2-content text-justify">-->
                  <!--      <a href="ac">Academics Calender</a>-->
                  <!--<a href="e-notice.php">E-Notice</a>-->
                  <!--      <a href="subject">Subjects</a>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</li>-->
                  <!--<li class="nav-item">-->
                  <!--  <div class="dropdown2 pt-0 text-center sidenavbar_height">-->
                  <!--    <button class="dropbtn2 pt-0 text-center sidenavbar_height">Department</button>-->
                  <!--    <div class="dropdown2-content text-justify">-->
                                    <!--<a href="branch_detail?id="></a>-->
                                    <!--<a href="mba.php">MBA</a>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</li>-->
                  <li class="nav-item">
                    <div class="dropdown2 sidenavbar_height">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height">Placement</button>
                      <div class="dropdown2-content text-justify">
                        <a href="placement_cell"> Cell</a>
                        <a href="placement_company">Company</a>
                        <a href="placement_info">News</a>
                        <a href="placement_summary">Summary</a>
                        <a href="placement_activity">Activity</a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown2 sidenavbar_height">
                      <button class="dropbtn2 pt-0 text-center sidenavbar_height">Resources</button>
                      <div class="dropdown2-content text-justify">
                        <a href="smartclass">Smart Classes</a>
                        <a href="library" >Library</a>
                        <!--<a href="transpotation">Transportation</a>-->
                        <a href="lab">Advanced Computer Lab</a>
                        <a href="canteen">Canteen</a>
                        <!--<a href="studentstore">Student Store</a>-->
                        <a href="sports">Sports Ground</a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item1">
                    <a class="nav-link js-scroll-trigger" href="contact">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!-- End image and menu of ait -->
      </div>
    </div>
    <!-- main manu of ait -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco-navbar-light" id="ftco-navbar" >
      <div class="container d-flex align-items-center px-3" >
        <div class="collapse navbar-collapse" id="ftco-nav1" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item1 mt"><a href="index">Home</a></li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2" >About</button>
                <div class="dropdown2-content">
                  <a href="about" class="white text-left">About Organization</a>
                  <a href="m_team" class="white text-left">Message</a>
                  <a href="management_team" class="white text-left">Management Team</a>
                  <a href="welfare_team" class="white text-left">Welfare Team</a>
                  <a href="intake" class="white text-left">Intake</a>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2">Academics</button>
                <div class="dropdown2-content">
                  <a href="ac" class="white text-left">Academics Calender</a>
                  <!--<a href="e-notice.php" class="white text-left">E-Notice</a>-->
                  <a href="ac_workshop" class="white text-left">Workshops</a>
                  <a href="subject" class="white text-left">Education material</a>
                  <a href="ac_blog" class="white text-left">E-Blog</a>
                  <a href="online_course" class="white text-left">E-Courses</a>
                  <a href="research" class="white text-left">Publication</a>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2">UG Program</button>
                <div class="dropdown2-content">
                  
                  <a href="branch_detail?id=2" class="white text-left">Automobile Engineering</a>
                                    <a href="branch_detail?id=6" class="white text-left">Civil Engineering</a>
                                    <a href="branch_detail?id=7" class="white text-left">Computer Engineering</a>
                                    <a href="branch_detail?id=9" class="white text-left">Electrical Engineering</a>
                                    <a href="branch_detail?id=11" class="white text-left">Electronics and Communication</a>
                                    <a href="branch_detail?id=16" class="white text-left">Information Technology</a>
                                    <a href="branch_detail?id=19" class="white text-left">Mechanical Engineering</a>
                                  </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2">PG Program</button>
                <div class="dropdown2-content">
                                    <span><a href="branch_detail?id=19&is_pg=1" class="white text-left">Mechanical Engineering</a></span>  
                                    <!--<a href="branch_detail?id=&is_pg=1" class="white text-left"></a>-->
                                    <span><a href="branch_detail?id=9&is_pg=1" class="white text-left">Electrical Engineering</a></span>  
                                    <!--<a href="branch_detail?id=&is_pg=1" class="white text-left"></a>-->
                                    <span><a href="branch_detail?id=53&is_pg=1" class="white text-left">M.B.A</a></span>  
                                    <!--<a href="branch_detail?id=&is_pg=1" class="white text-left"></a>-->
                                    <!--<a href="mba.php" class="white text-left">MBA</a>-->
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2" >Campus</button>
                <div class="dropdown2-content">
                  <a href="campus_event" class="white text-left">Events</a>
                  <a href="campus_media" class="white text-left" id="media">Media Coverage</a>
                  <a href="campus_gallery" class="white text-left">Gallery</a>
                  <a href="campus_student_section" class="white text-left">Student Section</a>
                  <!--<a href="campus_news_latter.php" class="white text-left">News Letter</a>-->
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2">Placement</button>
                <div class="dropdown2-content">
                  <a href="placement_cell" class="white text-left"> Cell</a>
                  <a href="placement_company" class="white text-left">Company</a>
                  <a href="placement_info" class="white text-left">News</a>
                  <a href="placement_summary" class="white text-left">Summary</a>
                  <a href="placement_activity" class="white text-left">Activity</a>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown2">
                <button class="dropbtn2">Resources</button>
                <div class="dropdown2-content">
                  <a href="smartclass" class="white text-left">Smart Classes</a>
                  <a href="library" class="white text-left">Library</a>
                  <!--<a href="transpotation" class="white text-left">Transportation</a>-->
                  <a href="lab" class="white text-left">Advanced Computer Lab</a>
                  <a href="canteen" class="white text-left">Canteen</a>
                  <!--<a href="studentstore" class="white text-left">Student Store</a>-->
                  <a href="sports" class="white text-left">Sports Ground</a>
                </div>
              </div>
            <li class="nav-item1 mt"><a href="contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End main manu of ait -->
    <script>
      function onPayNowClick() {
        //  if (document.getElementById("semester3").value){
        // var link = document.getElementById("semester3").value
        //   }
        //   if(document.getElementById("semester5").value){
        // var link = document.getElementById("semester5").value
        //   }
        //   if(document.getElementById("semester7").value){
        // var link = document.getElementById("semester7").value
        //   }
        rbs = document.querySelectorAll('input[name="webfronts"]');
            let selectedValue;
            for (const rb of rbs) {
                if (rb.checked) {
                    selectedValue = rb.value;
                    break;
                }
            }
        location.replace(selectedValue)
      }
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
 
  </body>
</html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="Unify1/css/unify-globals.css">
  <style type="text/css">
    #sidenav1 a{
    text-decoration:none;
    font-size:20px;
    color:white;
    position:fixed; 
    border-radius:0 5px 5px 0px; 
    left:-83px;
    transition:0.3s;
    border:2px solid #c2e9fb;
    height:45px;
    width:120px;
    z-index:999;
    }
    #sidenav1 i{
    padding-right:7px;
    padding-top: 5px;
    padding-left:75px;
    }
    #sidenav1 a:hover{
    left: 0; 
    text-align:center;
    width:180px;
    padding:auto;
    }
    #sidenav1 a:hover i{
    display:none;
    }
    #sidenav1 a:hover span{
    display:block;
    padding-left:0px;
    }
    #about{
    top:200px;
    background-image: linear-gradient(to top, 0%, 100%);
    }
    #blog{
    top:240px;
    background-image: linear-gradient(120deg, 0%, 100%);
    }
    #projects{
    top:280px;
    background-image: linear-gradient(120deg, 0%, 100%);
    }
    #contact{
    top:320px;
    background-image: linear-gradient(to top, 0%, 100%);
    }
    .side-menu1 a span{
    display: none;
    }
    #aimage {
    width: 200px;
    height: 200px;
    transition: width 2s, height 2s, transform 2s;
    margin-top: 60px;
    animation-name: zoom_rotate;
    animation-delay: .75s;
    animation-duration: 6.25s;
    }
    @keyframes zoom_rotate{
    from{  width: 200px;
    height: 200px; transition: width 2s, height 2s, transform 2s;}
    to{width: 270px;
    height: 270px;
    transform: rotate(360deg);}
    }
    .bottom{
    font-size:30px;
    }
    .blinking{
	animation:blinkingText 0.8s infinite;
}  
@keyframes blinkingText{
	0%{		color: #000;	}
	49%{	color: transparent;	}
	50%{	color: transparent;	}
	99%{	color:transparent;	}
	100%{	color: #000;	}
}
    /*#sidenav2 a{*/
    /*text-decoration:none;*/
    /*font-size:14px;*/
    /*color:white;*/
    /*position:fixed; */
    /*border-radius:0 5px 5px 0px; */
    /*right:10px;*/
    /*transition:0.3s;*/
    /*border:2px solid #c2e9fb;*/
    /*height:45px;*/
    /*width:120px*/
    /*text-align:center;*/
    /*width:180px;*/
    /*padding:auto;*/
    /*}*/
    /*#sidenav2 i{*/
    /*padding-right:7px;*/
    /*padding-top: 5px;*/
    /*padding-right:75px;*/
    /*}*/
    /*#sidenav2 a:hover{*/
    /*right: 0; */
    /*text-align:center;*/
    /*width:180px;*/
    /*padding:auto;*/
    /*}*/
    /*#sidenav2 a:hover i{*/
    /*display:none;*/
    /*}*/
    /*#sidenav2 a span{*/
    /*display:block;*/
    /*padding-right:0px;*/
    /*}*/
    /*#about2{*/
    /*top:230px;*/
    /*background-image: linear-gradient(to top, 0%, 100%);*/
    /*}*/
    /*#projects2{*/
    /*top:280px;*/
    /*background-image: linear-gradient(120deg, 0%, 100%);*/
    /*}*/
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</head>
<body>
    <!--// model display when page load-->
    <!-- Large modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>-->

<!--<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-lg">-->
<!--    <div class="modal-content">-->
<!--      <img src="images/MBA.png">-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!-- Small modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>-->

<!--<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-sm">-->
<!--    <div class="modal-content">-->
<!--      ...-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
    <script>
       $(document).ready(function(){
            $('.bd-example-modal-lg').modal('show');
        }); 
    </script>
    <!--close model when page load-->
  <!-- Home Slider********************************************************************************* -->
  <!-- Home Slider********************************************************************************* -->
  <!-- image slider -->      
  <!-- #region Jssor Slider Begin -->
  <!-- Generator: Jssor Slider Maker -->
  <!-- Source: https://www.jssor.com -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jssor.slider.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function ($) {
    
    var jssor_1_options = {
    
    $AutoPlay: 1,
    
    $DragOrientation: 2,
    
    $PlayOrientation: 2,
    
    $BulletNavigatorOptions: {
    
    $Class: $JssorBulletNavigator$,
    
    $Orientation: 2
    
    }
    
    };
    
    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
    
    /*#region responsive code begin*/
    
    var MAX_WIDTH = 950;
    
    function ScaleSlider() {
    
    var containerElement = jssor_1_slider.$Elmt.parentNode;
    
    var containerWidth = containerElement.clientWidth;
    
    if (containerWidth) {
    
    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
    
    jssor_1_slider.$ScaleWidth(expectedWidth);
    
    }
    
    else {
    
    window.setTimeout(ScaleSlider, 30);
    
    }
    
    }
    
    ScaleSlider();
    
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    
    /*#endregion responsive code end*/
    
    });
    
  </script>
  <style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
    animation-name: jssorl-009-spin;
    animation-duration: 1.6s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    }
    @keyframes jssorl-009-spin {
    from {
    transform: rotate(0deg);
    }
    to {
    transform: rotate(360deg);
    }
    }
    .jssorb031 {position:absolute;}
    .jssorb031 .i {position:absolute;cursor:pointer;}
    .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
    .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
    .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
    .jssorb031 .i.idn {opacity:.3;}
  </style>
  <div class="container">
    <div class="side-menu1" id="sidenav1">
      <a href="#" id="about" class="btn btn-md bg-success g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1" data-toggle="modal" data-target="#modalRegisterForm1"><span>Admission</span><i class="fa fa-users logo-ad-small" aria-hidden="true"></i></a>
      <a href="https://youtu.be/ZMacJoMsrNA" id="blog" class="btn btn-md g-bg-yellow-lineargradient g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1" target="_blank"><span>Testimonials</span><i class="fa fa-quote-left" aria-hidden="true"></i></a>
      <a href="360-VT" id="projects" class="btn btn-md g-bg-orange-lineargradient g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1"><span>360<sup>∘</sup> Vision</span><i class="fa fa-street-view" aria-hidden="true"></i></a>
      <a href="pdf/AIT_Brochure.pdf" id="contact" class="btn btn-md g-bg-blue-lineargradient-v2 g-brd-0 g-color-white g-ma-0 g-rounded-right-30 d-inline-block pull-left d-shadow-v1 popup-vimeo d-flex justify-content-center align-items-center"><span>Brochure</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
    </div>
    <!-- closing of sidemenu-->
  </div>
  <!--  <div class="container">-->
  <!--  <div class="side-menu1" id="sidenav2">-->
  <!--    <a href="pdf/Machine Learning.pdf" id="about2" class="btn btn-md g-bg-blue-lineargradient-v2 g-brd-0 g-color-white g-ma-0 g-rounded-right-30 d-inline-block pull-left d-shadow-v1 popup-vimeo d-flex justify-content-center align-items-center"><span class="blinking"><blink>STTP ON ML</blink></span></a>-->
  <!--    <a href="http://tiny.cc/ait-sttp-ml" id="projects2" class="btn btn-md g-bg-orange-lineargradient g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1 pt-3"><span>STTP Registration</span></a>-->
  <!--  </div>-->
    <!-- closing of sidemenu-->
  <!--</div>-->
    <div class="container">
    <div class="new_update" style="color:red;">
        <!--<marquee>One Student Placed E-Infochips</marquee>-->
        <!--<div class="new_latter">-->
        <marquee >AIT signed MOU with STAD Solution||Eleven Students of CE & IT Department placed in Devstree, Synoptek, , Aimdek Technology ,ICT Infracon, Brainvire, Nirant Enterprise Pvt. Ltd. and Radixweb || Two students of Sem -6 CE & IT Department Won 2nd Prize in “Mined Hackathon” organised by Nirma University & Binghamton University. ||One Student from EC Department placed in Blazenet Ltd. || One Student from Civil Department placed in Unicon Build Space India Pvt. Ltd || One Student from EE Department placed in Star tele logic. ||Three Students from CE Department placed in Tatvasoft. || One Student from CE Department placed in Gateway || One Student from CE Department placed in E-infochip. || Forty Eight Students from various department got 10/10 SPI in Sem-8 Result (CE-15, IT-08, EC-03, Civil-03 and Mech-19).|| One Student from EC Department placed in Engineering Services International.</marquee>
    </div>
    <!-- closing of sidemenu-->
  </div>
  <!-- container-->
  <!--<div class="icon-bar-index">-->
  <!--  <a class="btn btn-md bg-success g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1" -->
  <!--    data-toggle="modal" data-target="#modalRegisterForm1" href=""  title="">-->
  <!--  <i class="fa fa-users logo-ad-small"></i>&nbsp; Admission Inquiry-->
  <!--  </a>-->
  <!--  <br />-->
  <!--  <a class="btn btn-md g-bg-yellow-lineargradient g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1"-->
  <!--    href="https://youtu.be/ZMacJoMsrNA"  title="" target="_blank">-->
  <!--    <i class="fa fa-users logo-small"></i>&nbsp;Testimonials-->
  <!--  </a>-->
  <!--  <br />-->
  <!--  <a class="btn btn-md g-bg-orange-lineargradient g-brd-0 g-color-white g-ma-0 g-mb-5 g-rounded-right-30 d-inline-block pull-left d-shadow-v1"  href="360-VT.php">-->
  <!--    <i class="fa fa-street-view"></i>&nbsp;360<sup>∘</sup> Vision-->
  <!--  </a>-->
  <!--  <br />-->
  <!--  <a class="btn btn-md g-bg-blue-lineargradient-v2 g-brd-0 g-color-white g-ma-0 g-rounded-right-30 d-inline-block pull-left d-shadow-v1 popup-vimeo d-flex justify-content-center align-items-center"-->
  <!--    href="pdf/AIT_Brochure.pdf" >-->
  <!--    <i class="fa fa-file-pdf-o"></i>&nbsp;Brochure-->
  <!--  </a>-->
  <!--   <a class="btn btn-md g-bg-blue-lineargradient-v2 g-brd-0 g-color-white g-ma-0 g-rounded-right-20 d-inline-block pull-left d-shadow-v1"-->
  <!--  href="https://www.facebook.com/aitcollege2004/?rf=1702261500072009" target="_blank" >-->
  <!--  <i class="fa fa-facebook"></i>-->
  <!--</a>-->
  <!--</div>-->
  <section class="slider">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:700px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:700px;overflow:hidden;">
                <div>
          se
          <img data-u="image" class="image-set" alt="ronak raval" src="admin/image/slider/0_ronak raval.jpg" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="College campus" src="admin/image/slider/0_College campus.jpg" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="campus " src="admin/image/slider/0_campus .jpg" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="gold medal" src="admin/image/slider/0_gold medal.jpg" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="hackathon" src="admin/image/slider/0_hackathon.png" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="Electrical Achieveme" src="admin/image/slider/0_Electrical Achievement.jpg" />
        </div>
                <div>
          se
          <img data-u="image" class="image-set" alt="bhoomi shah_EC" src="admin/image/slider/0_bhoomi shah_EC.jpg" />
        </div>
              </div>
  </section>
  <!-- Bullet Navigator -->
  <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="2" data-scale="0.5" data-scale-right="0.75">
  <div data-u="prototype" class="i" style="width:12px;height:12px;">
  <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
  </svg>
  </div>
  </div>
  </div>
  <!-- #endregion Jssor Slider End -->
  <!-- End image slider -->
  <!-- Home slider close*********************************************************** -->
  <!-- Vision Mision and Goal******************************************************* -->
  <section class="ftco-services ftco-no-pb ">
    <div class="container-wrap">
      <div class="row13 no-gutters">
        <div class="col-lg-6 d-flex services align-self-stretch py-3 ftco-animate bg-primary p-2">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fa fa-eye font_size"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Vision</h3>
              <p class="text-justify">“To produce globally acceptable professionals by providing quality education with excellence & ethics.
                ”
              </p>
            </div>
          </div>
        </div>
        <!--<div class="col-lg-4 d-flex services align-self-stretch pt-3 px-2 ftco-animate bg-darken p-2">-->
        <!--  <div class="media block-6 d-block text-center">-->
        <!--    <div class="icon d-flex justify-content-center align-items-center">-->
        <!--      <span class="fa fa-bullseye font_size"></span>-->
        <!--    </div>-->
        <!--    <div class="media-body p-2 mt-3">-->
        <!--      <h3 class="heading">Our Goal</h3>-->
        <!--      <p class="text-justify">To cater the societal requirement of knowledge expansion in techno managerial areas by bridging the gap between the industry requirement and academically qualified personal.-->
        <!--      </p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="col-lg-6 d-flex services align-self-stretch pt-3 px-2 ftco-animate bg-darken p-2">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fa fa-rocket font_size"></span>
            </div>
            <div class="media-body pl-4 p-2 mt-3">
              <h3 class="heading">Mission</h3>
              <p class="text-justify">i) To provide valuable human resources to industry and society.<br>
                ii) To create ethically and socially responsible professionals.<br>
                iii) To build across the institute a culture of excellence in teaching & learning.<br>
                iv) To build inclusive, diverse, and responsible community. <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Vision Mision and Goal close******************************************************* -->
  <!-- what we offer******************************************************* -->
  <section class="ftco-section ftco-no-pt ftc-no-pb js--scroll_what_we_offer">
    <div class="container">
      <div class="row13 d-flex">
        <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate p-2">
          <h2 class="mb-4 ">Facilities @ AIT</h2>
          <div class="row13 mt-4 js--wp_1">
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-reading"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Advanced & Hi-Tech Labs
                  </h3>
                  <p>All the engineering departments are well
                    equipped with modern laboratories to cater to
                    the need of training, the students as well as for
                    industrial testing.
                    A fully equipped workshop caters to learning
                    requirements of various categories of
                    students.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-security"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Ragging Free Campus</h3>
                  <p>Anti-Ragging Squad monitors, directs and oversees the functions and performance of the institute to prevent the ragging in the institution and also to safeguard the rights of female students,faculties and staff members. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-diploma"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Well-Experienced Faculties</h3>
                  <p>The institute has an extremely well qualified
                    and experienced faculty that make the
                    students excel in every possible scholastic
                    and co-scholastic field.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-jigsaw"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Excellent Placement</h3>
                  <p>The institute adopts modern practices of
                    training and placement of the students in
                    industries and world of work. For this purpose,
                    placement cell is created in every department
                    with HOD as coordinator with two faculty
                    members.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-education"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Smart Class</h3>
                  <p>Smart technology-enhanced classrooms that foster opportunities for teaching and learning by integrating cutting-edge technologies.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-2">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                  class="flaticon-kids"></span></div>
                <div class="text pl-3 text-justify">
                  <h3>Sports Facilities</h3>
                  <p>The institute encourages and provides facility
                    for sports to the students for their overall
                    development. Students of the college have
                    been continuously bringing pride for institute
                    by getting ranks in their participation in
                    national and international events of sports as
                    well as cultural events.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End What We offer******************************************************* -->
  <!-- Event News and Circulur******************************************************* -->
  <section class="pt-5">
    <!--         Grid row 
      -->        
    <div class="row13">
    <!--Grid column -->
    <div class="col-md-4 mb-5 p-2">
      <div class="justify-content-center">
        <div class="row13">
          <div class="col span-1-of-2">
            <h3 class="mb-4"><strong>News</strong></h3>
          </div>
          <!--<div class="col span-1-of-2">-->
          <!--  <a href="news" class="btn btn-primary">View More</a>-->
          <!--</div>-->
        </div>
      </div>
      <!--Exaple 1 -->
      <div class="card example-1 scrollbar-ripe-malinka">
        <div class="card-body">
                    <ul class="pt-4 pl-3">
            <!--<li><a href=""  data-toggle="modal" data-target="#newsmodal" data-news="" class="news">-->
            <!--<hr></a></li>-->
                        <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="388" class="news">
                Conducted Webinar on “Design the base of future technologies” on 19th April 2021 by Mech & Automobile Eng. Dept. of AIT                 <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="385" class="news">
                AIT signed MOU with STAD Solution                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="353" class="news">
                Placement News: Placement Drive conducted for CE & IT Students by ICT Infracon, Brainvire, Nirant Enterprise Pvt. Ltd. and Radixweb in March-2021.                 <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="355" class="news">
                Placement News: Placement Drive conducted for CE & IT Students by Devstree, Synoptek, Aimdek Technology and Radixweb in March-2021.                 <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="387" class="news">
                One day Industrial Training program on “Upskilling of Contractor Partner of JSW” conducted on 10th March, 2021.                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="386" class="news">
                One day Industrial Training program on “Upskilling of Fabricator Partner of JSW” conducted on 9th March, 2021.                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="352" class="news">
                Womens Day celebration                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="351" class="news">
                Won 2nd Prize  of Rs. 20,000 in “Mined Hackathon” organised by Nirma University  & Binghamton University                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="349" class="news">
                Vasant Panchami Day celebration on 16th February,2021                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="348" class="news">
                Placement News : Placement Drive conducted for EC department by Blazenet Ltd, Ahmedabad on 13th Feb, 2021., for Civil department by Unicon Build Space India Pvt. Ltd., Ahmedabad on 14th Feb, 2021. And                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="350" class="news">
                The Budget Analysis Competition 2021 conducted on 6th February,2021                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="347" class="news">
                National Youth Day Celebration by MBA Department on 12th Jan, 2021                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="339" class="news">
                National Level STTP on “Machine Learning” conducted by CE & IT Department during 2nd November to 12th November, 2020                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="346" class="news">
                Placement News: Placement Drive conducted for EC, EE, Civil & Mech Students by Cinif Technology on 2nd October,2020 and Engineering Services Internationals on 26th October,2020.                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="342" class="news">
                Placement News: Placement Drive conducted for CE & IT Students by Tatvasoft on 9th September,2020 and Gateway group of companies on 10th September,2020                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="319" class="news">
                Placement News: Placement Drive conducted for CE, IT & EC Students by einfochip on 26th August,2020.                <hr>
              </a>
               
            <li>
              <a href="admin/image/news/Webinar on “How to Start a Start up”2020-08-15.pdf" id="contact" class="popup-vimeo d-flex justify-content-center align-items-center">Webinar Conducted on “How to Start a Start up by Dr. Vivek Bindra on 15th August-2020 for AIT Students.               </a>
              <hr>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="311" class="news">
                Webinar on “Iron Deficiency Anaemia”                <hr>
              </a>
                          <li>
              <a href=""  data-toggle="modal" data-target="#newsmodal" data-news="310" class="news">
                AICTE-Energy Swaraj Foundation in association with AIT is conducted Energy Literacy Drive certification program for AIT Students in August-2020.                <hr>
              </a>
               
            <li>
              <a href="admin/image/news/Guidelines regarding Online Multiple Choice Questions (MCQ) type Summer 2020 Examination.pdf" id="contact" class="popup-vimeo d-flex justify-content-center align-items-center">Guidelines regarding Online Multiple Choice Questions (MCQ) type Summe              </a>
              <hr>
               
            <li>
              <a href="admin/image/news/End Semester Examination_  End Semester Examination for final semester2020-06-25.pdf" id="contact" class="popup-vimeo d-flex justify-content-center align-items-center">End Semester Examination:  End Semester Examination for final semester              </a>
              <hr>
                            <!--<li><a href="pdf/timetable.pdf" target="_blank">End Semester Examination:-->
              <!--      End Semester Examination for final semester students of B.E SEM-8 will start from 25/06/2020.-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/summer.pdf" target="_blank">Online examination option:-->
              <!--      Students residing in containment zones will have the choice of giving the test online after 20/07/2020.-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/mbp.jpg" target="_blank">Merit based progression for Semester 2,4, and 6-->
              <!--  <hr></a></li>-->
              <!--<li><a href="pdf/d2dadd.pdf" target="_blank">Advertise: Admission for Vacant Quota seats-->
              <!--    in Diploma to Degree Engineering 2019-2020-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/regularadd.pdf" target="_blank">Advertise: Vacant Quota seats admission-->
              <!--    in Bachelors of Engineering 2019-2020-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/meadd.pdf" target="_blank">Advertise: Admission for Vacant Quota seats-->
              <!--    in Masters of Engineering 2019-2020-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/mq1920.jpg" target="_blank">Admission for management quota seat --->
              <!--    2019-2020 - Advertisement-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/nsdl.pdf" target="_blank">New Scholarships Launched by Vidyasaarathi-->
              <!--    (SNL Bearings Ltd.)-->
              <!--  <hr></a></li>-->
              <!--  <li><a href="pdf/notice.jpg" target="_blank">Admission for Management quota seats for-->
              <!--    degree engineering-->
              <!--  <hr></a></li>-->
            </li>
          </ul>
        </div>
      </div>
      <!--Exaple 1 -->
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
      
      $('.news').click(function(){
      
      var val1=$(this).data('news');
      
      $.ajax({
      
      url:'modal_news.php',
      
      type:'post',
      
      data:{modal:val1},
      
      success:function(getdata){
      
      $('.news_response').html(getdata);
      
      },
      
      error: function(){
      
      alert("fail");
      
      }
      
      });
      
      });
      
      });
      
    </script>
    <section>
      <!--Modal -->
      <!--Modal: modalQuickView -->
      <div class="modal fade" id="newsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body news_response">
            </div>
          </div>
        </div>
    </section>
    <div class="col-md-4 mb-5 p-2">
    <div class="justify-content-center">
    <div class="row13">
    <div class="col span-1-of-2">
    <h3 class="mb-4"><strong>Circular</strong></h3>
    </div>
    <!--<div class="col span-1-of-2">-->
    <!--  <a href="index" class="btn btn-primary">View More</a>-->
    <!--</div>-->
    </div>
    </div>
    <div class="card example-1 scrollbar-ripe-malinka">
    <div class="card-body">
    <ul class="pt-3 pl-3">
     <li>
    <a href="admin/image/circular/Registration for Webinar on Design the base of future Technologies2021-04-16.jpeg" id="contact" class="popup-vimeo d-flex justif align-items-center">Registration for Webinar on Design the base of future Technologies    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Registration for Webinar on Software Testing (QA)2021-04-09.jpg" id="contact" class="popup-vimeo d-flex justif align-items-center">Registration for Webinar on Software Testing (QA)    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Marks Viewing for students of B.E Sem-1 to 4 (Reg and Rem)2021-03-24.pdf" id="contact" class="popup-vimeo d-flex justif align-items-center">Marks Viewing for students of B.E Sem-1 to 4 (Reg and Rem)    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Marks Viewing for students of B.E Sem-5 to 8 (Reg and Rem)2021-01-08.pdf" id="contact" class="popup-vimeo d-flex justif align-items-center">Marks Viewing for students of B.E Sem-5 to 8 (Reg and Rem)    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Commencement of Examination for Semester-5 and 7 from 19th January-2021.2021-01-05.pdf" id="contact" class="popup-vimeo d-flex justif align-items-center">Commencement of Examination for Semester-5 and 7 from 19th January-2021.    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Admission are invited in Vacant Quota for M.B.A.2020-12-15.png" id="contact" class="popup-vimeo d-flex justif align-items-center">Admission are invited in Vacant Quota for M.B.A.    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Admission are invited in Vacant Quota for Engineering(including D2D Students), M.B.A and Master of Engineering.2020-11-17.png" id="contact" class="popup-vimeo d-flex justif align-items-center">Admission are invited in Vacant Quota for Engineering(including D2D Students) and Master of Engineering.    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Admission are invited for Management Quota for Engineering,M.B.A and Master of Engineering.2020-09-30.png" id="contact" class="popup-vimeo d-flex justif align-items-center">Admission are invited in Management Quota for Engineering,M.B.A and Master of Engineering.    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Commencement of Online Classes for Semester-3, 5 and 7 from 21st June-2020..pdf" id="contact" class="popup-vimeo d-flex justif align-items-center">Commencement of Online Classes for Semester-3, 5 and 7 from 21st June-2020.    </a>
    <hr>
     <li>
    <a href="admin/image/circular/corona.jpeg" id="contact" class="popup-vimeo d-flex justif align-items-center">Circular - College close till 29 March due to coronavirus    </a>
    <hr>
     <li>
    <a href="admin/image/circular/Sports Days - 2020 _ Ahmedabad Institute Of Technology.jpeg" id="contact" class="popup-vimeo d-flex justif align-items-center">Sports Days - 2020 | Ahmedabad Institute Of Technology    </a>
    <hr>
        </ul>
    </div>
    </div>
    </div>
    <div class="col-md-4 mb-5 p-2">
    <div class="justify-content-center">
    <div class="row13">
    <div class="col span-1-of-2">
    <h3 class="mb-4"><strong>Events</strong></h3>
    </div>
    <div class="col span-1-of-2">
    <a href="events" class="btn btn-primary">View More</a>
    </div>
    </div>
    </div>
    <div class="card example-1 scrollbar-ripe-malinka">
    <div class="card-body">
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="112" class="EVENT">TechnoSparx    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="113" class="EVENT">Cultural Fest    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="114" class="EVENT">Navratri    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="115" class="EVENT">walkathon on De-addiction    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="116" class="EVENT">Kite Festival    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="117" class="EVENT">AIT Sports    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="118" class="EVENT">Yoga Day Celebration    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="119" class="EVENT">Tree Plantation    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="120" class="EVENT">Blood Donation    <hr>
    </a>
    </li>
    </ul>
        <ul class="pt-4 pl-3">
    <li>
    <a href=""  data-toggle="modal" data-target="#eventmodal" data-id="364" class="EVENT">Vasant Panchmi Celebration - Saraswati Vandana    <hr>
    </a>
    </li>
    </ul>
        </div>
    </div>
    </div>
    <!-- Grid column -->
    </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function(){
    
    $('.EVENT').click(function(){
    
    var val1=$(this).data('id');
    
    $.ajax({
    
    url:'modal_news.php',
    
    type:'post',
    
    data:{modal:val1},
    
    success:function(getdata){
    
    $('.response').html(getdata);
    
    },
    
    error: function(){
    
    alert("fail");
    
    }
    
    });
    
    });
    
    });
    
  </script>
  <section>
    <!-- Modal -->
    <!-- Modal: modalQuickView -->
    <div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body response">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event News and Circulur******************************************************* -->
  <!-- Section: Testimonials v.3 -->
  <section class="team-section text-center" id="tesimonial">
    <!-- Section heading -->
    <div class="row13 justify-content-center">
      <div class="col-md-8 text-center heading-section ftco-animate p-2">
        <h2 class="mb-4">Testimonials</h2>
      </div>
    </div>
    <!-- Section description -->
    <!--Grid row-->
    <div class="row13 text-center">
            <!--Grid column-->
      <div class="col-md-4 mb-md-0 mb-5 p-2">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto img1">
            <img src="admin/image/testinomial/Sumit Advani.jpg" style="width: 300px; height: 300px;" class="rounded-circle z-depth-1 img-fluid" >
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4 text-uppercase">Sumit Advani</h4>
          <h6>(&nbsp;Computer Engineering)</h6>
          <h6 class="font-weight-bold blue-text my-3">Project Engineer at Wipro</h6>
          <p class="font-weight-normal dark-grey-text">
                        <i class="fa fa-quote-left pr-2"></i>As we all know college is not just another step towards our education in our lives but also a most beautiful and an important part of life. As it comes with lots and lots of opportunities and practical knowledge not only in studies but also in competition....
          </p>
          <!--Review-->
          <div class="orange-text"><a href="testinomial" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!--Grid column-->
            <!--Grid column-->
      <div class="col-md-4 mb-md-0 mb-5 p-2">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto img1">
            <img src="admin/image/testinomial/jwal trivedi.jpg" style="width: 300px; height: 300px;" class="rounded-circle z-depth-1 img-fluid" >
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4 text-uppercase">jwal trivedi</h4>
          <h6>(&nbsp;Electrical Engineering)</h6>
          <h6 class="font-weight-bold blue-text my-3">Director, SAPT engineering PVT.Ltd</h6>
          <p class="font-weight-normal dark-grey-text">
                        <i class="fa fa-quote-left pr-2"></i>My sincere appreciation & gratitude to the  Department of Elkectrical engineering for their efforts in imparting quality technical and aptitude training. I am very grateful to them for effectively and sincerely helping me to grab first ever opportunity th....
          </p>
          <!--Review-->
          <div class="orange-text"><a href="testinomial" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!--Grid column-->
            <!--Grid column-->
      <div class="col-md-4 mb-md-0 mb-5 p-2">
        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto img1">
            <img src="admin/image/testinomial/manish.jpeg" style="width: 300px; height: 300px;" class="rounded-circle z-depth-1 img-fluid" >
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4 text-uppercase">Manish Mulchandani</h4>
          <h6>(&nbsp;Mechanical Engineering)</h6>
          <h6 class="font-weight-bold blue-text my-3">Arizona University, U.S.A., M.S.Manufacturin</h6>
          <p class="font-weight-normal dark-grey-text">
                        <i class="fa fa-quote-left pr-2"></i>Pursuing Baccalaureate from A.I.T. helped me achieve many milestones of my career. I got plenty of opportunities to advance my Technical and Inter-Personal skills. I express my heartful gratitude towards the well-equipped Mechanical Department for making ....
          </p>
          <!--Review-->
          <div class="orange-text"><a href="testinomial" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!--Grid column-->
          </div>
    <!--Grid row-->
  </section>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
    integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">-->
  <!--</script>-->
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col span-1-of-3">
        <div class="col-md-0 col-lg-0">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Reach Us</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Nr. Vasantnagar Township, Gota-Ognaj Road, Ahmedabad, GUJARAT- 382470 </span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-9510900587</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@aitindia.in</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">admission@aitindia.in</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="col span-1-of-4">-->
      <!--  <div class="col-md-0 col-lg-0">-->
      <!--    <div class="ftco-footer-widget mb-5 ml-md-4">-->
      <!--      <h2 class="ftco-heading-2">Important Links</h2>-->
      <!--      <ul class="list-unstyled">-->
      <!--        <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>-->
      <!--        <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>-->
      <!--        <li><a href="subject.php" class="js--scroll_to_what_we_offer"><span class="ion-ios-arrow-round-forward mr-2"></span>Subjects</a></li>-->
      <!--        <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
      <!--  </div>--> 
      <!--</div>-->
      <div class="col span-1-of-3">
        <div class="col-md-0 col-lg-0">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Connect&nbsp;With&nbsp;Us </h2>
            <div class="block-23 mb-3">
                            <style>
                .visit{
                position: absolute;
                top: 45%;
                left: 40%;
                transform: translate(-50%,-50%) perspective(500px);
                width: 200px;
                height: 50px;
                padding:10px;
                text-align: center;
                line-height: 10px;
                font-size: 20px;
                text-shadow: 6px 3px 2px rgba(0,0,0,.2);
                background: linear-gradient(90deg, #367086, #a41ee9);
                color: #fff;
                font-weight:bold;
                text-decoration: none;
                border-radius: 25px;
                letter-spacing: 13px;
                transition: .5s;
                overflow: hidden;
                box-shadow: 0 0 0 5px rgba(0,0,0,.2);
                }
                .visit:hover
                {
                transform: translate(-50%,-50%) perspective(500px);
                text-shadow: -6px 3px 2px rgba(0,0,0,.2);
                }
                .visit:before
                {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, #fff, transparent);
                transition: .5s;
                }
                .visit:hover:before
                {
                left: 100%;
                }
                .blinking{
                animation:blinkingText 1.2s infinite;
                }
                .textvisitors
                {
                font-weight:bold;
                font-size:30px;
                padding:60px;
                padding-left:20px;
                }
                @keyframes blinkingText{
                0%{     color: #fff;    }
                49%{    color: #fff; }
                60%{    color: transparent; }
                99%{    color:transparent;  }
                100%{   color: #fff;    }
                }
              </style>
              <ul>
                <li><a href="https://www.facebook.com/aitcollege2004/?rf=1702261500072009" target="_blank"><span class="icon icon-facebook"></span><span class="text">Connect With Us</span></a></li>
                <li class="blinking textvisitors">Visitors</li>
                <li class="visit blinking">143644</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col span-1-of-3">
        <div class="col-lg-0 col-md-3_ follow_us">
          <!--<div class="block-23 mb-3"> -->
          <div class="ftco-footer-widget mb-5" >
            <h2 class="ftco-heading-2">Contact Us</h2>
            <div class="block-23">
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-9510909622 (For Placement)</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-9510900587(For Admission Inquiry)</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-02717241133 (For General Information)</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-02717241132 (For General Information) </span></a></li>
                <!--<li><a href="#" data-toggle="modal" data-target="#modalRegisterFormmrecruitment"><span class="icon icon-building"></span><span class="text">Career</span></a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalRegisterFormmrecruitment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Career</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="career.php" enctype="multipart/form-data" name="career" onsubmit="return(validationcareer())">
          <div class="modal-body mx-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control" autocomplete="off" name="fullname" placeholder="Full Name" aria-label="Username"
                aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-phone"></i></span>
              </div>
              <input type="number" name="mobilenumber" autocomplete="off" class="form-control" placeholder="Mobile Number"
                aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
              </div>
              <input type="email" class="form-control" autocomplete="off" name="email" placeholder="Email" aria-label="Username"
                aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
              </div>
              <textarea class="form-control" name="address" autocomplete="off"  placeholder="Address" aria-label="Username"
                aria-describedby="basic-addon1" required></textarea>
            </div>
            
            <div class="input-group mb-3">
              <label class="radio-inline"><input type="radio" name="gender" value="Male" checked>Male</label>
              <label class="radio-inline pl-3"><input type="radio" name="gender" value = "Female">Female</label>
            </div>
            <!--<div class="input-group mb-3">-->
            <!--  <div class="input-group-prepend">-->
            <!--    <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-calendar"></i></span>-->
            <!--  </div>-->
            <!--  <input type="date" name="date" class="form-control" placeholder="Date Of Birth"-->
            <!--    aria-label="Date of Birth" aria-describedby="basic-addon1">-->
            <!--</div>-->
            <div class="input-group mb-3">
              <select name="higher_qualification" class="form-control" id="higher_qualification">
                <option value="">Education Qualification</option>
                <option value="B.E">B.E</option>
                <option value="M.E"> M.E</option>
                <option value="M.B.A">M.B.A</option>
                <option value="Ph.D">Ph.D</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="apply_for" autocomplete="off" placeholder="Apply For The Post of " aria-label="Apply For"
                aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
              <select name="branch" class="interested form-control" id="recruitment" onchange="recruit();">
                <option value="">Apply in Department</option>
                <option value="MBA"> MBA</option>
                <option value="ENGINEERING"> ENGINEERING</option>
                <option value="MASTER OF ENGINEERING"> MASTER OF ENGINEERING</option>
              </select>
            </div>
            <style>
              #recruitment_branch {
              display: none;
              }
            </style>
            <div id="recruitment_branch">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example1" value="Computer Engineering">
                <label class="form-check-label" for="exampleCheck1">Computer Engineering</label> <br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example2" value="Information Technology">
                <label class="form-check-label" for="exampleCheck2">Information Technology</label><br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="examplek3" value="Automobile Engineering">
                <label class="form-check-label" for="exampleCheck3">Automobile Engineering</label><br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example4" value="Electrical Engineering">
                <label class="form-check-label" for="exampleCheck4">Electrical Engineering</label><br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example5" value="Electronics and Communication">
                <label class="form-check-label" for="exampleCheck5">Elcetronics and communication</label><br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example6" value="Mechanical Engineering">
                <label class="form-check-label" for="exampleCheck6">Mechanical Engineering</label><br>
                <input type="checkbox" class="form-check-input" name="choice_recruit[]" id="example7" value="Civil Engineering">
                <label class="form-check-label" for="exampleCheck6">Civil Engineering</label><br>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="file" name="fileupload" value="fileupload" id="fileupload">
              <label for="fileupload">Attach Resume</label>
            </div>
            <script>
              function recruit() {
                var e = document.getElementById("recruitment");
                var result_recruit = e.options[e.selectedIndex].value;
                if (result_recruit == "ENGINEERING") {
                  document.getElementById("recruitment_branch").style.display = "block";
                }
                else {
                    document.getElementById("recruitment_branch").style.display = "none";
                }
              }
            </script>
            <div class="input-group mb-3">
              <select name="experience" class="form-control" id="experience" >
                <option value="">Experience</option>
                <option value="fresher">Fresher</option>
                <option value="1 years"> 1 year</option>
                <option value="2 years"> 2 Years</option>
                <option value="3 years"> 3 Years</option>
                <option value="4 years"> 4 Years</option>
                <option value="5 years"> 5 Years</option>
                <option value="6 years"> 6 Years</option>
                <option value="7 years"> 7 Years</option>
                <option value="8 years"> 8 Years</option>
                <option value="9 years"> 9 Years</option>
                <option value="9 + years"> 9 + Years</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="current_designation" placeholder="Current Designation" aria-label="Current Designation"
                aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text width_admission" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="current_organization" placeholder="Current Working Organization" aria-label="Current Firm"
                aria-describedby="basic-addon1" required>
            </div>
            <center> <div class="wrap-input100 validate-input pb-2" data-validate="Enter password">
            <div class="g-recaptcha" data-sitekey="6LfE5r8ZAAAAAGiQJ0ViTDgFh0D2igK2Cfr5SRDq"
              data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
          </div></center>
            <!--<p class="hide"><b>Interested In?</b></p>-->
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <input type="submit" name="submit" class="btn btn-success" value="Apply">
          </div>
      </div>
    </div>
  </div>
  </form>
  <script>
        function validationcareer(){
            var emailID = document.career.email.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
            if( document.career.fullname.value == "" ) {
            alert( "Please provide your name!" );
            document.career.fullname.focus() ;
            return false;
         }
         if( document.career.mobilenumber.value == "" ) {
            alert( "Please provide your mobile number!" );
            document.career.mobilenumber.focus() ;
            return false;
         }
         else if(document.career.mobilenumber.value.length < 10){
            alert( "Please provide 10 digit contact number!" );
            document.career.mobilenumber.focus() ; 
            return false;
         }
         if( document.career.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.career.email.focus() ;
            return false;
         }
         else if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.career.email.focus() ;
            return false;
         }
         if( document.career.address.value == "" ) {
            alert( "Please provide your address!" );
            document.career.address.focus() ;
            return false;
         }
         if( document.career.apply_for.value == "" ) {
            alert( "Please provide your post!" );
            document.career.apply_for.focus() ;
            return false;
         }
         return (true);
                }
            </script>
  <!--<script>-->
  <!--    function applyfunction(){-->
  <!--        alert("Thank for your Interst we approch you to soon");-->
  <!--    }-->
  <!--</script>-->
  <div class="row13">
    <div class="col-md-12 text-center">
      <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved with  by <a href="http://aitindia.in" target="_blank">Ahmedabad Institute of Technology</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      <div class="developed by">
        <p>Development Team: Dr. Ajay N. Upadhyaya,
          <a href="https://www.instagram.com/mitesh_chhatbar/?hl=en"> &nbsp;Chhatbar Mitesh</a>,<a href="https://www.instagram.com/jaydeep549/"> &nbsp;Jaydeep Panchal</a> &<a href="https://www.instagram.com/iyengaranuj/">  &nbsp;Anuj
          Iyengar</a>
        </p>
      </div>
    </div>
  </div>
  </div>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        var body = $("html, body");
    body.stop().animate({scrollTop:0}, 1000, 'swing', function() { 
    //   alert("Finished animating");
    });
    //   document.body.scrollTop = 0;
    //   document.documentElement.scrollTop = 0;
    }
//     $("html").keypress(function(){
// 		if(!(event.which==17))
// 		{
// 		    event.preventDefault();
// 		}
// 	});

document.onkeydown = function (e) { 
            if (event.keyCode == 123) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) { 
                return false; 
            } 
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) { 
                return false; 
            } 
        } 
    
  </script>
</footer>
<!--<script src="js/slideshow.js"></script>-->
<!--<script src="js/placement.js"></script>-->
<!--<script src="js/homeslider.js"></script>-->
<script src="js/script.js"></script>
<!--<script src="js/jquery.waypoints.min.js"></script>-->
</body>
<script>
  $( document ).ready(function() {
      console.clear();
  });
</script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--===============================================================================================-->
  <script src="admin/login/recaptcha/validator.js"></script>
  <!--===============================================================================================-->
  <script src="admin/login/recaptcha/contact.js"></script>
<!--</html>-->