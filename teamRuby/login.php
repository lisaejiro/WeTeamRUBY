<?php
require 'conn.php';
//session_start();
$_SESSION['i']='';

$unam=$pass=$err="";
$passw=$uname=$pa=$err2="";
if(isset($_POST['register'])){
    require("register.php");
    }

    if(isset($_POST['login'])){
        require("login-user.php");
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page | Team Ruby</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="font/css/font-awesome.css">
    
</head>
<body>
    
<div class="box">
        <h2 class="text"> Log in</h2>

        <div class="user">
                <span class="fa fa-user-circle" aria-hidden="true"></span>
                <div class="clear"> </div>
            </div>

            <div class="rol">
                    <div class="button">
                            <a href="#" data-toggle="modal" data-target="#myModal">Welcome back</a>
                        </div>

                        <div class="button">
                                <a href="#" data-toggle="modal" data-target="#myModal1">Register</a>
                            </div>
            </div>

</div>

<!-- register -->


<div class="copy">
        <p>&copy;2019 Login and Registration Form. All Rights Reserved | by HNG Team Ruby</p>
    </div>

<!-- login modal  -->
    <div class="modal " id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content bg-secondary">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title text-center">LOGIN FORM</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                        <form action="login.php" method="post" class="needs-validation" novalidate>
                            <div class="form-group">
                              <label for="uname">Username:</label>
                              <input type="text" class="form-control" id="uname" placeholder="Enter username" name="user" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback ">Username Required.</div>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Password Required.</div>
                            </div>
                          <span style="color:red; font-size:18px; display:block;"><?php echo $pa; ?></span>
                          <span style="color:red; font-size:18px; display:block;"><?php echo $err2; ?></span>

                            
                            <button type="submit" name="login" class="btn btn-primary">LOGIN</button>
                            <br>
                            <br>
                            <p>Dont have an account?  <a href="#myModal1" data-toggle="modal" data-target="#myModal1" class="text-danger"> Click here to Register</a></p>
                           
                                    
                        </form>
                          
                          <script>
                          // Disable form submissions if there are invalid fields
                          (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                              // Get the forms we want to add validation styles to
                              var forms = document.getElementsByClassName('needs-validation');
                              // Loop over them and prevent submission
                              var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                  if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                  }
                                  form.classList.add('was-validated');
                                }, false);
                              });
                            }, false);
                          })();
                          </script>
                </div>
          
               
               
          
              </div>
            </div>
          </div>
          
          <!-- login modal end  -->
          <!-- register modal  -->
<div class="modal " id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content bg-secondary">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-center">REGISTER</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                    <form action="login.php" method="Post" >
                        <div class="form-group">
                          <label for="uname">Username:</label>
                          <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" >
                          <!-- <div class="valid-feedback">Valid.</div> -->
                          <!-- <div class="invalid-feedback ">Username Required.</div> -->
                          <span style="color:red; font-size:18px;"><?php echo $unam; ?></span>
                        </div>

                        
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" >
                          <div class="valid-feedback">Valid.</div>
                          <!-- <div class="invalid-feedback">Password Required.</div> -->
                          <span style="color:red; font-size:16px;"><?php echo $pass; ?></span>

                        </div>

                        <div class="form-group">
                                <label for="pwd"> Confirm Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd2" >
                               <span style="color:red; font-size:16px;"><?php echo $err; ?></span>
                                
                              </div>
                        
                        <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
                        <br>
                        <br>
                        
                        
                    </form>
                      
                      <script>
                      // Disable form submissions if there are invalid fields
                      (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                          // Get the forms we want to add validation styles to
                          var forms = document.getElementsByClassName('needs-validation');
                          // Loop over them and prevent submission
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                      </script>
            </div>


    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/sweetalert2.all.min.js" type="text/javascript"></script>

<?php if(isset($_SESSION['i']) && $_SESSION['i']==true){?>
      <script>
          $("#myModal1").modal();
      </script>
           
<?php }  unset($_SESSION['i']);?>        
      
<?php if(isset($_SESSION['s']) && $_SESSION['s']==true){?>
      <script>
         Swal.fire({
             position: 'center',
             title:'<?php echo $_SESSION['sms']?>',
             type:'success',
             showCancelButton:false,
         })
      </script>
           
<?php }  unset($_SESSION['s']);?>    

<?php if(isset($_SESSION['p']) && $_SESSION['p']==true){?>
      <script>
          $("#myModal").modal();
      </script>
           
<?php }  unset($_SESSION['p']);?> 
      
          </div>
        </div>
      </div>

<!-- register  -->


         
      
      

    
</body>
</html>