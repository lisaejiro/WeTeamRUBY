<?php



if ($_SERVER["REQUEST_METHOD"] =="POST") {

    
        $user= $conn->real_escape_string(test_values($_POST['user']));			
        $passw=$conn->real_escape_string(test_values($_POST['pwd']));



    $sql = $conn->query("SELECT * FROM register WHERE name='$user' ");
                  
                 //verify user password with hashed password
               

                    $row = $sql->fetch_assoc();
                 if (password_verify ($passw, $row['pass'])) {								
                     $_SESSION['login']=true;
                     $_SESSION['user']=$row['name'];
                     $_SESSION['id'] =$row['id'];
                    header("location:index.php"); 
                 }else{
                    $pa = 'Invalid Login Details';
                    $_SESSION['p']=true;
                 }


                }
                 
             

    









//function to test input
function test_values($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>