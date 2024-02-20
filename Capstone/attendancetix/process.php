<?php
    include "conn.php";

    date_default_timezone_set("Asia/Hong_Kong");

    session_start();
    
    //this code is for admin process
    
// Admin Login Process
if (isset($_POST['admin_login'])) {
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];

    $checkadmin = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
    $num = mysqli_num_rows($checkadmin);

    if ($num >= 1) {
        $_SESSION['email'] = $email;
        header("Location: admin/adminhome.php");
        exit();
    } else {
        echo "<script>alert('Error Email or Password');window.location.href='index.php';</script>";
        exit();
    }
}

// Department Login Process
if (isset($_POST['department_login'])) {
    $email = $_POST['department_email'];
    $password = $_POST['department_password'];

    $check_department = mysqli_query($conn, "SELECT * FROM department WHERE email='$email' AND password='$password'");
    $department = mysqli_fetch_assoc($check_department);

    if ($department) {
        $_SESSION['department'] = $department['department'];
        switch ($department['department']) {
            case 'csdl':
                $redirect_url = "department/csdl.php";
                break;
            case 'marketing':
                $redirect_url = "department/marketing.php";
                break;
            case 'registrar':
                $redirect_url = "department/registrar.php";
                break;
            case 'cite':
                $redirect_url = "department/cite.php";
                break;
            case 'clinic':
                $redirect_url = "department/clinic.php";
                break;
            default:
                $redirect_url = "index.php"; // Redirect to index.php if department is not recognized
                break;
        }
        header("Location: $redirect_url");
        exit();
    } else {
        echo "<script>alert('Error Email or Password');window.location.href='index.php';</script>";
        exit();
    }
}

// Logout Process
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}


    // Department registration process
    if(isset($_POST['dep_reg_button'])){
        $department_name = $_POST['department_name'];
        $email = $_POST['department_email'];
        $password = $_POST['department_password'];
     
        // Validation
        $validate_email = mysqli_query($conn, "SELECT * FROM `department` WHERE `email` = '$email'");
        $count_email = mysqli_num_rows($validate_email);

        if($count_email == 0){
            $insert = mysqli_query($conn, "INSERT INTO `department` (`email`, `password`, `department`) VALUES ('$email', '$password', '$department_name')");
            if($insert){
                echo "<script>alert('Department Registration Successful!');window.location.href='index.php';</script>";
            }else{
                echo "<script>alert('Error in Department Registration');window.location.href='index.php';</script>";
            }
        }else{
            echo "<script>alert('Email already exists');window.location.href='index.php';</script>";
        }
    }

    // Logout process
    if(isset($_POST['logout'])){
        session_destroy();
        ?>
        <script>
            window.location.href="index.php";
        </script>
        <?php
    }

   
    //this code is for student registration
    if(isset($_POST['reg_button'])){

        $fname=$_POST["fname"];
        $lname=$_POST['lname'];
        $department=$_POST['department'];
        $password=$_POST["password"];
        $student_id=$_POST['id'];
        $email=$_POST["email"];
     
        //----validation--//

        $validate_student_id = mysqli_query($conn, "SELECT * FROM `student` WHERE `studentid` = '$student_id' ");
        $count_student_id = mysqli_num_rows($validate_student_id);

        $validate_email = mysqli_query($conn, "SELECT * FROM `student` WHERE `email` = '$email' ");
        $count_email = mysqli_num_rows($validate_email);

        if($count_student_id == 0){
            if($count_email == 0){
                $insert = mysqli_query($conn, "INSERT INTO `student` 
                VALUES('0','$fname','$lname', ' $department', '$student_id', '$email', '$password')");

                if($insert){
                    ?>
                    <script>
                        alert("Your Registration was Successful!");
                        window.location.href="index.php"
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Error in Registration");
                        window.location.href = "index.php";
                    </script>
                    <?php
                }
            }else{
                ?>
                <script>
                    alert("Email already exist");
                    window.location.href = "index.php";
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Student ID already exist");
                window.location.href = "index.php";
            </script>
            <?php
        }
        
    } // this is the closing of registration


    //this code is for student login!

    if(isset($_POST['login'])){
        $student_id = $_POST['login_id'];
        $password = $_POST['login_password'];
        
        $check_studentID = mysqli_query($conn, "SELECT * FROM `student` WHERE `studentid` = '$student_id'");
        $count_studentID = mysqli_num_rows($check_studentID);

        if($count_studentID == 1){
            $row_data = mysqli_fetch_assoc($check_studentID);
            $password_DB = $row_data['password'];

            if($password_DB == $password){
                $id_DB = $row_data['id'];

                $_SESSION['session_id'] = $id_DB;

                ?>
                <script>
                    window.location.href="student/studentdashboard.php"
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Incorrect password!");
                    window.location.href="index.php"
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Please create account!");
                window.location.href="index.php"
            </script>
            <?php
        }
    }
   
   //THIS IS FOR ATTENDANCE--------------------------------------------

   //Time In ---------------------------------------------------------------------------
   if(isset($_POST['time_in'])){

     $student_id = $_POST['student_id'];
     $datetoday = date("M d, Y");
     $timetoday = date("h:i A");
    

     $check=mysqli_query($conn, "SELECT * FROM student WHERE studentid='$student_id'");

     $num = mysqli_num_rows($check);

     if($num >=1){
       
       mysqli_query($conn, "INSERT INTO attendance (`student_id`, `date_recorded`, `time_in`, `time_out`) values
                                                    ('$student_id',  '$datetoday',  '$timetoday', 0)");

                 ?>
                     <script>
                      alert("Time-In");
                      window.location.href="index.php"
                     </script>
                 <?php
     }else{

                 ?>
                     <script>
                      alert("Wrong ID Number");
                      window.location.href="index.php"
                     </script>
                 <?php
     }      
 
   }

    //Time Out---------------------------------------------------------------------------
   
    if(isset($_POST['time_out'])){

        $student_id = $_POST['student_id'];
        $datetoday = date("M d, Y");
        $timetoday = date("h:i A");
       
   
 
$sqlSelect = mysqli_query($conn, "SELECT * FROM attendance WHERE student_id = '$student_id' AND date_recorded = '$datetoday'");

    while($attendanceRow = mysqli_fetch_assoc($sqlSelect)){

        $timeOut = $attendanceRow['time_out'];
        $time_in = $attendanceRow['time_in'];
        $attendance_date = $attendanceRow['date_recorded'];
    
}
    
if($attendance_date == $datetoday && $timeOut == "0"){

$update = mysqli_query($conn, "UPDATE attendance SET time_out ='$timetoday' WHERE student_id = '$student_id' AND time_out='0' AND date_recorded = '$datetoday'");

if(!$update){
    header("");
    }
    else{
        ?>
        <script>
         alert("Time-Out");
         window.location.href="index.php"
        </script>
    <?php
        }
    } //if($timeOut == "")
    else{
        ?>
                     <script>
                      alert("Wrong ID number");
                      window.location.href="index.php"
                     </script>
                 <?php
    }
    
    } //f(isset($_POST['timeOut']))
    
  
   
?>