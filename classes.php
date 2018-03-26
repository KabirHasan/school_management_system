<!DOCTYPE html>
<html lang="en">
       <?php include 'navbar.php'; ?>
        <body>
        <div class="container">
        
            <table class="table table-striped table-bordered table-hover table-condensed">
              <caption>List of all sec and Classes</caption>
              <thead>
                  <tr>
                    <th>Class</th>
                    <th>Secton</th> 
                    <th>Capacity</th>
                    <th>Info</th>
                  </tr>
              </thead>
              <?php
                include('db_connection.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM `classes` where class = '$id'";
                $count = 0;
                if($connection){
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){ $count++; ?>
                        <tr>
                            <td><?=$row['class']?></td><td><?=$row['section']?></td><td><?=$row['capacity']?></td>
                            <td><a href="class_schedule.php?id=<?=$row['cls_id']?>&sec=<?=$row['section']?>&class=<?=$row['class']?>">Schedule</a></td>
                        </tr>
                    <?php }
                }
            ?>
                <tfoot>
                    <tr>
                        <td colspan="4">Total <?= $count ?></td>
                    </tr>
                </tfoot>  
            </table>
        </div>
    </body>
</html>