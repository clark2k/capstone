<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Attendance Monitoring System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/UI.png" rel="icon">
  <link href="assets/img/UI-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Aug 17 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 
<body onload="initClock()">
    
            
        
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center bg-dark">
    <div class="container d-flex align-items-center justify-content-between bg-dark">

      <h1 class="logo"><a href="index.php">ATTENDANCE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down" ></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#adminmodal" >Login As Admin</a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#departmentmodal" >Login As Department</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Student</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" >Login As Student</a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#regmodal" >Register As Student</a></li>
            </ul>
          </li>
          <a href="#" data-bs-toggle="modal" data-bs-target="#attendancemodal"><span>Attendance</span> </a>
          
            <!-------------------------------------------Time--------------------------->
            
          <div class="time" style="color:white;font-weight: bold; font-size: 30px; padding-left:30px;">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500" >
        
        <!------------------------------------------------ Date----------------------------------------->
        
         <div class="datetime" style="color:white;  font-size: 50px;  font-weight: 500;">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
    </div>
    
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
        
        
        
      <h1>ITE 401 Midterm Examination</h1>
      <h2>This system is for the attendance of HK students that are assigned in the 5 departments.</h>
    </div>
  </section>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


<!-- Admin Login Modal -->
<div class="modal fade" id="adminmodal" tabindex="-1" aria-labelledby="adminmodallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="adminmodallabel">Login As Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal -->
      <div class="modal-body">
        <form action="process.php" method="POST">

          <div class="input-group mb-3">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-envelope-check"></i>
            </div>
            <input type="email" name="admin_email" required placeholder="Enter your email here" class="form-control">
          </div>
          
          <div class="input-group">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-shield-lock"></i>
            </div>

            <input type="password" class="form-control" name="admin_password"
            required placeholder="Enter your password here" id="id"> 
          </div>

          <input type="checkbox" onclick="myFunction()">Show Password
          
      </div>

      <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-dark">
        <input type="submit" name="admin_login" value="Login" class="btn btn-danger">
      </div>

    </form>

    </div>
    
  </div>
</div>

<!-- Department Login Modal -->
<div class="modal fade" id="departmentmodal" tabindex="-1" aria-labelledby="departmentmodallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="departmentmodallabel">Login As Department</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal -->
      <div class="modal-body">
        <form action="process.php" method="POST">

          <div class="input-group mb-3">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-envelope-check"></i>
            </div>
            <input type="email" name="department_email" required placeholder="Enter your email here" class="form-control">
          </div>
          
          <div class="input-group">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-shield-lock"></i>
            </div>

            <input type="password" class="form-control" name="department_password"
            required placeholder="Enter your password here" id="id"> 
          </div>

          <input type="checkbox" onclick="myFunction()">Show Password
          
      </div>

      <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-dark">
        <input type="submit" name="department_login" value="Login" class="btn btn-danger">
      </div>

    </form>

    </div>
    
  </div>
</div>



<!-- Student Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="loginmodallabel">Login As Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal -->
      <div class="modal-body">
        <form action="process.php" method="POST">
          
          <div class="input-group mb-3">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-envelope-check"></i>
            </div>
            <input type="text" name="login_id" required placeholder="Enter your Student ID here" class="form-control">
          </div>
          
          <div class="input-group">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-shield-lock"></i>
            </div>

            <input type="password" class="form-control" name="login_password"
            required placeholder="Enter your password here" id="password"> 
          </div>

          
      <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-dark">
        <input type="submit" name="login" value="Login" class="btn btn-danger">
      </div>

          </div>

          
      </div>

    </form>

    </div>

    
  </div>
</div>

<!-- Student Register Modal -->
<div class="modal fade" id="regmodal" tabindex="-1" aria-labelledby="regmodallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="regmodallabel">Register As Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal -->
      <div class="modal-body">
        <form action="process.php" method="POST">

          <div class="input-group mb-3">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-person-circle"></i>
            </div>
            <input type="text" name="fname" required placeholder="Enter your First Name here" class="form-control">
          </div>
        

            <div class="input-group mb-3">
              <div class="input-group-text bg-danger text-white">
                <i class="bi bi-person-circle"></i>
              </div>
              <input type="text" name="lname" required placeholder="Enter your Last Name here" class="form-control">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-text bg-danger text-white">
                <i class="bi bi-person-circle"></i>
              </div>
             

         <select type="text" name="department" class="form-control" >
              <option value="department">Select Department</option>
              <option value="csdl">Csdl</option>
              <option value="marketing">Marketing</option>
              <option value="registrar">Registrar</option>
              <option value="cite">Cite</option>
              <option value="clinic">Clinic</option>
         </select>

            </div>


            
            <div class="input-group mb-3">
              <div class="input-group-text bg-danger text-white">
                <i class="bi bi-person-circle"></i>
              </div>
              <input type="text" name="id" required placeholder="Enter your Student ID here" class="form-control">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-text bg-danger text-white">
                <i class="bi bi-person-circle"></i>
              </div>
              <input type="text" name="email" required placeholder="Enter your Email here" class="form-control">
            </div>
            
            
            
            <div class="input-group">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-shield-lock"></i>
            </div>

            

            

            <input type="password" class="form-control" name="password"
            required placeholder="Enter your password here" id="password"> 
          </div>

        <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-dark">
        <input type="submit" name="reg_button" value="Register" class="btn btn-danger">
      </div>
      </div>

    </form>

    </div>

    
  </div>
</div>

<!-- Attendance Login Modal -->
<div class="modal fade" id="attendancemodal" tabindex="-1" aria-labelledby="attendancemodallabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="attendancemodallabel">Attendance</h5>
        
    
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
            
      </div>
      <!-- Modal -->
      <div class="modal-body">
        <form action="process.php" method="POST">
          
          <div class="input-group mb-3">
            <div class="input-group-text bg-danger text-white">
              <i class="bi bi-envelope-check"></i>
            </div>
           
             <input type="text"  name="student_id" placeholder="Enter ID-Number"> </p>
             
             
            
              
            
               
          </div>
          
          

      </div>
      <div class="modal-footer">
         
        <input type="submit"  name="time_in" value="Time-In" class="btn btn-danger" reqiured> </p>
               
             <input type="submit"  name="time_out" value="Time-Out" class="btn btn-dark" reqiured> </p>
             
         
        </form>
      </div>

          </div>

          
      </div>

    </form>

    </div>

    
  </div>
</div>

<!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Records</h4>
              <p>Log in to check all of your duty hours.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Log in</h4>
              <p>Time-in to record your attendance, on what time you started.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4>Log out</h4>
              <p>Time-out to record your attendance, on what time you ended.</p>
            </div>
          </div>

        </div>

      </div>


        


</body>

</html>