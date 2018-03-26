<html>
   
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
        
            <table class="table table-striped table-bordered table-hover table-condensed">
                <caption>List of Students</caption>
                <!-- <tr><td></td><td></td><td></td><td></td><td></td><th><a target="_blank" href="form(students).php ">Add a new Student</a></th></tr> -->
                <tr><th>SL.</th><th>Roll No.</th><th>Name</th><th>Class</th><th>Section</th><th>Info</th></tr>
                <?php
                
                    include('db_connection.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM `students` WHERE class = '$id' ORDER BY std_roll";
                    if($connection){
                        $result = mysqli_query($connection,$query);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr><td><?=$count ?></td><td><?=$row['std_roll'] ?></td><td><?=$row['name'] ?></td><td><?=$row['class'] ?></td><td><?=$row['section'] ?></td><td><a target="_blank" href="student.php?id=<?=$row['std_id']?>">details</a></td></tr>
                        <?php $count++;}
                    }
                    else{
                        echo "Connection Error";
                    }
                ?>
            </table>
        </div>
    </body>
</html>