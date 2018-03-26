<?php
    include('db_connection.php');
    $cls_id = $_GET['id'];
    $sec = $_GET['sec'];
    $class = $_GET['class'];
    $sub = $_POST['sub'];
    $day = $_POST['day'];
    $begin_time = $_POST['beg_time'].' '.$_POST['beg_time_per'];
    $end_time = $_POST['end_time'].' '.$_POST['end_time_per'];
    //echo $cls_id, $sec , $class;
    
    $query = "INSERT INTO `routine`(`cls_id`, `day`, `start_time`, `end_time`, `subject`) VALUES ('$cls_id','$day','$begin_time','$end_time','$sub')";

    if($connection){
        if(mysqli_query($connection,$query)){
            echo "Schedule is added"; ?>
            <a href="class_schedule.php?id=<?=$cls_id?>&sec=<?=$sec?>&class=<?=$class?>">Check the Schedule</a>
        <?php }
    }
    else{
        echo "Connection Error";
    }

?>