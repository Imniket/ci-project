<div class="reg wthree-2">
    <div class="container">
        <h1>Login</h1>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="form-group-right-lg">
                     <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'] ; ?></div>
                      <?php }else if (isset ($_SESSION['error'])){ ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error'] ; ?></div>
                        <?php } ?>
                    <form class="form-horizontal formValidate form" name="form1" action="<?php echo base_url('/users/login'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="email"  type="email" name="email" placeholder="Enter Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Enter Correct Password" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-6">
                                <button type="submit" class="btn btn-lg btn-primary ld ld-ext-right running">
                                 <i class="ld ld-ring ld-spin">Login</i></button>
                                <a class="btn btn-info btn-lg" href="<?php echo base_url('users/reg'); ?>"><span data-hover="REGISTER">REGISTER</span></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
