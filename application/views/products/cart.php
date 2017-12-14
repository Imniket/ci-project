
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <?php
// All values of cart store in "$cart".
                if ($cart = $this->cart->contents()) {
                  ?>
                  <thead>

                      <tr>
                          <th></th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Total</th>
                          <th> </th>                        
                      </tr>
                  </thead>
                  <?php
// Create form and send all values in "shopping/update_cart" function.
                  echo form_open('product/update_cart');
                  $grand_total = 0;
                  $i = 1;

                  foreach ($cart as $item):
// echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
// Will produce the following output.
// <input type="hidden" name="cart[1][id]" value="1" />

                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    //echo form_hidden('cart[' . $item['id'] . '][image1]', $item['image1']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
                    <tbody>

                        <tr>
                            <td></td>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> 
                                        <img class="media-object" src="<?php echo base_url('uploads/images/products/' . $item['image']); ?>" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#"><?php echo $item['name']; ?></a></h4>
                                        <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                        <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>

                                    </div>
                                </div></td>

                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input id="numb" class="form-control " name="<?php echo 'cart[' . $item['id'] . '][qty]' ?>" pattern="[0-3]" min="1" max="3" value="<?php echo $item['qty'] ?>" type="text" style="text-align: right">

                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>&#8377;<?php echo number_format($item['price'], 2); ?></strong></td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td class="col-sm-1 col-md-1 text-center"><strong>&#8377; <?php echo number_format($item['subtotal'], 2) ?></strong></td>
                            <td class="col-sm-1 col-md-1">
                                <a href="<?php echo base_url('product/remove_cart/' . $item['id'] . '/' . $item['rowid'] . '/' . $item['qty']) ?>" type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> REMOVE 
                                </a></td>
                          <?php endforeach; ?>
                      </tr>
                      <tr>
                          <td>  </td>
                          <td>   </td>
                          <td>   </td>
                          <td>   </td>
                          <td><h5>Subtotal</h5></td>
                          <td class="text-right"><h5><strong>&#8377;<?php echo number_format($grand_total, 2); ?></strong></h5></td>
                      </tr>
                      <tr>
                          <td>   </td>
                          <td>   </td>
                          <td>   </td>
                          <td>   </td>
                          <td><h3>Total</h3></td>
                          <td class="text-right">
                              <h3>&#8377;<?php echo number_format($grand_total, 2); ?></h3></td>
                      </tr>
                      <tr>

                          <td>   </td>
                          <td>   </td>
                          <td>   </td>
                          <td><input class ='btn btn-success'  type="submit" value="Update Cart" onclick="myFunction()"></td>
                          <td>                             
                              <button type="button" class="btn btn-default">
                                  <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                              </button></td>
                          <td>
                              <a type="button" class="btn btn-success" href="<?php echo base_url(''); ?>product/order_detail">
                                  Checkout <span class="glyphicon glyphicon-play"></span>
                              </a></td>

                          <?php echo form_close(); ?>
                      </tr>
                  </tbody>
                <?php }else { ?>
                  <img src="<?php echo base_url('asset/images/emptycart2.png'); ?>" >
                <?php } ?>

            </table>
        </div>
    </div>
</div>
<script>

</script>