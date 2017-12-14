
<div class="gallery wthree-3">
    <div class="container">
        <a class="btn btn-primary" href="<?php echo base_url('upload/doupload'); ?>">Add New</a><h1>Gallery</h1> 

        <script src="<?php echo base_url('asset/js/jquery.swipebox.min.js'); ?>"></script> 
        <script type="text/javascript">
          jQuery(function ($) {
              $(".swipebox").swipebox();
          });
        </script>
        <?php foreach ($gallery as $g) { ?>
          <div class="view view-seventh">            
              <a href="<?php echo base_url('uploads/images/original/') . $g['photo']; ?>"><img src="<?php echo base_url('uploads/images/original/') . $g['photo']; ?>"style="height: 280px;" alt="" class="img-responsive">
                  <div class="mask">
                      <h2><?php echo $g['title']; ?></h2>
                      <p><?php echo $g['discription']; ?></p>

                  </div></a>
          </div>
        <?php } ?>

        <div class="clearfix"></div>
    </div>
</div>
