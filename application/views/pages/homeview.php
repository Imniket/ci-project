<!-- agile -->
<div class="agile">
    <div class="container">
        <h3>About Us</h3>
        <div class="about-top">
            <div class="col-md-5 ab-text wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="<?php echo base_url('asset/images/10.jpg'); ?>" alt="Corporate image" class="img-responsive">
            </div>
            <div class="col-md-7 info wow fadeInRight animated" data-wow-delay=".5s">
                <div class="accordion">
                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-1">
                                vision Lorem Ipsum
                                <i class="glyphicon glyphicon-chevron-down"></i>
                            </a></h5>
                        <div id="accordion-1" class="accordion-section-content" style="display: none;">								
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-2">
                                Consectetur adipiscing
                                <i class="glyphicon glyphicon-chevron-down"></i>
                            </a></h5>
                        <div id="accordion-2" class="accordion-section-content" style="display: none;">							
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-3">
                                Dolor sit amet
                                <i class="glyphicon glyphicon-chevron-down"> </i> 
                            </a></h5>
                        <div id="accordion-3" class="accordion-section-content" style="display: none;">								
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>	
                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-4">
                                Sed do eiusmod
                                <i class="glyphicon glyphicon-chevron-down"> </i> 
                            </a></h5>
                        <div id="accordion-4" class="accordion-section-content" style="display: none;">								
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>	
                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-5">
                                Incididunt ut labore
                                <i class="glyphicon glyphicon-chevron-down"> </i> 
                            </a></h5>
                        <div id="accordion-5" class="accordion-section-content" style="display: none;">								
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="accordion-section">
                        <h5><a class="accordion-section-title" href="#accordion-6">
                                Adipiscing elit
                                <i class="glyphicon glyphicon-chevron-down"> </i> 
                            </a></h5>
                        <div id="accordion-6" class="accordion-section-content" style="display: none;">								
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>							
                </div>	 
                <script>
                  jQuery(document).ready(function () {
                      function close_accordion_section() {
                          jQuery('.accordion .accordion-section-title').removeClass('active');
                          jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
                      }

                      jQuery('.accordion-section-title').click(function (e) {
                          // Grab current anchor value
                          var currentAttrValue = jQuery(this).attr('href');

                          if (jQuery(e.target).is('.active')) {
                              close_accordion_section();
                          } else {
                              close_accordion_section();

                              // Add active class to section title
                              jQuery(this).addClass('active');
                              // Open up the hidden content panel
                              jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                          }

                          e.preventDefault();
                      });
                  });
                </script>

            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!-- //agile -->
<!-- w3l -->
<div class="w3l">
    <div class="container">		
        <div class="row">
            <div class="col-sm-12 text-center w3ls">
                <h3>Curabitur pretium </h3>
                <p class="p1 animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Simply dummy text of the printing and the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>	
</div>
<!-- //w3l -->
<!-- agileits -->
<div class="agileits">
    <div class="container">
        <h3>Projects</h3>
        <?php foreach ($project as $pro ){ ?>
        <div class="col-md-4 agileits-left wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="history-grid-image">
                <img src="<?php echo base_url('uploads/images/projects/') . $pro['project_pic']; ?>" class="img-responsive zoom-img" style="height: 306px;width: 350px;" alt="">
            </div>
            <a href="<?php echo base_url().'home/projects/'.$pro['project_id']; ?> "><h4><?php echo $pro['project_name']; ?></h4></a>
            <p><?php echo $pro['sort_detail'] ; ?></p>
        </div>
        <?php } ?>
        <div class="col-md-4 agileits-left animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
            <div class="history-grid-image">
                <img src="<?php echo base_url('asset/images/7.jpg'); ?>" class="img-responsive zoom-img" alt="">
            </div>
            <a href="#"><h4>Adipiscing elit</h4></a>
            <p>Perspiciatis unde omnis iste natus error sit voluptatem consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
        <div class="col-md-4 agileits-left wow fadeInRight animated" data-wow-delay=".5s">
            <div class="history-grid-image">
                <img src="<?php echo base_url('asset/images/2.jpg'); ?>" class="img-responsive zoom-img" alt="">
            </div>
            <a href="#"><h4>Eiusmod tempor</h4></a>
            <p>Perspiciatis unde omnis iste natus error sit voluptatem consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- /agileits -->
<!-- wthree -->
<div class="wthree">
    <div class="container">
        <h3>Our Services</h3>
        <div class="services-grids">
            <div class="col-md-6 services-grid-left wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="col-xs-4 services-grid-left1">
                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></i>
                </div>
                <div class="col-xs-8 services-grid-left2">
                    <h4>Responsive</h4>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil 
                        molestiae consequatur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 services-grid-right wow fadeInRight animated" data-wow-delay=".5s">
                <div class="col-xs-4 services-grid-left1">
                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-cog pp" aria-hidden="true"></span></i>
                </div>
                <div class="col-xs-8 services-grid-left2">
                    <h4>Web Development</h4>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil 
                        molestiae consequatur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="services-grids">
            <div class="col-md-6 services-grid-left wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="col-xs-4 services-grid-left1">
                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></i>
                </div>
                <div class="col-xs-8 services-grid-left2">
                    <h4>Web Marketing</h4>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil 
                        molestiae consequatur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 services-grid-right wow fadeInRight animated" data-wow-delay=".5s">
                <div class="col-xs-4 services-grid-left1">
                    <i class="hovicon effect-2 sub-a"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></i>
                </div>
                <div class="col-xs-8 services-grid-left2">
                    <h4>Web Security </h4>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil 
                        molestiae consequatur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //wthree -->