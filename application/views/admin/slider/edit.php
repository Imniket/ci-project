<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts"></div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        edit Slider Image
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>

                        </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form class="form form-horizontal form" id="form" method="post" action="<?php echo base_url('admin/Slider/edit/'.$sliderdata['image_id']); ?>" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Slider Image Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="name" name="image_name" minlength="5"  maxlength="50" type="text" required="" value="<?php echo ($this->input->post('image_name') ? $this->input->post('image_name') : $sliderdata['image_name']); ?>">
                                    </div>
                                </div>
                               
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Slider Image Detail</label>
                                    <div class="col-lg-6">
                                        <textarea class=" form-control" id="detail" name="image_detail"><?php echo ($this->input->post('image_detail') ? $this->input->post('image_detail') : $sliderdata['image_detail']); ?></textarea>   
                                    </div> 
                                </div>

                                 <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3"></label>
                                    <div class="col-lg-6">
                                        <img style="width: 100px;height: 100px;" src="<?php echo base_url('uploads/images/sliders/').$sliderdata['image'];?>" >

                                    </div>
                                </div>
                                 <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3">Slider Image</label>
                                    <div class="col-lg-6">
                                        <input id="input-id" type="file" class="file" data-preview-file-type="text" name="image1" multiple="3">
                                    </div>
                                </div>
             
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" value="submit" name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
    <script>$(".form").validate();</script>