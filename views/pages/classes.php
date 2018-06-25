
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
                <div class="banner"> <img src="assets/images/yogamat.jpg" height="300"></div>
                <h2>Yoga Classes</h2>

                <?php foreach ($classes as $class_item): ?>
                <div>
                    <strong><?php echo $class_item['classname']; ?></strong>
                    <p class="classpara">
                    <?php echo $class_item['description']; ?>
                    </p>
                </div>    
        <?php endforeach; ?>

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





