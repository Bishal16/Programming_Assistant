<?php

$userHandle = "ashik";



$server      = "localhost";
$password    = "";
$user        = "root";
$database    = "programming_assistant";

    $connection = mysqli_connect($server, $user, $password, $database); 
        if($connection){
            echo"connection successful";
        }
        $sql= "SELECT * FROM groupInfo WHERE memberHandle = '$userHandle'";
        $query = mysqli_query($connection, $sql);

        if($query){
            echo"query successful";
        }else{
            echo"query failed";
        }
        
        $num_rows= mysqli_num_rows($query);

        $arr=array();
        $i=0;
        while($row = mysqli_fetch_assoc($query)) 
        {
            $arr[$i] = $row["groupName"]; 
            $i++;
        }
        $i=0;

        if($num_rows==0)
        {           
            $msg= 'You are not member of any group <br><br>';
        }else{
            $msg= '';
        }

mysqli_close($connection);

?>




<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesGroups.css">
    <title>ProGaSS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src=""></script>
</head>

<body>
    



    <div class="center">
        List of Groups
        <button class="menu" style="float: right" onclick="openForm()">create</button>

        <div class="form-popup" id="createGroupForm">


            <form action="actionOnCreateGroup.php" class="groupForm" method="post">
                <h1>Create New Group</h1>
                <label for="groupName"><b>Group Name</b></label>
                <input type="text" placeholder="Enter Group Name (must be unique)" name="groupName" required>
                <button type="submit" class="btn">Create Group</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>



        </div>

        <script>
            function openForm() {
                document.getElementById("createGroupForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("createGroupForm").style.display = "none";
            }

        </script>


    </div>



    <div class="center">
        <center>
            <table class="userSub">
                <tr>
                    <th>Group Name</th>
                    <th>Members</th>
                </tr>
                <script>
                    
                    var msg = "<?php echo $msg ?>";
                    var N = "<?php echo $num_rows ?>";
                    var temp = ""
                    
                    console.log(msg);
                    console.log(N);
                    
                    var temp2 = <?php echo '["' . implode('", "', $arr) . '"]' ?>;
                    
                    for (var i = 0; i < N; i++) {
                        document.write("<tr>");
                        document.write("<td>" + "<a href='#group'>" + temp2[i] + "</a>" + "</td>");
                        document.write("<td>" + "#member count" + "</td>");
                        document.write("</tr>");
                    }

                </script>

            </table>

        </center>
    </div>






</body>

</html>
