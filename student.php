<html>

    <link href="myStyle.css" rel="stylesheet">
    <body>
          <?php include 'navbar.php'; ?>
            <?php
                include('db_connection.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM `students` where std_id = $id ";
                if($connection){
                    $result = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($result); ?>
                    
                    <table class="personalInfo">
                        <tr><th colspan="3"><?=$row['name'] ?></th></tr>
                        <tr><td>Roll No</td><td>:</td><td><?=$row['std_roll'] ?></td></tr>
                        <tr><td>Class</td><td>:</td><td><?=$row['class'] ?></td></tr>
                        <tr><td>Section</td><td>:</td><td><?=$row['section'] ?></td></tr>
                        <tr><td>Email</td><td>:</td><td><?=$row['email'] ?></td></tr>
                        <tr><td>Phone No</td><td>:</td><td><?=$row['phone_no'] ?></td></tr>
                        <tr><td>Parent's Phone</td><td>:</td><td><?=$row['parent_phone_no'] ?></td></tr>
                        <tr><td>Address</td><td>:</td><td><?=$row['address'] ?></td></tr>
                        <tr><td>Date of Birth</td><td>:</td><td><?=$row['date_of_birth'] ?></td></tr>
                        <tr><td>Blood Group</td><td>:</td><td><?=$row['blood_group'] ?></td></tr>
                        
                    </table>
            
                <?php }
                else{
                    echo "Connection Error";
                }
            ?>
    </body>
</html>