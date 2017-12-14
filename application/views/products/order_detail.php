<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user_session = $this->session->userdata('frontend');
$grand_total = 0;
if ($cart = $this->cart->contents()):
  foreach ($cart as $item):
    $grand_total = $grand_total + $item['subtotal'];
  endforeach;
endif;
//print_r($cart);
//echo number_format($grand_total, 2);
?>
<div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order & Complete Checkout
                    </h2>
                    <hr/>
                    <a href="<?php echo base_url(''); ?>product/" class="btn btn-info" style="width: 100%;">Add More Products & Services</a>
                    <hr/>
                    <div class="shopping_cart">
                        <form class="form-horizontal form" method="post" action="<?php echo base_url(''); ?>product/booking ">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <?php foreach ($cart as $i) { ?>
                                                          <tr>
                                                              <td colspan="2">
                                                                  <!--<a class="btn btn-warning btn-sm pull-right"
                                                                     href=""
                                                                     title="Remove Item">X</a>-->
                                                                  <b>
                                                                      <?php echo $i['name']; ?></b></td>
                                                          </tr>
                                                        <?php } ?>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>One Job Posting Credit</li>
                                                                    <li>Job Distribution*</li>
                                                                    <li>Social Media Distribution</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>&#8377; <?php echo number_format($grand_total, 2); ?></b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">&#8377; <?php echo number_format($grand_total, 2); ?></span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div style="text-align: center; width:100%;"><a style="width:100%;"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapseTwo"
                                                                            class=" btn btn-success"
                                                                            onclick="$(this).fadeOut();
                                                                                  $('#payInfo').fadeIn();">Continue
                                    to Billing Information»</a></div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br/><br/>
                                        <table class="table table-striped" style="font-weight: bold;">
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" id="email" name="email"
                                                           required="required" type="email" value="<?php echo $user_session['email']; ?>"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">First name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_first_name" name="first_name"
                                                           required="required" type="text" value="<?php echo $user_session['name']; ?>"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" name="last_name" 
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_1">Address:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_address_line_1"
                                                           name="address" required="required" type="text"/>
                                                </td>
                                            </tr>                                          
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_state">Country:</label></td>
                                                <td>
                                                    <?php $attributes = 'id="country" class="form-control"';
                echo form_dropdown('country', $country, set_value('country'), $attributes); ?>
                                                </td>
                                            </tr>
        
                                             <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_state">State:</label></td>
                                                <td>
                                                     <?php $attributes = 'id="state" class="form-control"';
                echo form_dropdown('state', $state, set_value('state'), $attributes); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_city">City:</label></td>
                                                <td>
                                                    <?php $attributes = 'id="city" class="form-control"';
                echo form_dropdown('city', $city, set_value('city'), $attributes); ?>

                                                </td>
                                            </tr>                                           
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_phone" name="phone" type="text"/>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: center;"><a  type="submit" data-toggle="collapse"
                                                                 data-parent="#accordion"
                                                                 href="#collapseThree"
                                                                 class=" btn   btn-success" id="payInfo"
                                                                 style="width:100%;display: none;" onclick="$(this).fadeOut();
                                                                       document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information »</a>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Payment Information</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <span class='payment-errors'></span>
                                        <fieldset>
                                            <legend>What method would you like to pay with today?</legend>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-holder-name">Name on
                                                    Card</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="name"
                                                           id="name-on-card" placeholder="Card Holder's Name" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-number">Card
                                                    Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="number"
                                                           id="card-number" placeholder="Debit/Credit Card Number">
                                                    <br/>
                                                    <div>
                                                        <h3><span style="color:green; max-width: 250px; padding-bottom: 20px;">&#8377; <?php echo number_format($grand_total, 2); ?></span></h3>
                                                    </div>&nbsp;

                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="expiry-month">Expiration
                                                        Date</label>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <select class="form-control col-sm-2"
                                                                        data-stripe="exp-month" id="card-exp-month"
                                                                        style="margin-left:5px;">
                                                                    <option>Month</option>
                                                                    <option value="01">Jan (01)</option>
                                                                    <option value="02">Feb (02)</option>
                                                                    <option value="03">Mar (03)</option>
                                                                    <option value="04">Apr (04)</option>
                                                                    <option value="05">May (05)</option>
                                                                    <option value="06">June (06)</option>
                                                                    <option value="07">July (07)</option>
                                                                    <option value="08">Aug (08)</option>
                                                                    <option value="09">Sep (09)</option>
                                                                    <option value="10">Oct (10)</option>
                                                                    <option value="11">Nov (11)</option>
                                                                    <option value="12">Dec (12)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <select class="form-control" data-stripe="exp-year"
                                                                        id="card-exp-year">
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="cvv">Card CVC</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" stripe-data="cvc"
                                                               id="card-cvc" placeholder="Security Code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    </div>
                                                </div>
                                        </fieldset>
                                        <?php foreach ($cart as $c) { ?>
                                          <input type="hidden" name="qty" value="<?php echo $c['qty']; ?>">
                                          <input type="hidden" name="p_id" value="<?php echo $c['id']; ?>">
                                        <?php } ?>
                                        <input type="hidden" name="total" value="<?php echo number_format($grand_total, 2); ?>">
                                        <input type="submit" class="btn btn-success btn-lg" style="width:100%;" value="Pay Now">                                        
                                        <br/>
                                        <div style="text-align: left;"><br/>
                                            By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                                billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-1.10.2.js"
  integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$('#country').change(function(){
    var country_id = $(this).val();
    $("#state > option").remove();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('product/populate_state'); ?>",
        data: {id: country_id},
        dataType: 'json',
        success:function(data){
            $.each(data,function(k, v){
                var opt = $('<option />');
                opt.val(k);
                opt.text(v);
                $('#state').append(opt);
            });
            $('#city').html('<option value="0">Select City</option>');
            //$('#state').append('<option value="' + id + '">' + name + '</option>');
        }
    });
});

$('#state').change(function(){
    var state_id = $(this).val();
    $("#city > option").remove();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('product/populate_city'); ?>",
        data: {id: state_id},
        dataType: 'json',
        success:function(data){
            $.each(data,function(k, v){
                var opt = $('<option />');
                opt.val(k);
                opt.text(v);
                $('#city').append(opt);
            });
        }
    });
});
</script>
