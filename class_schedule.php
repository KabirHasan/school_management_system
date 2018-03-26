<html>

   <body>
       <?php include 'navbar.php'; ?> 
       <div class="container">
           <table class="table table-striped table-bordered table-hover table-condensed">
               
               <tr><th colspan="1">Day</th><th colspan="6">Time and Subject</th></tr>

                   <?php include('db_connection.php');
                   $cls_id = $_GET['id'];
                    $section = $_GET['sec'];
                    $class= $_GET['class'];
                   for($i = 0; $i < 6 ; $i++){
                       if($i == 0) { $day = 'sat'; $d = "Saturday";}
                       elseif($i == 1){ $day = 'sun'; $d = "Sunday";}
                       elseif($i == 2){ $day = 'mon'; $d = "Monday";}
                       elseif($i == 3){ $day = 'tue'; $d = "Tuesday";}
                       elseif($i == 4) { $day = 'wed'; $d = "Wednesday";}
                       elseif($i == 5) { $day = 'thu'; $d = "Thursday";} ?>
                       <tr><td><?=$d?></td>  
                        <?php $query ="SELECT * FROM `routine` WHERE cls_id = '$cls_id' and day = '$day'";
                       if($connection){
                           $result = mysqli_query($connection,$query);
                           while($row = mysqli_fetch_assoc($result)){ ?>
                               <td><?=$row['subject']?>(<?=$row['start_time']?>-<?=$row['end_time']?>)</td>

                           <?php }
                       } ?>
               </tr>
                   <?php }

                   ?>
               <tr><td colspan="7"><a href="#myModal" data-toggle="modal" >Add new Schedule</a></td></tr>
               <caption>Class <?=$class?>, <?=$section?></caption>
           </table>
           
           
           
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add a new Schedule</h4>
                </div>
                <form  method="post">
                    <div class="modal-body">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <caption>Class <?=$class?>, <?=$section?> </caption>
                            <tr><td>Subject</td><td><select name="sub"><option>Bangla</option><option>English</option><option>Math</option></select></td></tr>

                            <tr><td>Day</td><td><select name="day"><option>Saturday</option><option>Sunday</option><option>Monday</option>
                                <option>Tuesday</option><option>Wednesday</option><option>Thursday</option></select></td></tr>
                            <tr><td>Begin Time</td><td><select name="beg_time"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select></td><td><select name="beg_time_per"><option>AM</option><option>PM</option></select></td></tr>

                            <tr><td>End Time</td><td><select name="end_time"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select></td><td><select name="end_time_per"><option>AM</option><option>PM</option></select></td></tr>

                        </table>
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                      <button type="submit" class="btn btn-default" name="save">Save</button>
                    </div>
                    
                </form>
              </div>

            </div>
          </div>
          
             
         <?php
            if (isset($_POST['save']) ){
                
                $sub = $_POST['sub'];
                $day = $_POST['day'];
                $begin_time = $_POST['beg_time'].' '.$_POST['beg_time_per'];
                $end_time = $_POST['end_time'].' '.$_POST['end_time_per'];
                //echo $cls_id, $sec , $class;

                $query = "INSERT INTO `routine`(`cls_id`, `day`, `start_time`, `end_time`, `subject`) VALUES ('$cls_id','$day','$begin_time','$end_time','$sub')";

                if($connection){
                    if(mysqli_query($connection,$query)){
                        echo"<script>
                        alert('Successfully schedule Added... !!!');
                        </script>";
                        $link="class_schedule.php?id=$cls_id"."&sec=$section"."&class=$class";
                        echo "<script> window.open('$link','_self'); </script>";
                    }
                    else{
                            echo"<script>
                            alert('Failed to load... !!!');
                            </script>";
                    }
                }

            }
         ?>           
           
       </div>
    </body> 
</html>