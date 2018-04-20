
<?php 

// $this->load->view('parts/header');
// $this->load->view('parts/navigation');
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
?>

<body>

 
 	<button id="cetak" class="btn btn-success btn-flat" onclick="window.print()">Cetak</button>
 	<div class="x_panel">
<div class="x_content">
   <?php 

$this->load->view('data/jenisbrg');
    ?>

 </div></div>
</body>

<!-- Mirrored from getbootstrap.com/examples/navbar-fixed-top/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 31 Aug 2014 14:51:03 GMT -->
</html>
<?php 

// $this->load->view('parts/footer');
$this->load->view('parts/bottom');
?>
