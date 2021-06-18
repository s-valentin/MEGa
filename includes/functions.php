 <?php
   

 function invalidEmail($email){
    global $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
 }

 function passwordMatch($password,$rptpassword){
     global $result;
     if($password!=$rptpassword){
         $result=true;
     }
     else{
         $result=false;
     }
     return $result;
 }

 
 function invalidUsername($username){
    global $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

 function usernameTaken($conn,$username,$email){
     $sql= "SELECT * FROM users WHERE usersName=? OR userEmail=?; ";
     $statement= mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($statement,$sql)){
        header("location:../html/signup.php?error=statementFailed");
        exit();
     }

     mysqli_stmt_bind_param($statement,"ss",$username,$email);
     mysqli_stmt_execute($statement);

     $resultData= mysqli_stmt_get_result($statement);
     if($row=mysqli_fetch_assoc($resultData)){
            return $row;
     }
     else{
         $result=false;
         return $result;
     }

     mysqli_stmt_close($statement);
 }


 function createUser($conn,$username,$email,$password){
    $sql= "INSERT INTO users (usersName,userEmail, userPassword) VALUES (?,?,?);";
    $statement= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement,$sql)){
       header("location:../html/signup.php?error=statementFailed");
       exit();
    }
    $hashedPassword=password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement,"sss",$username,$email,$hashedPassword);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location:../html/signup.php?error=none");
       exit();
}

    function loginUser($conn,$username,$password) {
        $usernameTaken=usernameTaken($conn,$username,$username);
        if($usernameTaken=== false){
            header("location: ../html/login.php?error=wrongLogin");
            exit();
            
        }

        $hashedPassword=$usernameTaken["userPassword"];
        $checkPassword= password_verify($password,$hashedPassword);

        if($checkPassword===false){
            header("location: ../html/login.php?error=wrongLogin");
            exit();
            
        } else if($checkPassword===true){
            session_start();
            $_SESSION["userid"]=$usernameTaken["userId"];
            $_SESSION["userName"]=$usernameTaken["usersName"];
            header("location: ../html/index.php");
            exit();
        }
    }   
    
