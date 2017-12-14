<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts"></div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Update Gallery
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>

                        </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form class="cmxform form-horizontal form " id="form" method="post" action="<?php echo base_url('admin/gallery/doupload'); ?>" enctype="multipart/form-data" >
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="cname" name="name" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="title" name="title" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-6">
                                        <input id="input-id " type="file" class="file" data-preview-file-type="text" multiple="3" name="profile">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="ccomment" class="control-label col-lg-3">Description</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control " id="discription" name="discription" required=""></textarea>
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
