<!-- Project -->
<div class="gallery wthree-3">
    <div class="container">
        <h1>Project Detail</h1> 

        <script src="<?php echo base_url('asset/js/jquery.swipebox.min.js'); ?>"></script> 
        <script type="text/javascript">
          jQuery(function ($) {
              $(".swipebox").swipebox();
          });
        </script>

        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo base_url('uploads/images/projects/') . $data['project_pic']; ?>" class="img-rounded" alt="Cinque Terre" style="width:250px;height:250px;">  

            </div>
            <div class="col-lg-8">
                <div><h2><?php echo $data['project_name']; ?></h2></div><br><br>
                <div class="col-lg-5"><h3><p> <?php echo $data['project_detail']; ?></p></h3></div>
            </div>
        </div>


        <div class="clearfix"></div>
    </div>
</div>
<!-- //Project -->