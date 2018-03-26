<?php
    
    include('db_connection.php');
    $class = $_POST['class'];
    $sec = $_POST['section'];
    $cap = $_POST['cap'];
    $query = "INSERT INTO `classes`( `class`, `section`,`capacity`) VALUES ('$class','$sec','$cap')";
    
    if($connection){
        $checkQuery = "SELECT cls_id from classes WHERE class = '$class' AND section ='$sec' ";
        
        $result = mysqli_query($connection,$checkQuery);
        $row = mysqli_fetch_row($result);
        
        if($row == 0){
            if(mysqli_query($connection, $query)){
                    echo"<script>
                    alert('Successfully Class Added... !!!');
                    window.open('form(classes).php','_self');
                    </script>";
            }
            else{
                    echo"<script>
                    alert('Failed to add... !!!');
                    window.open('form(classes).php','_self');
                    </script>";
            }
        }
        else{
            
                    echo"<script>
                    alert('".$sec." is already exit... !!!');
                    window.open('form(classes).php','_self');
                    </script>";
        }
        
        
    }
    else{
        echo "Connection Failed !!!";
    }
?>