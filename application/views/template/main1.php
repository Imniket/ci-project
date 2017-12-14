<?php include_once ('header1.php'); ?>
<?php //include_once ('banner.php'); ?>
<?php include_once('navbar.php'); ?>

	
	<?php	if (isset($_view) && $_view) {
  $this->load->view($_view);
}
?>
<?php include_once ('footer.php'); ?>