<?php
    
    include('db_connection.php');


    $name = $_POST['name'];
    $class = $_POST['class'];
    $sec = $_POST['section'];
    $date_of_birth = $_POST['date_of_birth'];
    
    
    //counting current student of that class
    $query = "SELECT current_std from roll_track WHERE class = '$class' ";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $current_std =  $row['current_std'];
    //counting current student of that class
    
    //auto roll generation
    $current_std++;
    if($current_std < 10) $roll =  "000"."$current_std";
    elseif($current_std < 100) $roll =  "00"."$current_std";
    elseif($current_std < 1000) $roll =  "0"."$current_std";


    
    if($class == 6) $roll = "06".$roll;
    elseif($class == 7) $roll = "07".$roll;
    elseif($class == 8) $roll = "08".$roll;
    elseif($class == 9) $roll = "09".$roll;
    elseif($class == 10) $roll = "10".$roll;
    
    
    //auto roll generation

    //Adding students in database
    $query = "INSERT INTO `students`(`std_roll`, `name`, `class`,`section`, `date_of_birth`) VALUES ('$roll','$name','$class','$sec','$date_of_birth')";

    $res = mysqli_query($connection,$query);
    if($res == 1){
        $query = "UPDATE `roll_track` SET `current_std`= '$current_std' WHERE class = '$class'";
        mysqli_query($connection,$query);
        echo"<script>
            alert('Successfully Added Student... !!!');
            window.open('form(students).php','_self');
        </script>";
    }


    

    
?>