
<div class="add wthree-2">
    <div class="container">
        <h1>Upload Image</h1>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="form-group-right-lg">
                    <form class="form-horizontal" name="form1" action="<?php echo base_url('upload/doupload') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-7">
                                <input class="form-control"type="text" name="name" placeholder="Enter Name" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="title" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Pick Picture</label>
                            <div class="col-lg-7">
                                <input  type="file" name="profile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Discription</label>
                            <div class="col-lg-7">
                                <textarea name="discription" placeholder="Discription" maxlength=""></textarea>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-7">
                                <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

