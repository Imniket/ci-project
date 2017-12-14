
<div class="contact wthree-2">
    <div class="container">
        <h1 class="text-center">Blogs</h1>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-md-10">
                <div class="table-responsive">

                    <?php foreach ($blogs as $u) { ?>
                    <blockquote class="blockquote" style="background-color: moccasin">
                          <p><?php echo $u['title']; ?></p><br>
                          <h4 class="text-capitalize"><?php echo $u['discription']; ?></h4>
                          <footer class="text-right">From <?php echo $u['name']." ".$u['date']; ?></footer>                               
                      </blockquote>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>