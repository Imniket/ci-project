<html>
    <head><title>AdminPanel</title> 
        <?php include_once ('header.php'); ?>
    </head>   
    <body>
        <?php include_once ('nevbar.php'); ?>

        <?php
        if (isset($_view) && $_view) {
          $this->load->view($_view);
        }
        ?>
    

    <?php include_once('footer.php'); ?>
    <?php include_once('script.php'); ?>
    </body>
</html>
