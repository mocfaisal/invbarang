
<?php 

// $this->load->view('parts/header');
// $this->load->view('parts/navigation');
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
?>
<body>

  <!-- Fixed navbar -->
<form action="<?php echo site_url('Transaksi/balik') ?>" method="POST">

  <div class="x_panel">
<div class="x_content">
     <?php 

     $this->load->view('forms/form_dpinjam');
     ?>
     
   </div>


 <div id="datapinjam">

  <?php 

  $this->load->view('data/pinjam');

  ?>

</div>
<div class="panel panel-body">

        <div id="table-responsive">
          <table class="table" id="data-transaksi">
            <thead>
              <tr>
                <th>No.</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Status Barang</th>
                <!-- <th>Aksi</th> -->
              </tr>
            </thead>    

            <tbody id="dtransaksi">
            </tbody>

          </table>
        </div>

<div class="pull-right">
    <!-- <button type="button" id="clearalldata" class="btn btn-danger">Clear All</button> -->
    <!-- <button type="button" id="refreshdata" class="btn btn-warning">Refresh</button> -->
        <!-- <button type="button" name="btnSubz" class="btn btn-success btn-flat pull-right">Simpan</
          button> -->
          <input type="submit" name="btnSub" id="btnSub" class="btn btn-success btn-flat" value="Kembaliin!">
        </div>

      </div>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</form>
  </body>

  <!-- Mirrored from getbootstrap.com/examples/navbar-fixed-top/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 31 Aug 2014 14:51:03 GMT -->
  </html>
  <?php 

  // $this->load->view('parts/footer');
  $this->load->view('parts/bottom');
  ?>

  <script type="text/javascript">

    $('#datapinjam').dialog({
      title:'Data Siswa',
      autoOpen:false,
      height:500,
      width:950,
      modal:true
    });

    $('#databarang').dialog({
      title:'Data Barang',
      autoOpen:false,
      height:300,
      width:700,
      modal:true
    });


    $(function(){

      $('#data-pinjam').on('click','.pilih-pinjam',function(e){
    // alert('asa');
    e.preventDefault();
    var kode = $(this).closest('tr').find('td:eq(1)').text();
    var urls= '<?php echo base_url(); ?>?/transaksi/datadetpinjam/'+kode;
    // alert(urls);
    $.get(urls,function(x){
      $('#dtransaksi').html(x);

    });

  });

      $('#searchid').click(function(){
        $('#datapinjam').dialog('open');
      });

      $('#data-pinjam').on('click','.pilih-pinjam',function(e){

        e.preventDefault();

        var idpinjam = $(this).closest('tr').find('td:eq(1)').text();
        var nopinjam = $(this).closest('tr').find('td:eq(2)').text();
        var namapinjam = $(this).closest('tr').find('td:eq(3)').text();
        var tglpinjam = $(this).closest('tr').find('td:eq(4)').text();
        var tglakhirpinjam = $(this).closest('tr').find('td:eq(5)').text();      

        $('#idpinjam').val(idpinjam);
        $('#nopinjam').val(nopinjam);
        $('#namapinjam').val(namapinjam);
        $('#tglpinjam').val(tglpinjam);
        $('#tglakhirpinjam').val(tglakhirpinjam);


        $('#datapinjam').dialog('close');

      });
    });
//end of ready document
$('#data-pinjam').dataTable();
// $('#data-transaksi').dataTable();


</script>

