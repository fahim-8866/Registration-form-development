<?php
include('connecton.php');

if(isset($_POST['submit'])){
    $Gender=$_POST['gen'];
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $ST_ID=$_POST['ID'];
    $Password=$_POST['password'];
    $Semester=$_POST['semester'];

    if(empty($Gender) || empty($Name) || empty($Email) || empty($ST_ID) || empty($Password) || empty($Semester)){
       header("Location:index.php?error=This field is required");
    }
    else{
        $sql="INSERT INTO reg_form (gender,name,email,st_id,password,semester)VALUES('$Gender','$Name','$Email','$ST_ID','$Password','$Semester')";
        $result= mysqli_query($conn,$sql);
        if(!$result){
            die("squl statement failed");
        }
        else{
            header("Location:index.php?success=Your Form has been submitted successfully");
        }
     }
}
?>