<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Web Mailer</title>
    <link rel="stylesheet" href="style_signup.css">
</head>

<body>
<div id="header">
        <h3>Programming Assistant</h3>
        <!-- <div class="ppp">   <?php echo $_SESSION["user_mail"] ; ?></div> -->
        <!-- <button>    Signup</button>
        <button>    About</button> -->

    </div>

    <div class="panel">
        <h1>Sign Up</h1>
         <form action="signup1.php" method ="post">
            
            <div id=box> <input type="text" placeholder="User name" name="userName"></div>
            <div id=box> <input type="text" placeholder="mail : example@webmail.com" name="email"></div>

            <div id=box> <input type="text" placeholder="Codeforces handle" name="handleCf"></div>
            <div id=box> <input type="text" placeholder="Atcoder handle" name="handleAc"></div>
            <div id=box> <input type="text" placeholder="CodeChef handle" name="handleCc"></div>
            <div id=box> <input type="text" placeholder="UVA handle" name="handleUv"></div>

            <div id=box> <input type="password" placeholder="Password" name="password"></div>
            <div id=box> <input type="password" placeholder="Confirm password" name="cpassword"></div>
            <div id=btn> <input class="btn" type="submit" value="Sign Up" name="submit"></div>
            <div id="msg" style="display:none"; color="red"> <center>some massage here </center></div>
            <br>
            <br>
            <span><a href="login.php">already have an account?Log in</a> </span>
        </form>
    </div>

</body>

</html>














