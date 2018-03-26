<html>
    <?php include 'navbar.php'; ?>
    <body>

        <div class="container">
            
            <?php
                include('db_connection.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM `faculties` where fac_id = $id ";
                if($connection){
                    $result = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($result); ?>
                    
                    <table class="personalInfo">
                        <tr><th colspan="3"><?=$row['name'] ?></th></tr>
                        <tr><td>Designation</td><td>:</td><td><?=$row['desig'] ?></td></tr>
                        <tr><td>Email</td><td>:</td><td><?=$row['email'] ?></td></tr>
                        <tr><td>Phone No</td><td>:</td><td><?=$row['phone_no'] ?></td></tr>
                        <tr><td>Address</td><td>:</td><td><?=$row['address'] ?></td></tr>
                        <tr><td>Blood Group</td><td>:</td><td><?=$row['blood_group'] ?></td></tr>
                        <tr><td>No of Leaves</td><td>:</td><td><?=$row['no_of_leaves'] ?></td></tr>
                        <tr><td>Joining Date</td><td>:</td><td><?=$row['joining_date'] ?></td></tr>
                    </table>
            
                <?php }
                else{
                    echo "Connection Error";
                }
            ?>
        </div>
    </body>
</html>