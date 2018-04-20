
<?php 

// $this->load->view('parts/header');
// $this->load->view('parts/navigation');
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
?>

<body>
	
<div class="x_panel">
<div class="x_content">
		<div>
			<button id="addbrg" class="btn btn-success btn-flat" style="margin-bottom: 20px;">Tambah Data</button>
		</div>
		<div id="message"></div>
		<?php
		$this->load->view('data/listbarang');
		?>   
		<div id="dbarang">
			<?php 
			$this->load->view('forms/form_barang');
			?>
</div>
	
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
	$('#data-listbarang').on('click','.remove-data',function(e){
		e.preventDefault();

		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var kodejns = $(this).closest('tr').find('td:eq(6)').text();
		var url = $(this).closest('tr').find('a').attr('href');
		$('#message').dialog({
		title:"Konfirmasi",
		autoOpen:false,
		height:200,
		width:420,
		modal:true,
		buttons:{
			'OK':function(){
				$.get(url,function(x){
				$('#message').html(x);
				location.reload();
				
				});
			},
			'Cancel':function(){
				$(this).dialog('close');
			}
		}
	});

$('#message').html('Apakah data <b>'+kode+'</b> akan dihapus?');
$('#message').dialog('open');

	});
	$('#data-listbarang').on('click','.btn-edit',function(e){
		e.preventDefault();
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var nama = $(this).closest('tr').find('td:eq(2)').text();
		var jenis = $(this).closest('tr').find('td:eq(3)').text();
		var kondisi = $(this).closest('tr').find('td:eq(5)').text();
		var kodejns = $(this).closest('tr').find('td:eq(6)').text();
		$('#kodebrg').val(kode);
		$('#nama').val(nama);
		$('#jenis').val(jenis);
		$('#kondisi').val(kondisi);
		$('#kodejns').val(kodejns);

$('#dbarang').dialog({
		title:"Update Data Barang",
		autoOpen:false,
		modal:true,
		height:300,
		width:500,
		buttons:{
			'Cancel':function(){
				$(this).dialog('close');
			},
			'Save':function(){

				var url="<?php echo base_url(); ?>?/barang/update";
				var data=$('#form-barang').serializeArray();
				$.post(url,data,function(i){
					$('#message').html(i);
				});
				$('#message').dialog('open');
				$(this).dialog('close');
			}
		}
	});

		$('#dbarang').dialog('open');

	});

	
	$('#data-listbarang').dataTable();
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
	
	$('#addbrg').click(function(){
		$('#nama').val('');
		$('#jenis').val('');
		$('#kondisi').val('');
		
$('#dbarang').dialog({
		title:"Tambah Data Barang",
		autoOpen:false,
		modal:true,
		height:300,
		width:500,
		buttons:{
			'Cancel':function(){
				$(this).dialog('close');
			},
			'Save':function(){

				var url=$('#form-barang').attr('action');
				var data=$('#form-barang').serializeArray();
				$.post(url,data,function(i){
					$('#message').html(i);
				});
				$('#message').dialog('open');
				$(this).dialog('close');
			}
		}
	});
		$('#dbarang').dialog('open');

	});
	$('#dbarang').dialog({
		title:"Tambah Data Barang",
		autoOpen:false,
		modal:true,
		height:300,
		width:500
	});
</script>
