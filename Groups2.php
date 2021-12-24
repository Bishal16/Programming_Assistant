<?php

$groupName = $_GET['key'];
$userHandle = "ashik";




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
    <ul class="navBarUl">
        <li class="navBarList" ><a href="Home.html">Home</a></li>
        <li class="navBarList" style="font-weight:bold"><a href="Groups.php">Groups</a></li>
        <li class="navBarList"><a href="Leaderboard.html">Leaderboard</a></li>
        <li class="navBarList"><a href="About.html">About</a></li>
        <li class="navBarList" style="float:right"> <a href="Profile.html">Profile</a></li>
    </ul>





    <div class="center">
      <!--      <------------------------------required------------------------------re>                                                    -->
      
       
        <?php echo $groupName ?> Dashboard
        
        <!--            --------------------------------------Add member form------------------------- --> 
        <button class="menu" style="float: right" onclick="openForm()">Add Member</button>
        <div class="form-popup" id="addMemberForm">
            <form action="actionOnAddMember.php" class="groupForm" method="post">
                <h1>Add member</h1>
                <label for="userName"><b>User Name</b></label>
                <input type="hidden" value="<?php echo $groupName?>" name="groupName">
                <input type="hidden" value="<?php echo $userHandle?>" name="sessionUser">
                <input type="hidden" value="addMember" name="task">
                <input type="text" placeholder="Enter User Name (to be added)" name="userName" required>
                <button type="submit" class="btn">Add to the group</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>

        </div>
        
        
        <!----------------------------------------Remove member form------------------------- --> 
        <button class="menu" style="float: right" onclick="openForm2()">Remove Member</button>
        <div class="form-popup" id="removeMemberForm">
            <form action="actionOnAddMember.php" class="groupForm" method="post">
                <h1>Remove member</h1>
                <label for="userName"><b>User Name</b></label>
                <input type="hidden" value="<?php echo $groupName?>" name="groupName">
                <input type="hidden" value="<?php echo $userHandle?>" name="sessionUser">
                <input type="hidden" value="removeMember" name="task">
                <input type="text" placeholder="Enter User Name (to be removed)" name="userName" required>
                <button type="submit" class="btn">Remove from the group</button>
                <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
            </form>

        </div>
        
        
        
        <script>
            //<!----------------------------------------add member form------------------------- --> 
            function openForm() {
                document.getElementById("addMemberForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("addMemberForm").style.display = "none";
            }
            
            //----------------------------------------Remove member form------------------------- --> 
            function openForm2() {
                document.getElementById("removeMemberForm").style.display = "block";
            }
            function closeForm2() {
                document.getElementById("removeMemberForm").style.display = "none";
            }

        </script>
        
        
        <table class="userSub">
            <tr>
                <th>User Name</th>
                <th>Submission Time</th>
                <th>Problem</th>
                <th>Online Judge</th>
                <th>Used Language</th>
                <th>Verdict</th>
                <th>Time Taken</th>
            </tr>
            <script>
                for(var i= 0;i<10;i++){
                    document.write("<tr>");
                    
                        document.write("<td>" +"#user"+"</td>");
                        document.write("<td>" +"#st"+"</td>");
                        document.write("<td>" +"#prob"+"</td>");
                        document.write("<td>" +"#Oj"+"</td>");
                        document.write("<td>" +"#lan"+"</td>");
                        document.write("<td>" +"#ver"+"</td>");
                        document.write("<td>" +"#time"+"</td>");
                    document.write("</tr>");
                }
                
            
            
            </script>
            
        </table>

    </div>

</body>

</html>
