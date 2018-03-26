<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php';
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    
    $birth_date = $_POST['date_of_birth'];
    ?>
        <div class="container">

            <form action="add_student.php" method="post" class="form-horizontal">
                <div class="form-group"> 
                    <label class="control-label" for="name">Student Name :</label>
                    <input class="form-control" type="text" value="<?=$name?>"  name="name" readonly="true" id="qq" >
                </div>
                <div class="form-group">
                    <label class="control-label" for="class">Class :</label>
                    <input class="form-control" type="text" value="<?=$class?>" readonly="true" name="class">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="class">Section :</label>
                    <select class="form-control" name="section" required>
                       
                        <?php
                            include('db_connection.php');
                            $query = "select * from classes where class = '$class'";
                            $result = mysqli_query($connection,$query);
                            while( $row = mysqli_fetch_assoc($result) ){ ?>
                                <option><?=$row['section']?></option>
                          <?php  }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Date of Birth : </label>
                    <input class="form-control" type="date" value="<?=$birth_date?>" readonly="true" name="date_of_birth">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary" name="save" onclick="myfunction()">Add to database</button>
                </div>
            </form>
            
        </div>
        
    
    
</body>
</html>