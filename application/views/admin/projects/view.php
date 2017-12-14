<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Projects View
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/projects/add'); ?>">Add Projects</a>
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
                                <th>Project Name</th>
                                <th>Project Detail</th>
                                <th>Sort Intro</th>
                                <th>Project Image</th>
                                
                                <th>Status</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects as $p) { ?>
                              <tr>
                                  <td><?php echo $p['project_name']; ?></td>
                                  <td><?php echo $p['sort_detail']; ?></td>
                                  <td><?php echo $p['project_detail']; ?></td>                                                    
                                  <td><img src="<?php echo base_url('uploads/images/projects/thumb/') . $p['project_pic']; ?>" alt="avtar.png"style="height: 40px; width: 40px; "></td>
                              
                                    <td><a id="<?php echo $p['status'] ;?>" type="btn-success" href="<?php echo base_url().'admin/Projects/changestatus/'.$p['project_id'].'/'.$p['status'] ;?>" class="btn btn-success "><?php echo $p['status'] ;?></a></td>
                                  <td>
                                      <a href="<?php echo base_url('admin/projects/remove/' . $p['project_id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a> &nbsp;

                                       <a href="<?php echo base_url('admin/projects/edit/' . $p['project_id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-pencil text-success text"></i></a>
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
 <script>
            function handle(){
                    value = $("#<?php echo $p['status'] ;?>").text();
                    $(this).attr(value);
                    alert(value);
            }

            $(function(){
                    $("#<?php echo $p['status'] ;?>").click(handle);
            });
    </script>
