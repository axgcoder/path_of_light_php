
<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8" />
    <title>wdm </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/yoga.css'); ?>">
</head>

<body>
    <div id="wrapper">
        <div class="title">
            <h1>Path of Light Yoga Studio</h1>
        </div>
        <div class="content">
                <nav class="navstyle">
                <ul>
                <a href="<?php echo base_url(); ?>"><li>Home</li></a>
                <a href="<?php echo base_url(); ?>classes"><li>Classes</li></a>
                <a href="<?php echo base_url(); ?>schedule"> <li>Schedule</li> </a>
                <a href="<?php echo base_url(); ?>register"><li>Register</li></a>
                <a href="<?php echo base_url(); ?>contact"><li>Contact</li></a>
              </ul>
                    </nav>
            <section>
                <div class="banner"> <img src="assets/images/yogalounge.jpg" height="300" ></div>
                <h2>Yoga Schedule</h2>
                <div>
            Mats, blocks, and blankets provide.Please arrive 10 minutes before your class begins. Relax in our Serenity Lounge before or after your class.
        <br>

            <?php

//$stmt = $pdo-> query("SELECT * FROM `myTable` ORDER BY categoryID");

$current_day = null;
 $row =null;
foreach( $schedule as $row ){

  if ($row["daysname"] != $current_day && count($row)>1){
    echo "</ul>";
  }
  
  if ($row["daysname"] != $current_day) {
    
    $current_day = $row["daysname"];
    echo "<p><strong>". $current_day."</strong></p><ul>";
  }

  echo "<li>".$row["time"]." ".$row["classname"]."</li>";
  
}

?>
                 </div>         
                <br/>
            </section>
        </div>
        <footer class="footerstyle">
            <div><i>Copyright &copy; 2016 Path of Light Yoga Studio</i>
            </div>
            <div><i><a href="mailto:akhil@ghosh.com" target="_top">akhil@ghosh.com</a></i>
            </div>
        </footer>
    </div>
</body>

</html>