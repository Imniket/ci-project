<?php $user_session = $this->session->userdata('frontend');

?>
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
                    <a class="navbar-brand wow fadeInLeft animated" data-wow-delay=".5s" href="<?php echo base_url(''); ?>">Arbitrary</a>
                </div>

                <div class="navbar-collapse collapse hover-effect wow fadeInRight animated" data-wow-delay=".5s" id="navbar navbarNavDropdown">
                    <ul>
                        <?php 
                          //echo $title;
                        if ($user_session['id']) { 
                          
                          ?>
                          <li><h1 class="navbar-brand">Hello, <?php echo $user_session['name']; ?></h1></li>
                          <li><a href="<?php echo base_url('blog/views'); ?>"><span data-hover="BLOG">BLOG</span></a></li>
                          <li><a href="<?php echo base_url('upload/view'); ?>"><span data-hover="GALLERY">GALLERY</span></a></li>
                          <li><a href="<?php echo base_url('product/viewid'); ?>"><span data-hover="ACCOUNT">ACCOUNT</span></a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="<?php echo base_url('product/'); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span data-hover="PRODUCTS">PRODUCTS</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                 <a class="dropdown-item" href="<?php echo base_url('product/'); ?>">MOBILE</a>
                                 <a class="dropdown-item" href="<?php echo base_url('product/') ;?>">LAPTOP</a>
                                 <a class="dropdown-item" href="<?php echo base_url('product/') ;?>">COMPUTER</a>
                              </div>
                          </li>
                          <li><a href="<?php echo base_url('users/logout'); ?>"><span data-hover="LOGOUT">LOGOUT</span></a></li>
                          <li><a href="<?php echo base_url('product/cart/'); ?>"><span data-hover="CART">CART</span></a></li>
                      </ul>

                    <?php } else { ?>
                      <ul>
                          <li><a href="<?php echo base_url(''); ?>">HOME</a></li>
                          <li><a href="<?php echo base_url('home/about'); ?>"><span data-hover="ABOUT" >ABOUT</span></a></li>
                          <li><a href="<?php echo base_url('home/services'); ?>"><span data-hover="SERVICES">SERVICES</span></a></li>
                          <li><a href="<?php echo base_url('home/gallery'); ?>"><span data-hover="GALLERY">GALLERY</span></a></li>
                          <li><a href="<?php echo base_url('home/contact'); ?>"><span data-hover="CONTACT">CONTACT</span></a></li>
                          <li><a href="<?php echo base_url('users/login'); ?>"><span data-hover="LOGIN">LOGIN</span></a></li>
                          <li><a href="<?php echo base_url('product/'); ?>"><span data-hover="PRODUCTS">PRODUCTS</span></a></li>                            
                          <li><a href="<?php echo base_url('blog/'); ?>"><span data-hover="BLOGS">BLOGS</span></a></li>
                          <li><a href="<?php echo base_url('product/cart/'); ?>"><span data-hover="CART">CART</span></a></li>
                        <?php } ?>
                    </ul>
                </div>


            </div>
        </nav>
        <!-- //Navbar -->

    </div>
</div>