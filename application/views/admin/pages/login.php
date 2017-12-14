<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php } else if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
        <?php } ?>
        <form action="<?php echo base_url('/admin/admin/login') ?>" method="post">
            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required=""> 
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <span><input type="checkbox" name="remember_me" />Remember Me</span>
            <h6><a href="#">Forgot Password?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="<?php echo base_url('admin/admin/reg'); ?>">Create an account</a></p>
    </div>
</div>