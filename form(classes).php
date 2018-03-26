<!DOCTYPE html>
<html lang="en">
    <?php include('head.php');?>
    <body>
        <?php include('nav.php');?>
            <div class="container">
            
            <form action="add_class.php" method="post" class="form">
                <div class="form-group">
                    <label>Select Class:</label>
                    <select class="form-control" name="class">
                        <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label>Section:</label>
                    <select class="form-control" name="section">
                        <option>Sec A</option><option>Sec B</option><option>Sec C</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Section Capacity:</label>
                    <input class="form-control" type="number" name="cap" required>
                </div>
               <div class="form-group">
                   <button class="btn btn-primary btn-block" type="submit">Add to Database</button>
                </div>
                

            </form>
           
        </div>

    </body>
</html>