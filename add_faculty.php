<?php
    
    include('db_connection.php');
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];
    $joining_date = $_POST['joining_date'];
    
    

    //Adding faculty in database
    $query = "INSERT INTO `faculties`(`name`, `desig`, `phone_no`, `email`, `address`, `blood_group`, `joining_date`) VALUES ('$name','$designation','$phone_no','$email','$address','$blood_group','$joining_date')";
    if($connection){
        if(mysqli_query($connection,$query)){
                    echo"<script>
                    alert('Successfully Faculty Added... !!!');
                    window.open('form(faculties).php','_self');
                    </script>";
        }
        else{
                    echo"<script>
                    alert('Failed to added... !!!');
                    window.open('form(faculties).php','_self');
                    </script>";
        }
    }
    

    
?>