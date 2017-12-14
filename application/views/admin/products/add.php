<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts"></div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Products
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>

                        </span>
                    </header>
                    <div class="panel-body">
                        <div>
                            <form class="form form-horizontal form" id="form" method="post" action="<?php echo base_url('admin/product/add'); ?>" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="name" name="name" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ccategory" class="control-label col-lg-3">CATEGORY</label>
                                    <div class="col-lg-6">
                                        <div class="dropdown">
                                            <select class="form-control" id="category" name="category">
                                                <?php foreach ($category as $c) { ?>
                                                <option value="<?php  echo $c['id']; ?>"><?php echo $c['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Detail</label>
                                    <div class="col-lg-6">
                                        <textarea class=" form-control" id="detail" name="detail"></textarea>   
                                    </div> 
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">DOM</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="date" name="mfg_date" type="date" min="2000-12-31" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="ctitle" class="control-label col-lg-3">Quantity</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="quantity" name="quantity" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cfile" class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-6">
                                        <input id="input-id" type="file" class="file" data-preview-file-type="text" name="image1" multiple="3">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="price" class="control-label col-lg-3">price</label>
                                    <div class="col-lg-6">
                                        <input type="text" id="price" name="price" class="form-control" required=""> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" value="submit" name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
    <script>$(".form").validate();</script>