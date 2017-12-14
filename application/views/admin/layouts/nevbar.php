<?php $admin_session = $this->session->userdata('backend'); ?>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="#" class="logo">
                ARBITARY
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="<?php echo base_url('asset/admin/'); ?>images/2.png">
                        <span class="username"><?php echo $admin_session['name']; ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                       <!-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li> -->
                       
                        <li><a href="<?php echo base_url('admin/admin/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a  href="<?php echo base_url('admin/admin/home'); ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a  href="javascript:;">
                            <i class="fa fa-folder-o "></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="<?php echo base_url('admin/gallery/'); ?>">Gallery</a></li>
                            <li><a href="<?php echo base_url('admin/product/'); ?>">Products</a></li>
                             <li><a href="<?php echo base_url('admin/category/'); ?>">Category</a></li>
                             <li><a href="<?php echo base_url('admin/projects/'); ?>">Projects</a></li>
                             <li><a href="<?php echo base_url('admin/slider/'); ?>">Slider</a></li>

                        </ul>
                    </li>

                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <script type="text/javascript">
    var selector = '.sub li';

    $(selector).on('click', function(){

    $(selector).removeClass('active');
    $(this).addClass('active');
}); 
    </script>
    <style>
li.active{
color: rgb(255,0,0);
}
    
    </style>
