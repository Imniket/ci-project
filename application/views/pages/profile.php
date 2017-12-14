<?php $user_session = $this->session->userdata('frontend') ;?>
<div class="contact wthree-2">
    <div class="container">
        <div class="col-md-3 form-group-left-lg"></div>
        <div class="col-md-6 form-group-left-lg  agileits-3">
            <h1>Profile</h1>

            <div class="form-group">
                <?php if ($user_session['id']) { ?>

                  <h2 class="text-capitalize">Hello, <?php echo $user_session['name'] ?></h2><br>
                  <h2 class="text-center">You login with <?php echo $user_session['email']; ?> Email </h2>
                <?php } else { ?>
                  <h1 class="text-center">Sorry, You Have to Login First...</h1>
                <?php } ?>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>