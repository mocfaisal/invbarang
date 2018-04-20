
<?php 

// $this->load->view('parts/header');
// $this->load->view('parts/navigation');
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
?>

<body>

 <div class="x_panel">

<div class="x_content">

<button id="addusers" class="btn btn-success btn-flat" style="margin-bottom: 20px;">Tambah Data</button>
	<div id="userforms">
<?php 
$this->load->view('forms/input_users');
 ?>   

 </div>

<?php 
$this->load->view('data/users');
 ?>   
</div>
 </div>
</body>

<!-- Mirrored from getbootstrap.com/examples/navbar-fixed-top/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 31 Aug 2014 14:51:03 GMT -->
</html>
<?php 

// $this->load->view('parts/footer');
$this->load->view('parts/bottom');

?>
<script type="text/javascript">

$('#message').dialog({
		autoOpen:false,
		height:200,
		width:200,
		modal:true,
		buttons:{
			'OK':function(){
				location.reload();
				$(this).dialog('close');
			}
		}
	});
	$('#userforms').dialog({
    title:'Input Users',
    autoOpen:false,
    height:280,
    width:630,
    modal:true
  });

$('#addusers').click(function(){
$('#userforms').dialog({
		title:"Input Users",
		autoOpen:false,
		modal:true,
		height:300,
		width:500,
		buttons:{
			'Cancel':function(){
				$(this).dialog('close');
			},
			'Save':function(){

				var url=$('#form-users').attr('action');
				var data=$('#form-users').serializeArray();
				$.post(url,data,function(i){
					$('#message').html(i);
				});
				$('#message').dialog('open');
				$(this).dialog('close');
			}
		}
	});

		$('#userforms').dialog('open');

	});


</script>