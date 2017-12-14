<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts"></div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Project
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>

                        </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form class="form form-horizontal form" id="form" method="post" action="<?php echo base_url('admin/projects/edit/'.$projects['project_id']); ?>" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="name" name="project_name" minlength="2" type="text" required="" value="<?php echo ($this->input->post('project_name') ? $this->input->post('project_name') : $projects['project_name']); ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Sort Detail</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="name" name="sort_detail" minlength="2" maxlength="50" type="text" required="" value="<?php echo ($this->input->post('sort_detail') ? $this->input->post('sort_detail') : $projects['sort_detail']); ?>">
                                    </div> 
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Project Detail</label>
                                    <div class="col-lg-6">
                                        <textarea class=" form-control" id="detail" name="project_detail"><?php echo ($this->input->post('project_detail') ? $this->input->post('project_detail') : $projects['project_detail']); ?></textarea>   
                                    </div> 
                                </div>
                                <div>
                                    
                                </div>
                                
                                <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3"></label>
                                    <div class="col-lg-6">
                                        <img style="width: 100px;height: 100px;" src="<?php echo base_url('uploads/images/projects/').$projects['project_pic'];?>" >

                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-6">
                                        <input id="input-id" type="file" class="file" data-preview-file-type="text" name="project_pic" multiple="3" value="">

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