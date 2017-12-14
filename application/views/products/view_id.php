<?php $user_session = $this->session->userdata('frontend') ;?>
<div class="contact wthree-2">
    <div class="container">
        <h1 class="text-center">Orders</h1>
        <div class="row">

          <div class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              Active </a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
              Canceled</a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
              Delivered</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
              <p>
               
              </p>
              <p>
                 <div class="table-responsive">

                    <table class="table table-hover">
                        <?php if ($user_session['id']) { ?>
                                             
                         
                          <?php foreach ($info as $booked) { ?>
                            <tr>
                                                              
                                <td><b><?php echo $booked['name']; ?></b></td>
                                <td><?php echo $booked['last_name']; ?></td>
                                <td><?php echo $booked['email']; ?></td>
                               <td>&#8377; &nbsp; <?php echo  $booked['total']; ?></td>
                               <td><?php echo $booked['status'];?></td>
                               <td><a class="btn btn-danger" href="<?php echo base_url('product/cancel/').$booked['id'].'/'.$booked['status'] ;?>">Cancel Order</a></td>
                              
                            </tr>
                          <?php } ?>
                        <?php } ?>
                    </table>
                </div>
              </p>
              <p>
                
              </p>
            </div>
            <div class="tab-pane" id="tab_default_2">
              <p>
               
              </p>
              <p>
               <div class="table-responsive">

                    <table class="table table-hover">
                        <?php if ($user_session['id']) { ?>
                                             
                        
                          <?php foreach ($canceled as $cancel) { ?>
                            <tr>
                                                              
                                <td><b><?php echo $cancel['name']; ?></b></td>
                                <td><?php echo $cancel['last_name']; ?></td>
                                <td><?php echo $cancel['email']; ?></td>
                               <td>&#8377; &nbsp; <?php echo  $cancel['total']; ?></td>
                               <td><?php echo $cancel['status'];?></td>
                               <td><a class="btn btn-danger" href="<?php echo base_url('product/cancel/').$cancel['id'].'/'.$cancel['status'] ;?>">RE-Order</a></td>
                              
                            </tr>
                          <?php } ?>
                        <?php } ?>
                    </table>
                </div>
              </p>
              <p>
                
              </p>
            </div>
            <div class="tab-pane" id="tab_default_3">
              <p>
                
              </p>
              <p>
                <div class="table-responsive">

                    <table class="table table-hover">
                        <?php if ($user_session['id']) { ?>
                                             
                        
                          <?php foreach ($deliverd as $deliver) { ?>
                            <tr>
                                                              
                                <td><b><?php echo $deliver['name']; ?></b></td>
                                <td><?php echo $deliver['last_name']; ?></td>
                                <td><?php echo $deliver['email']; ?></td>
                               <td>&#8377; &nbsp; <?php echo  $deliver['total']; ?></td>
                               <td><h4><?php echo $deliver['status'];?></h4></td>
                                                            
                            </tr>
                          <?php } ?>
                        <?php } ?>
                    </table>
                </div>
              </p>
              <p>
                
              </p>
            </div>
          </div>
        </div>
      </div>
            <div class="col-sm-1"></div>
            <div class="col-md-10">
                
            </div>
        </div>
    </div>
</div>