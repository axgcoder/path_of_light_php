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
                <h2>Register Path of Light Yoga Studio</h2>
                <p>Required information is marked with an asterisk (*).</p>
                <form class="forms" method="post" action="<?php echo base_url()?>posts/contact_validation">
                    <label>*Name:</label>
                    <!-- <input type="text" name="Name" id="NameId"> -->
                    <?php $data = array(
                      'name'          => 'Name',
                     'id'            => 'NameId',
                    );

                    echo form_input($data);
                     echo form_error("Name",'<span class="error">','</span>');?>
                    <br />
                    <label>*E-mail:</label>
                    <?php $data = array(
                      'name'          => 'Email',
                     'id'            => 'EmailId',
                    );

                    echo form_input($data);
                     echo form_error("Email",'<span class="error">','</span>');?>
                    <br />
                    <label>*Comments:</label>
                    <?php $data = array(
                      'name'  => 'Comments',
                     'id' => 'CommentsId',
                     'rows'=>'2',
                     'cols'=>'20'
                    );

         echo form_textarea($data);
         echo form_error("Comments",'<span class="error">','</span>');?>
                    <br />
                <?php   echo form_submit('', 'Send Now','id="SubmitId"');?>
                </form>
            </section>
        </div>
        <footer class="footerstyle">
            <div>
                <i>Copyright &copy; 2016 Path of Light Yoga Studio</i>
            </div>
            <div>
                <i>
                    <a href="mailto:akhil@ghosh.com" target="_top">akhil@ghosh.com</a>
                </i>
            </div>
        </footer>
    </div>

</body>

</html>