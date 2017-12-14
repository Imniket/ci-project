<div class="edit wthree-2">
    <div class="container">
        <h1>EDIT BLOG</h1>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="form-group-right-lg">
                    <form class="form-horizontal form" name="form1" method="post" action="<?php echo base_url('blog/edit/' . $blog['id']) ?>">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-7">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $blog['name']); ?>" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="title" placeholder="Enter Blog Title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $blog['title']); ?>" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Discription</label>
                            <div class="col-lg-7">
                                <textarea id="editor1" name="discription" placeholder="Discription"><?php echo ($this->input->post('discription') ? $this->input->post('discription') : $blog['discription']); ?></textarea>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-7">
                                <button type="submit" class="btn btn-lg btn-success ">Repost</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- contact -->
<script>
  CKEDITOR.replace('editor1');
</script>


