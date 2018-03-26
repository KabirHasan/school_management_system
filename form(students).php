<html>
    <?php include 'navbar.php'; ?>

    <body>

            
        
        <div class="container">

            <form action="form(students)2.php" method="post" class="form-horizontal">
                <div class="form-group"> 
                    <label class="control-label" for="name">Student Name :</label>
                    <input class="form-control" type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="class">Select class :</label>
                    <select class="form-control" name="class" required>
                        <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Date of Birth : </label>
                    <input class="form-control" type="date" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary" name="save">Assign a Section</button>
                </div>
            </form>
            
        </div>

    </body>
</html>