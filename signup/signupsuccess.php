<?php
  $conn = mysqli_connect("localhost", "root", "", "omegaread");
    //if(isset($_POST['submit'])){
      $email = $_POST['Email'];
      $firstname = $_POST['FirstName'];
      $lastname = $_POST['LastName'];
      $password = $_POST['Password'];
      $mobno = $_POST['MobNo'];
      $area = $_POST['Area'];
      $locality = $_POST['Locality'];
      $city = $_POST['City'];
      $pincode = $_POST['Pincode'];
      $userid = $_POST['UserName'];

      if(empty($userid) || empty($password)||empty($lastname) || empty($firstname)||empty($mobno) || empty($password)||empty($pincode) || empty($locality)||empty($area) || empty($email)){

        header("Location: signup.php?error=emptyfields&UserName=".$userid."&Email=".$email."&fname=".$firstname."&lname=".$lastname."&mobno=".$mobno."&locality=".$locality."&area=".$area."&pincode=".$pincode."&city=".$city);
        exit();
      }
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userid)){
        header("Location: signup.php?error=invalidusernamemail");
        exit();
      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=invalidusername&mail=".$email);
        exit();
      }
      elseif(!preg_match("/^[a-zA-Z0-9]*$/", $userid)) {
        header("Location: signup.php?error=invalidusername&uid=".$userid);
        exit();
      }
      
      else{
        $sql ="select user_id from customer where user_id=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: signup.php?error=sqlerror&UserName=".$userid."&Email=".$email."&fname=".$firstname."&lname=".$lastname."&mobno=".$mobno."&locality=".$locality."&area=".$area."&pincode=".$pincode."&city=".$city);
          exit();
        }
        else{
          mysqli_stmt_bind_param($stmt, "s", $userid);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultcheck = mysqli_stmt_num_rows($stmt);
          if($resultcheck>0){
            header("Location: ../login/login.php");
            exit();
          }
          else{
            $sql = "insert into customer(user_id,email,password,first_name,last_name,area,locality,city,mobile_no,pincode) values(?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              header("Location: signup.php?error=usertaken&UserName=".$userid."&Email=".$email."&fname=".$firstname."&lname=".$lastname."&mobno=".$mobno."&locality=".$locality."&area=".$area."&pincode=".$pincode."&city=".$city);
              exit();
            } 
            $hashedpwd = $password;
            password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssssssssss", $userid, $email, $hashedpwd, $firstname, $lastname, $area, $locality, $city, $mobno, $pincode);
            mysqli_stmt_execute($stmt);
            $_SESSION['loggedIn'] = true;  
            header("Location: ../homepage/homepage.php?signup=success");
            exit();
          }
        }
      }
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    //}
?> 