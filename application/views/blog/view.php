<?php $user_session = $this->session->userdata('frontend') ;?>
<div class="contact wthree-2">
    <div class="container">
        <h1 class="text-center">Blogs</h1>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <?php if ($user_session['id']) { ?>
                          <a class="btn btn-primary" href="<?php echo base_url('blog/insert_blog'); ?>">Add New</a>

                          <tr>
                              <th>ID</th>
                              <th>name</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Action</th>
                          </tr>
                          <?php foreach ($blog as $u) { ?>
                            <tr>
                                <td><?php echo $u['id']; ?></td>
                                <td><?php echo $u['name']; ?></td>
                                <td><?php echo $u['title']; ?></td>
                                <td><?php echo $u['discription']; ?></td>

                                <td>
                                    <a class="btn btn-info" href="<?php echo base_url('blog/edit/' . $u['id']); ?>">Edit</a>
                                    <a class="btn btn-danger" href="<?php echo base_url('blog/remove/' . $u['id']); ?>">Delete</a>

                                </td>
                            </tr>
                          <?php } ?>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>