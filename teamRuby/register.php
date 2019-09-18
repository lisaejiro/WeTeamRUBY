<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    //check f register is set
    
    //validate username
    if (empty($_POST["uname"])) {
        $unam = 'Username required';
        $_SESSION['i']=true;
    } else{
        $uname = test_values($_POST["uname"]);
        
    }

    //validate password
    if(empty($_POST["pswd"])){        
        $pass = 'Password is required';
        $_SESSION['i']=true;
    }elseif(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST["pswd"])){                
        $pass = 'Password must be in alphanumeric.';
        $_SESSION['i']=true;
    }elseif(strlen($_POST["pswd"])< 6){
        $pass = 'Password must be at least six characters.';
        $_SESSION['i']=true;
    }else {
        $passw = test_values($_POST["pswd"]); 
    }  
    
    
    $passw2 = test_values($_POST["pswd2"]);
    // echo  $passw. '<br/> '.$passw2;
    // die();
    // validating passwords

  if($passw !== $passw2) {
    $err="<b>Invalid operation... Wrong password confirmation supplied!</b>";
    $_SESSION['i']=true;
    }else{
        $passw = password_hash(test_values($_POST["pswd"]),PASSWORD_DEFAULT);
    }


    if(empty($unam) && empty($pass) && empty($err)){
        //create account
        mysqli_query($conn, "insert into register set name='$uname', pass='$passw'") or die(mysql_error($conn));
        
        $passw="";

          $success="<font color=green><b>Your registration was successful!</b></font>";
            $_SESSION['s']=true;
            $_SESSION['sms']="Your registration was successful!";
        }
        
     
   
    }


function test_values($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = empty($data);
    return $data;
}


?>