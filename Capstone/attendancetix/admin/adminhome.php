<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        <a class="navbar-brand brand-logo text-primary" href="adminhome.php">Admin's Dashboard</a>
        <a class="navbar-brand brand-logo-mini" href="adminhome.php"><img src="images/UI-icon.png" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-view-headline text-primary"></span>
        </button>
      </div>  
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100">
        <li class="nav-item nav-search d-none d-lg-block w-100">
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown me-1">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
          </a>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="images/UI.png" alt="profile"/>
            <span class="nav-profile-name text-dark">Admin</span>
          </a>

          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
         <ul>
<form action="../process.php" method="POST">
    <ul>
        <a class="nav-link collapsed text-primary" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
            <i class="mdi mdi-export menu-icon text-primary"></i>
            <span>Register</span>
        </a>
</ul>
    <ul>
        <button class="dropdown-item" type="submit" name="logout">
            <i class="mdi mdi-export menu-icon text-primary"></i>
            <span>Log Out</span>
        </button>
</ul>
</form>

</ul>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>

  <div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="adminhome.php">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed text-primary" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" >
            <i class="mdi mdi-arrow-down menu-icon text-primary"></i><span class="menu-title">Department</span>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <a class="nav-link collapsed text-primary" href="csdl.php">
              <i class="mdi mdi-account menu-icon text-primary"></i><span>CSDL</span>
            </a>
            <a class="nav-link collapsed text-primary" href="marketing.php">
              <i class="mdi mdi-account menu-icon text-primary"></i><span>Marketing</span>
            </a>
            <a class="nav-link collapsed text-primary" href="registrar.php">
              <i class="mdi mdi-account menu-icon text-primary"></i><span>Registrar</span>
            </a>
            <a class="nav-link collapsed text-primary" href="cite.php">
              <i class="mdi mdi-account menu-icon text-primary"></i><span>Cite</span>
            </a>
            <a class="nav-link collapsed text-primary" href="clinic.php">
              <i class="mdi mdi-account menu-icon text-primary"></i><span>Clinic</span>
            </a>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
              <div class="d-flex align-items-end flex-wrap">
                <div class="me-md-3 me-xl-5">
                  <h2>Welcome back Admin,</h2>
                  <p class="mb-md-0">You can check the record history of the attendances of scholars here.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Department Registration Form Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../process.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="department_email" placeholder="Enter email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="department_password" placeholder="Enter password" required>
          </div>
          <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select class="form-select" id="department" name="department_name" required>
              <option selected disabled>Select department</option>
              <option value="csdl">CSDL</option>
              <option value="marketing">Marketing</option>
              <option value="registrar">Registrar</option>
              <option value="cite">Cite</option>
              <option value="clinic">Clinic</option>
              <!-- Add more options for other departments -->
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="dep_reg_button">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.cookie.js" type="text/javascript"></script>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const registerButton = document.querySelector('.nav-link[data-bs-target="#registerModal"]');
    registerButton.addEventListener("click", function(event) {
      event.preventDefault();
      const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
      registerModal.show();
    });

    // Listen for modal close event
    const registerModal = document.getElementById('registerModal');
    registerModal.addEventListener('hidden.bs.modal', function () {
      // Remove backdrop element to restore website interactivity
      const backdrop = document.querySelector('.modal-backdrop');
      backdrop.parentNode.removeChild(backdrop);
    });
  });
</script>
</body>
</html>
