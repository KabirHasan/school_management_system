<?php
    include('db_connection.php');
    $class = $_GET['q'];
    $rou = 0;
?>

            <select>
                <?php
                    session_start();
                    $query = "select * from routine";
                    
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $_SESSION['routine_id'] = $row['rou_id'];
                        $cls_id = $row['cls_id'];
                        $query2 = "select * from classes where cls_id = '$cls_id'";
                        $result2 = mysqli_query($connection,$query2);
                        $row2 = mysqli_fetch_assoc($result2);
                        if($row2['class'] == $class ){
                        ?>
                        <option><?=$row['rou_id']?>Class <?=$row2['class']?> <?=$row2['section']?> <?=$row['subject']?> <?=$row['day']?> (<?=$row['start_time']?>-<?=$row['end_time']?>) </option>
                        
                   <?php }
                    }
                ?>
            </select>
?>