
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><?php echo anchor("?","<i class='fa fa-home'></i> Home "); ?></li>
                   <li><a><i class="fa fa-edit"></i> Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("barang/daftar","Daftar Barang"); ?></li>
                      <li><?php echo anchor("barang/daftar","Penerimaan Barang"); ?></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("transaksi/pinjam","Peminjaman"); ?></li>
                      <li><?php echo anchor("transaksi/kembali","Pengembalian"); ?></li>
                      <li><?php echo anchor("transaksi/dipinjam","Barang Belum Kembali"); ?></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("laporan/barang","Data Barang"); ?></li>
                      <li><?php echo anchor("laporan/kembali","Pengembalian Barang"); ?></li>
                      <li><?php echo anchor("laporan/barang","Status Barang"); ?></li>
                      <li><?php echo anchor("laporan/alert","Daftar Peringatan"); ?></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Referensi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("laporan/jenisbrg","Jenis Barang"); ?></li>
                      <li><?php echo anchor("laporan/users","Daftar pengguna"); ?></li>
                      
                    </ul>
                  </li>
              
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>?/login/logout">

                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/dist2/images/img.png" alt=""><?php echo ucwords($user); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url(); ?>?/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-green"><?php echo $jmlalert->num_rows(); ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php 
foreach ($alert as $data) {
  if(substr($data['pb_harus_kembali_tgl'],0,10) == date('Y-m-d',strtotime('+3 days'))){
  echo "<li><a href='".base_url()."?/laporan/cetakalert/".$data['pb_id']."' target='_blank'><span class='image'><img src='".base_url()."assets/dist2/images/img.png' alt='Profile Image' height='width='29.27'' width='29.27' /></span><span><span>";
  echo $data['pb_nama_siswa']."</span>";
  echo "<span class='time'>Today</span></span><span class='message'>";
  echo "Tanggal kembali harus pada ".$data['pb_harus_kembali_tgl'];
  echo "</span></a></li> ";
}
}

                     ?>
                   
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">