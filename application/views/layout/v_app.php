<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('layout/v_header')?>
  </head>
 
<body>
	<div id="wrapper-main">

<?php $this->load->view('layout/v_navbar')?>

<?php $this->load->view('content/'.$header['content'])?>

	</div>

<?php $this->load->view('layout/v_javascript')?>
</body>
</html>
