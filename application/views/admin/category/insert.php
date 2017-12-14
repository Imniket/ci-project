<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts"></div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        INSERT CATEGORY
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>

                        </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form class="cmxform form-horizontal form " id="form" method="post" action="<?php echo base_url('admin/category/insert/'); ?>" enctype="multipart/form-data" >
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="cname" name="name" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" value="submit"name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>


    </section>
