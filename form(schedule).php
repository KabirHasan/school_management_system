<html>

    <?php
        include('db_connection.php');
        $cls_id = $_GET['id'];
        $section = $_GET['sec'];
        $class= $_GET['class'];
        
    ?>
    <link rel="stylesheet" href="myStyle.css">
    <body>
        <?php include 'navbar.php'; ?>
        <form action="add_schedule.php?id=<?=$cls_id?>&sec=<?=$section?>&class=<?=$class?>" method="post">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <caption>Class <?=$class?>, <?=$section?> </caption>
                <tr><td>Subject</td><td><select name="sub"><option>Bangla</option><option>English</option><option>Math</option></select></td></tr>
                
                <tr><td>Day</td><td><select name="day"><option>Saturday</option><option>Sunday</option><option>Monday</option>
                    <option>Tuesday</option><option>Wednesday</option><option>Thursday</option></select></td></tr>
                <tr><td>Begin Time</td><td><select name="beg_time"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select></td><td><select name="beg_time_per"><option>AM</option><option>PM</option></select></td></tr>
                
                <tr><td>End Time</td><td><select name="end_time"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option></select></td><td><select name="end_time_per"><option>AM</option><option>PM</option></select></td></tr>
                
                <tr><td><button type="submit">ADD</button></td></tr>
                
            </table>
        </form>
    </body>
</html>