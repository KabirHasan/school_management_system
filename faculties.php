<!DOCTYPE html>
<html lang="en">

    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <caption>List of Faculties</caption>

                <tr><th>SL.</th><th>Name</th><th>Designation</th><th>Schedule</th><th>Info</th></tr>
                <?php
                    include('db_connection.php');
                    $query = "SELECT * FROM `faculties`";
                    if($connection){
                        $result = mysqli_query($connection,$query);
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr><td><?=$count ?></td><td><?=$row['name'] ?></td><td><?=$row['desig'] ?></td><td><a href="faculty_schedule.php?id=<?=$row['fac_id']?>">Schedule</a></td><td><a href="faculty.php?id=<?=$row['fac_id']?>">details</a></td></tr>
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