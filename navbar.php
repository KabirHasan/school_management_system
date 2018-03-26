<html>
    <head>
      <style>
      </style>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar" id="mno">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="faculties.php">Faculty List</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="classes.php?id=6">Class List
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="classes.php?id=6">Class 6</a></li>
                  <li><a href="classes.php?id=7">Class 7</a></li>
                  <li><a href="classes.php?id=8">Class 8</a></li>
                  <li><a href="classes.php?id=9">Class 9</a></li>
                  <li><a href="classes.php?id=10">Class 10</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="students.php?id=6">Student List
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="students.php?id=6">Class 6</a></li>
                  <li><a href="students.php?id=7">Class 7</a></li>
                  <li><a href="students.php?id=8">Class 8</a></li>
                  <li><a href="students.php?id=9">Class 9</a></li>
                  <li><a href="students.php?id=10">Class 10</a></li>
                </ul>
              </li>
              <li><a href="form(classes).php">Add Class</a></li>
             <li><a href="form(students).php">Add Student</a></li>
                <li><a href="form(faculties).php">Add Faculty</a></li>
            
            </ul>
            </div>
        </nav>

    </body>
</html>