<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
        <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'] ; ?></div>
                      <?php }else if (isset ($_SESSION['error'])){ ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error'] ; ?></div>
                        <?php } ?>
		<form action="<?php echo base_url('admin/admin/reg');?>" method="post">
			<input type="text" class="ggg" name="name" placeholder="NAME" required="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<!--<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>-->
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
        <p>Already Registered.<a href="<?php echo base_url('admin/admin/login');?>">Login</a></p>
</div>
</div>