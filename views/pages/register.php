<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/yoga.css'); ?>">


<body>
	<div id="wrapper">
		<div class="title">
			<h1>Path of Light Yoga Studio</h1>
		</div>
		<div class="content">
			<nav class="navstyle">
				<ul>
					<a href="<?php echo base_url(); ?>">
						<li>Home</li>
					</a>
					<a href="<?php echo base_url(); ?>classes">
						<li>Classes</li>
					</a>
					<a href="<?php echo base_url(); ?>schedule">
						<li>Schedule</li>
					</a>
					<a href="<?php echo base_url(); ?>register">
						<li>Register</li>
					</a>
					<a href="<?php echo base_url(); ?>contact">
						<li>Contact</li>
					</a>
				</ul>
			</nav>
			<section>
				<h2>Register Path of Light Yoga Studio</h2>
				<p>Required information is marked with an asterisk (*).</p>

				<form class="forms" method="post" action="<?php echo base_url()?>posts/form_validation">
					<label>*Name:</label>
					<?php $data = array(
                      'name'  => 'Name',
                     'id' => 'NameId',
                    );

         echo form_input($data);
         echo form_error("Name",'<span class="error">','</span>');?>

					<br />
					<label>*Password:</label>
					<!-- <input type="password" name="Password" id="PasswordId"> -->
					<?php $data = array(
                      'name'  => 'Password',
                     'id' => 'PasswordId',
                    );

         echo form_password($data);
         echo form_error("Password",'<span class="error">','</span>');?>


					<br />
					<label>*E-mail:</label>
					<?php $data = array(
                      'name'  => 'Email',
                     'id' => 'EmailId',
                    );

         echo form_input($data);
         echo form_error("Email",'<span class="error">','</span>');?>
					<br />
					<label>*Phone:</label>
					<!-- <input type="text" name="Phone" id="PhoneId"> -->
					<?php $data = array(
                      'name'  => 'Phone',
                     'id' => 'PhoneId',
                    );

         echo form_input($data);
         echo form_error("Phone",'<span class="error">','</span>');?>

					<br />
					<label>*Address:</label>
					<!-- <textarea name="Address" id="AddressId" rows="2" cols="20"></textarea> -->
					<?php $data = array(
                      'name'  => 'Address',
                     'id' => 'AddressId',
                     'rows'=>'2',
                     'cols'=>'20'
                    );

         echo form_textarea($data);
         echo form_error("Address",'<span class="error">','</span>');?>

					<br />
					<label>*Type of Class:</label>
					<!-- <select name="classes" class="dropalign">
            <option value="1">Gentle Hatha Yoga</option>
            <option value="2">Vinyasa Yoga</option>
            <option value="3">Restorative Yoga</option>
          </select> -->

					<?php      $options = array(
        '1'         => 'Gentle Hatha Yoga',
        '2'           => 'Vinyasa Yoga',
        '3'           => 'Restorative Yoga'
          );
        

          echo form_dropdown('classes', $options, '','class="dropalign"');
      ?>

					<br />
					<label>*Schedule:</label>

					<?php      $options = array(
        '1'         => 'Monday - Friday',
        '2'           => 'Saturday - Sunday'
          );
        

          echo form_dropdown('schedule', $options, '','class="dropalign"');
      ?>


					<br />

					<label>*Time:</label>
				
          
					<?php      $options = array(
        '1'         => '9:00am',
        '2'           => '10:30am',
        '5'           => 'Noon',
        '6'           => '1:30pm',
        '7'           => '3:30pm',
        '3'           => '5:30pm',
        '4'           => '7:00pm'
          );
        

          echo form_dropdown('times', $options, '','class="dropalign"');
      ?>
					<br />

          <!-- <input id="SubmitId" type="submit" value="Send Now"> -->
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
