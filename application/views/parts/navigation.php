<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Inventory</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo anchor('?','Home'); ?></li>
            <!-- <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
             -->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Barang <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li><?php echo anchor('/Barang/daftar','Daftar Barang') ?></li>
                <!-- <li><a href="#">Pengembalian</a></li> -->
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li><?php echo anchor('/transaksi/pinjam','Peminjaman') ?></li>
                <li><?php echo anchor('/transaksi/kembali','Pengembalian') ?></li>
                  <li><?php echo anchor('/transaksi/dipinjam','Barang Belum Kembali') ?></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li><?php echo anchor('/laporan/alert','Peringatan') ?></li>
                <li><?php echo anchor('/laporan/kembali','Pengembalian') ?></li>
                <li><?php echo anchor('/laporan/barang','Daftar Barang') ?></li>

                
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><?php echo anchor('/user/daftar','Siswa') ?></li>
             <li><?php echo anchor('/login/daftar','User') ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>