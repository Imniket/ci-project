<?php $user_session = $this->session->userdata('frontend') ;?>
<!-- Banner -->
<div class="banner">
    <!-- Header -->
    <div class="header">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand wow fadeInLeft animated" data-wow-delay=".5s" href="index.html">Arbitrary</a>
                    </div>

                    <div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar">
                        <ul>
                            <?php if ($user_session['id']) { ?>
                              <li><h2 class="navbar-text">Hello, <?php echo $user_session['name'] ; ?></h2></li>
                              <li><a href="<?php echo base_url('blog/views'); ?>"><span data-hover="BLOG">BLOG</span></a></li>

                              <li><a href="<?php echo base_url('users/logout'); ?>"><span data-hover="LOGOUT">LOGOUT</span></a></li>
                            <?php } else { ?>
                              <li><a href="<?php echo base_url(''); ?>">HOME</a></li>
                              <li><a href="<?php echo base_url('home/about'); ?>"><span data-hover="ABOUT" >ABOUT</span></a></li>
                              <li><a href="<?php echo base_url('home/services'); ?>"><span data-hover="SERVICES">SERVICES</span></a></li>

                              <li><a href="<?php echo base_url('home/gallery'); ?>"><span data-hover="GALLERY">GALLERY</span></a></li>
                              <li><a href="<?php echo base_url('home/contact'); ?>"><span data-hover="CONTACT">CONTACT</span></a></li>
                              <li><a href="<?php echo base_url('users/login'); ?>"><span data-hover="LOGIN">LOGIN</span></a></li>
                              <li><a href="<?php echo base_url('product/'); ?>"><span data-hover="PRODUCTS">PRODUCTS</span></a></li>
                              <li><a href="<?php echo base_url('blog/'); ?>"><span data-hover="BLOGS">BLOGS</span></a></li>

                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- //Navbar -->

        </div>
    </div>
    <!--navbar -->
    <div class="container">
        <div class="banner-info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-info1">
                                <h1>Many desktop publishing packages and Web page</h1>
                                <p>Publishing packages and Web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>

                            </div>
                        <li>
                            <div class="banner-info1">
                                <h1>Many desktop publishing packages and Web page</h1>
                                <p>Publishing packages and Web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>

                            </div>
                        </li>
                        <li>
                            <div class="banner-info1">
                                <h1>Many desktop publishing packages and Web page</h1>
                                <p>Publishing packages and Web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- FlexSlider -->
            <script defer="" src="<?php echo base_url('asset/js/jquery.flexslider.js'); ?>"></script>
            <script type="text/javascript">
              $(function () {

              });
              $(window).load(function () {
                  $('.flexslider').flexslider({
                      animation: "slide",
                      start: function (slider) {
                          $('body').removeClass('loading');
                      }
                  });
              });
            </script>
            <!-- FlexSlider -->
        </div>

    </div>
</div>
<!-- //Header -->
<!-- //Banner -->