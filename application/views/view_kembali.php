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
		

<center>
      
                        
                        	<h4>Status</h4>
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" class="kondisi" name="kondisi" id="kondisi1" value="0"> &nbsp; Kembali &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" class="kondisi" name="kondisi" id="kondisi2" value="1"> Belum Kembali
                            </label>
                          </div>
                        
                      
		
		</center>
		<div id="table-responsive">
			<table class="table" id="data-kembali">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID Peminjam</th>
						<th>No Peminjam</th>
						<th>Nama Peminjam</th>
						<th>Tgl Pinjam</th>
						<th>Tgl Berakhir</th>
						<!-- <th>Aksi</th> -->
					</tr>
				</thead>    

				<tbody id="dkembali">
				</tbody>

			</table>
		</div>
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
	$(function(){


	$('.kondisi').on('change',function(e){
		e.preventDefault();
		var kondisi = $(this).val();
		var url = "<?php echo base_url(); ?>?/laporan/getdatakembali/"+kondisi;
		if($(this).val()==1){
			$.get(url,function(x){
				$('#dkembali').html(x);
			});

		}
		else{
			$.get(url,function(x){
				$('#dkembali').html(x);
			});
		}
	});
	//enf of ready function
});
	
</script>