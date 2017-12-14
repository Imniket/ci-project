<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gallery View
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/gallery/doupload'); ?>">Add New</a>
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
                                <th>Description</th>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($gallery as $g) { ?>
                              <tr>
                                
                                  <td><?php echo $g['discription']; ?></td>
                                  <td><?php echo $g['title']; ?></td>
                                  <td><?php echo $g['name']; ?></td>
                                  <td><img src="<?php echo base_url('uploads/images/thumb/') . $g['photo']; ?>"style="height: 40px; width: 40px; "></td>
                                  <td>
                                      <a href="<?php echo base_url('admin/gallery/remove/' . $g['id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
$(document).ready(function(){
    $('#myTable').DataTable();
    });</script>