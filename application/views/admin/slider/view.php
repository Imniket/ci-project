<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Slider 
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/slider/add'); ?>">Add sliders</a>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped b-t b-light ">

                        <thead>
                            <tr>
                                <th>Image Name</th>
                                <th>Image detail</th>
                                <th>Image</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sliders as $slider) { ?>
                              <tr>
                                  <td><?php echo $slider['image_name']; ?></td>
                                  <td><?php echo $slider['image_detail']; ?></td>
                                  <td><img src="<?php echo base_url('uploads/images/sliders/thumb/') . $slider['image']; ?>" alt="avtar.png" style="height: 40px; width: 40px; "></td>
                                  <td>
                                      <a href="<?php echo base_url('admin/slider/delete/' . $slider['image_id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a> &nbsp;

                                       <a href="<?php echo base_url('admin/slider/edit/' . $slider['image_id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-pencil text-success text"></i></a>
                                  </td>
                              </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">

                </footer>
            </div>
        </div>
    </section>
    <script>
      $(document).ready(function () {
          $('#myTable').DataTable();
      });</script>