<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                   CaTEGORY LIST
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/category/insert'); ?>">Add category</a>
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
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CREATED DATE</th>
                                <th>UPDATED DATE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($category as $c) { ?>
                              <tr>
                                  <td><?php echo $c['id']; ?></td>
                                  <td><?php echo $c['name'] ;?></td>
                                  <td><?php echo $c['create_date']; ?></td>
                                  <td><?php echo $c['update_date']; ?></td>
                                  <td>
                                      <a href="<?php echo base_url('admin/category/remove/' . $c['id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
    <script>$(document).ready(function () {
          $('#myTable').DataTable();
      });</script>