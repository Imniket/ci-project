<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url('asset/images/'); ?>double-tail-spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
    <?php foreach($sliders as $slides){ ?>
        <div>
            <img data-u="image" src="<?php echo base_url('uploads/images/sliders/') . $slides['image']; ?>" />
        </div>
        <?php } ?>
        
        <!--<a data-u="any" href="https://www.jssor.com" style="display:none">html carousel</a>-->
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<div class="container" style="margin-top:50px; margin-bottom: 50px;">
    <div class="row">
        <?php foreach($products as $p ){?>
        <div class="col-xs-12 col-sm-6 col-md-3" style="margin-bottom: 25px">
            <div class="col-item">
                <div class="post-img-content">
                    <img src="<?php echo base_url('uploads/images/products/') . $p['image1']; ?>" class="img-responsive" style="width: 260px; height: 160px;" />
                    <span class="post-title">
                        <b>Perfumes</b><br>
                        <b>Clássico</b>
                    </span>
                    <span class="round-tag">-15%</span>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5> <?php  echo $p['name'];?></h5>
                            <h5 class="price-text-color fa">&#8377; <?php echo $p['price'] ;?>/-</h5>
                            <!--<h5><?php // echo $p['detail'] ;?></h5>-->
                        </div>
                        <div class="rating hidden-sm col-md-6">
                            <h5 class="price-text-color"><!--14.99€--></h5>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add">
                            <i class="fa fa-shopping-cart"></i><a href="<?php echo base_url('product/add_cart/') . $p['id'];?>" class="hidden-sm">Add to cart</a></p>
                        <p class="btn-details">
                            <i class="fa fa-list"></i><a type="button" href="#" class="hidden-sm">More details</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
       
    </div>

</div>
