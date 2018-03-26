<html>
  
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">


            <form action="add_faculty.php" method="post" class="faculty_form">
                <div class="form-group">
                    <label for="name">Faculty Name:</label>
                    <input class="form-control" type="text" name="name" required>
                </div>
                <div class="form-grouu">
                    <label for="des">Designation:</label>
                    <input type="text" name="designation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Contact No:</label>
                    <input class="form-control" type="text" name="phone_no" value="+880">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Present Address:</label>
                    <input class="form-control" type="text" name="address">
                </div>
                <div class="form-group">
                    <label>Blood Group</label>
                   <select class="form-control" name="blood_group"><option>A(+ve)</option><option>A(-ve)</option><option>B(+ve)</option><option>B(-ve)</option><option>AB(+ve)</option><option>AB(-ve)</option><option>O(+ve)</option><option>O(-ve)</option></select>
                </div>

                <div class="form-group">
                    <label>Joining Date:</label>
                    <input class="form-control" type="date" name="joining_date" required>
                </div>
                

                <button  class="btn btn-default btn-primary btn-block" type="submit">Add to Database</button>

            </form>
        </div>

    </body>
</html>