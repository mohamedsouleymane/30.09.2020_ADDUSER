<?php
    include 'db.php';
    $dt = date("Y.m.d");

    $sql1 = "INSERT INTO customuser (User_Name, User_role, Email, Mobile_No, Password, Created_On, Updated_On) VALUES ('".$_POST["username"]."', '".$_POST["userrole"]."', '".$_POST["email"]."', '".$_POST["contactno"]."', '".$_POST["password"]."', '$dt', 'NULL')";


    $sql = "INSERT INTO team_member (Employee_ID, Team_Member_Username, Full_Name, Email_ID, contact_no) VALUES ('".$_POST["empid"]."', '".$_POST["username"]."', '".$_POST["empName"]."', '".$_POST["email"]."', '".$_POST["contactno"]."')";


                if(mysqli_query($con, $sql)) {
                    if (mysqli_query($con, $sql1)){
                    echo "Record added successfully.";
                    }
                 else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                }
                }
                else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                }
                   
    $con->close();
?>
