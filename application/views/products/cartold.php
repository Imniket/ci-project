<div class="wthree-3">
    <div class="container">
        <table class="table table-striped" id="table" border="0" cellpadding="5px" cellspacing="1px">
            <?php
// All values of cart store in "$cart".
            if ($cart = $this->cart->contents()):
              ?>
              <thead id= "main_heading">
              <td><b>Numbers</b></td>
              <td><b>Name</b></td>
              <td><b>Price</b></td>
              <td><b>Qty</b></td>
              <td><b>Amount</b></td>
              <td><b>Cancel Product</b></td>
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
                <tr>
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>
                    <td>
                        &#8377;  <?php echo number_format($item['price'], 2); ?>
                    </td>
                    <td>

                        <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], ' max="3" size="1" style="text-align: right" min="1"'); ?>
                    </td>
                    <?php $grand_total = $grand_total + $item['subtotal']; ?>
                    <td>
                        &#8377; <?php echo number_format($item['subtotal'], 2) ?>
                    </td>
                    <td>

                        <?php
// cancle item.

                        echo anchor('product/remove_cart/' . $item['rowid'], 'Remove This Item');
                        ?>
                    </td>
                  <?php endforeach; ?>
              </tr>
              <tr>
                  <td><b><h5>Order Total: &#8377; <?php
//Grand Total.
                              echo number_format($grand_total, 2);
                              ?></h5></b></td>

                  <?php // "clear cart" button call javascript confirmation message  ?>
                    <!--<td colspan="5" align="right"><a class="btn btn-primary" href="<?php //echo base_url('product/remove_cart');    ?>">Remove </a>-->
                  <td colspan="5" align="right">
                      <?php //submit button. ?>
                      <input class ='btn btn-success'  type="submit" value="Update Cart">
                      <?php echo form_close(); ?>

                      <!-- "Place order button" on click send "billing" controller -->
                      <a class ='btn btn-info' type="button" value="Place Order" href="<?php echo base_url(''); ?>product/order_detail">Place order</a></td>
              </tr>
            <?php endif; ?>
        </table>
    </div>
</div>