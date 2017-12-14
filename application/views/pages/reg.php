<div class="reg wthree-2">
    <div class="container">
        <h1>Registration</h1>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="form-group-right-lg">
                    <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'] ; ?></div>
                      <?php }else if (isset ($_SESSION['error'])){ ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error'] ; ?></div>
                        <?php } ?>
                    <form class="form-horizontal form" name="form1" action="<?php echo base_url('users/reg'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" minlength="3" id="name" name="name" placeholder="Enter Name" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Enter Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Enter Correct Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Pick A Picture</label>
                            <div class="col-lg-6">
                                <input type="file" name="photo" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-6">
                                <button type="submit" class="btn btn-lg btn-success ">Register</button>
                                <a class="btn btn-lg btn-primary" href="<?php echo base_url('users/login'); ?>" >Login</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

 

