<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include 'navbar.php';
        include('db_connection.php');
        $id = $_GET['id'];
        $rou = 0;
    ?>
    <div class="container">
 

            <?php
                $count = 0;
                $query = "select * from fac_rou where fac_id = '$id'";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    $rou_id = $row['rou_id'];

                    $query2 = "select * from routine where rou_id = '$rou_id'";
                    $result2 = mysqli_query($connection,$query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $day = $row2['day'];
                    $cls_id = $row2['cls_id'];

                    $query3 = "select * from classes where cls_id = '$cls_id'";
                    $result3 = mysqli_query($connection,$query3);
                    $row3 = mysqli_fetch_assoc($result3);
                    $class = $row3['class'];
                    $section = $row3['section']; ?>





                    <div class="col-md-4"><?=$class?><?=$section?><?=$row2['subject']?>(<?=$row2['start_time']?>-<?=$row2['end_time']?>) <?=$row2['day']?></div>
                
                
           <?php }
        ?>   
       

         
         
         
         
         
         
         
         
         
         
         
         
          <a href="#myModal" data-toggle="modal" >Add new Schedule</a>
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add a Faculty Schedule</h4>
                </div>
                <form  method="post">
                    <div class="modal-body">
                        <?php
                            $query = "select * from faculties where fac_id = '$id' ";
                            $res = mysqli_query($connection,$query);
                            $row = mysqli_fetch_assoc($res);
                        ?>
                        <div class="form-group">
                            <label>Faculty</label>
                            <input type="text" value="<?=$row['name']?>" class="form-control" readonly="true">
                        </div>
                        <div class="form-group">
                            <label>Select Class</label>
                            <select onchange="myAjaxFunction(this.value)" class="form-control">
                                <option>Select Class</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>schedule</label>
                            <select id="livesearch" class="form-control" name="rou">
                                <?php
                                    session_start();
                                    $query = "select * from routine";
                                    $result = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $_SESSION['routine_id'] = $row['rou_id'];
                                        $cls_id = $row['cls_id'];
                                        $query2 = "select * from classes where cls_id = '$cls_id'";
                                        $result2 = mysqli_query($connection,$query2);
                                        $row2 = mysqli_fetch_assoc($result2); ?>
                                        <option><?=$row['rou_id']?>Class <?=$row2['class']?> <?=$row2['section']?> <?=$row['subject']?> <?=$row['day']?> (<?=$row['start_time']?>-<?=$row['end_time']?>) </option>

                                   <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                      <button type="submit" class="btn btn-default" name="save">Save</button>
                    </div>
                    
                </form>
              </div>

            </div>
          </div>
       
    </div>
    
    <?php
        if( isset($_POST['save']) && isset($_POST['rou']) ){
            
            $temp = $_POST['rou'];
            $rou ='';
            for($i = 0; ;$i++){
                if($temp[$i] == 'C') break;
                $rou = $rou.$temp[$i];
            }
            //echo "<script>alert('$rou')</script>";
            session_destroy();
            $query = "INSERT INTO `fac_rou`( `fac_id`, `rou_id`) VALUES ('$id','$rou')";
            $res = mysqli_query($connection,$query);
            if($res == 1){
                    $link = "faculty_schedule.php?id=".$id;
                    echo"<script>
                    alert('Successfully Schedule Added... !!!');
                    window.open('$link','_self');
                    </script>";
            }
        }
    ?>
    
    
    <script>
        function myAjaxFunction(str) {
            if (str == "") {
                document.getElementById("livesearch").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("livesearch").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","getroutine.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
</body>
</html>