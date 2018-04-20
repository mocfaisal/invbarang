
<?php 

// $this->load->view('parts/header');
// $this->load->view('parts/navigation');
$this->load->view('parts/top');
$this->load->view('parts/sidebar');
?>

<body>

  <!-- Fixed navbar -->

<form action="<?php echo site_url('Transaksi/simpan') ?>" method="POST">
<div class="x_panel">
<div class="x_content">
      

      <?php 

      $this->load->view('forms/form_siswa');

      ?>
      <!-- <button id="searchsiswa">Search Siswa</button> -->
      <div id="datasiswa">
        <?php 

        $this->load->view('data/siswa'); 

        ?>
      </div>
  <?php 

      $this->load->view('forms/form_PBarang');
      ?>

    <div id="databarang">

      <?php 

      $this->load->view('data/barang');

      ?>

    </div>
    <div id="transaksi">
      <div class="col-sm-4 pull-right">
        <button type="button" id="clearalldata" class="btn btn-danger">Clear All</button>
        <button type="button" id="caridatabr" class="btn btn-warning">Tambah Barang</button>
        <!-- <button type="button" name="btnSubz" class="btn btn-success btn-flat pull-right">Simpan</
          button> -->
          <input type="submit" name="btnSub" id="btnSub" class="btn btn-success btn-flat" value="SIMPAN">
      </div>
      <?php 

      $this->load->view('data/DTRBarang');

      ?>

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

  $('#datasiswa').dialog({
    title:'Data Siswa',
    autoOpen:false,
    height:280,
    width:630,
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

    var x = 0;
    $('#btnSubz').click(function(){
  $('#btnSub').click();
});
    $('#data-barang').on('click','.pilih-barang',function(e){
      e.preventDefault();

      var kode = $(this).closest('tr').find('td:eq(1)').text();
      
      if($('#'+kode).length == 0){

        x++;

        var kode = $(this).closest('tr').find('td:eq(1)').text();
        var nama = $(this).closest('tr').find('td:eq(2)').text();
        var kondisi = $(this).closest('tr').find('td:eq(3)').text();

        $('#dtransaksi').append('<tr id="'+kode+'">'+
          "<td>"+x+"</td>"+
          "<td>"+kode+"</td>"+
          "<td hidden='true'><input type='text' name='kode[]' value='"+kode+"'></td>"+
          "<td>"+nama+"</td>"+
          "<td>"+kondisi+"</td>"+
          "<td><span class='hapusbarang'><button class='btn btn-danger'>Hapus</button></span></td>"+
          "</tr>");

        $('#databarang').dialog('close');
      }else{

        $('#databarang').dialog('close');
      }

  });

    $('#searchsiswa').click(function(){

      $('#datasiswa').dialog('open');

      $('.pilih-siswa').click(function(){
        var nis = $(this).closest('tr').find('td:eq(1)').text();
        var nama = $(this).closest('tr').find('td:eq(2)').text();

        $('#nis').val(nis);
        $('#nama').val(nama);

        $('#datasiswa').dialog('close');
      });

    });

    $('#caridatabr').click(function(){

      $('#databarang').dialog('open');

    });



$('#tglhari').on('change',function(){
    var datez = new Date($('#tglsekarang').val()),
    tglhari = parseInt($('#tglhari').val(), 10);

    if(!isNaN(datez.getTime())){
      datez.setDate(datez.getDate() + tglhari);
      $('#tglbalik').val(datez.toInputFormat());
    }
    else
    {
alert('Invalid Data');
    }
  });

  Date.prototype.toInputFormat = function(){
    var yyyy = this.getFullYear().toString();
    var mm = (this.getMonth()+1).toString();
    var dd = this.getDate().toString();
    return yyyy + "-" + (mm[1]?mm:"0") + "-" + (dd[1]?dd:"0"+dd[0]);
  }
//end ready function

  });

  $('#dtransaksi').on('click','.hapusbarang',function(e){
    e.preventDefault();
    $(this).closest('td').parent('tr').remove();
    x--;

  });

  $('#clearalldata').click(function(){
    x=0;
    $('#dtransaksi').html('');
  });



$('#prosespinjam').click(function(){
  
  if ($('#nis').val() == 0){
    alert('Silahkan pilih Siswa terlebih dahulu');
  }
 
});

$('#tes').click(function(){
  var hasil = $('#data-transaksi').closest('tr').find('td');
 alert(hasil.length);
  

});
$('#data-siswa').dataTable();
  $('#data-barang').dataTable();


</script>

