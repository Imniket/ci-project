<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/product/add'); ?>">Add Products</a>
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
                                <th>CATEGORY ID</th>                            
                                <th>Name</th>
                                <th>Detail</th>
                                <th>MFG DATE</th>
                                <th>Quantity</th>
                                <th>Remaining</th>
                                <th>image1</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $p) { ?>
                              <tr>
                                  <td><?php echo $p['category_id'] ; ?></td>
                                  <td><?php echo $p['name']; ?></td>
                                  <td><?php echo $p['detail']; ?></td>
                                  <td><?php echo $p['mfg_date']; ?></td>
                                  <td><?php echo $p['quantity']; ?></td>
                                  <td><?php echo $p['remaining_quantity']; ?></td>
                                  <td><img src="<?php echo base_url('uploads/images/products/thumb/') . $p['image1']; ?>" alt="avtar.png"style="height: 40px; width: 40px; "></td>
                                  <td><?php echo $p['price']; ?></td>
                                  <td>
                                      <a href="<?php echo base_url('admin/product/remove/' . $p['id']); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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