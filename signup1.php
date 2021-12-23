<?php
echo"working";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nextstage=1;
    
    $server      = "localhost";
    $password    = "";
    $user        = "root";
    $database    = "programming_assistant";
    
    $connection = mysqli_connect($server, $user, $password, $database);

    
    $userName=$_POST["userName"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];
    $email=$_POST["email"];
    $handleCf=$_POST["handleCf"];
    $handleCc=$_POST["handleCc"];
    $handleUv=$_POST["handleUv"];
    $handleAc=$_POST["handleAc"];
    
    
    $sql= "SELECT * FROM userInfo WHERE userName = '$userName'";
    $query = mysqli_query($connection, $sql);
    $num_rows= mysqli_num_rows($query);
    if($num_rows){
        $msg = "User Name Already Exists, try new user name"."<br>";
        $nextstage = 0;
        mysqli_close($connection);
    }
    elseif($pass != $cpass){
        $msg = "*Password did not matchhh"."<br>";
        $nextstage = 0;
    }
    elseif(!$pass){
        $msg = "*password required".'<br>';
        $nextstage = 0;
    }
    elseif(!$userName){
        $msg = '*last name required'.'<br>';
        $nextstage = 0;
    }
    elseif(!$email){
        $msg = '*email required'.'<br>';
        $nextstage = 0;
    }
    if($nextstage==1){
        
        $sql= "Insert into userinfo (userName, password, email, handleCf, handleAc,handleCc, handleUv) values('$userName','$pass','$email', '$handleCf', '$handleAc', '$handleCc', '$handleUv')";
        
        $iquery = mysqli_query($connection,$sql);
        
        if($iquery)
        {
            echo "successful";
            mysqli_close($connection);
            header("Location: login.html");
        }
        else
        {
            echo 'failed to insert data'.'<br>';
        }
        
        
    }
    
}



?>

<script>
    setTimeout(alert("<?php echo $msg ?>"),4000);
    console.log("<?php echo $msg ?>");
    window.location.href = "signup.php";
</script>
