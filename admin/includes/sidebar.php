<!-- Config Navlink Sidebar -->
<?php include(BASE_PATH . 'config/navlink_config.php'); ?>
<!-- Source Icons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL ?>admin/dashboard.php" class="brand-link">
      <img src="<?php echo BASE_URL ?>admin/assets/dist/img/LogoRSI.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RSI Sunan Kudus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo BASE_URL ?>admin/assets/dist/img/xphid_avatar.png" 
                class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
<!---------------------- SIDEBAR MENU START ---------------------------------------->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" 
                class="nav-link">
              <ion-icon name="bar-chart-sharp"></ion-icon>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                <ion-icon name="pricetags-sharp"></ion-icon>
                  <p>Pesanan BARU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <ion-icon name="pricetags-sharp"></ion-icon>
                  <p>Pesanan DITERIMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <ion-icon name="backspace-sharp"></ion-icon>
                  <p>Pesanan DIBATALKAN</p>
                </a>
              </li>
            </ul>
          </li>
<!--------------------- MASTER SETTINGS ------------------------>
          <li class="nav-header">Master Settings</li>
          <li class="nav-item has-treeview <?php echo $activeMS1 ?>">
            <a href="#" class="nav-link <?php echo $activeMS2 ?>">
               <!-- <i class="nav-icon fas fa-copy"></i> -->
              <ion-icon name="file-tray-stacked"></ion-icon>
              <p>
                 Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/master_inventory.php?page=MasterInventory" 
                    class="nav-link <?php echo $MasterInventoryActive ?>">
                  <ion-icon name="bag-sharp"></ion-icon>
                  <p>Master Inventory Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/master_produk.php?page=MasterProduk" 
                    class="nav-link <?php echo $MasterProdukActive ?>">
                    <ion-icon name="bag-sharp"></ion-icon>
                  <p>Master Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/master_customer.php?page=MasterCustomer" 
                    class="nav-link <?php echo $MasterCustomerActive ?>">
                  <ion-icon name="person-add-sharp"></ion-icon>
                  <p>Master Customer</p>
                </a>
              </li>
            </ul>
          </li>
<!--------------------- MASTER TRANSAKSI ------------------------>
          <li class="nav-header">Master Transaksi</li>
          <li class="nav-item has-treeview <?php echo $activeMT1 ?>">
            <a href="#" class="nav-link <?php echo $activeMT2 ?>">
            <ion-icon name="server-sharp"></ion-icon>
              <p>
                Master Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/transaksi_produksi.php?page=TransaksiProduksi" 
                    class="nav-link <?php echo $TransaksiProduksiActive ?>">
                  <ion-icon name="swap-horizontal-sharp"></ion-icon>
                  <p>Transaksi Produksi</p>
                </a>
              </li>
            </ul>
          </li>
<!--------------------- MASTER Report ------------------------>
        <li class="nav-header">Master Report</li>
          <li class="nav-item has-treeview <?php echo $activeMR1 ?>">
            <a href="#" class="nav-link <?php echo $activeMR2 ?>">
            <ion-icon name="library-sharp"></ion-icon>
              <p>
                Master Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_penjualan.php?page=LaporanPenjualan" 
                    class="nav-link <?php echo $LaporanPenjualanActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_profit.php?page=LaporanProfit" 
                    class="nav-link <?php echo $LaporanProfitActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Profit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_omset.php?page=LaporanOmset" 
                    class="nav-link <?php echo $LaporanOmsetActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Omset</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_produksi.php?page=LaporanProduksi" 
                    class="nav-link <?php echo $LaporanProduksiActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Produksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_pembatalan.php?page=LaporanPembatalan" 
                    class="nav-link <?php echo $LaporanPembatalanActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Pembatalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>admin/pages/laporan_inventory.php?page=LaporanInventory" 
                    class="nav-link <?php echo $LaporanInventoryActive ?>">
                  <ion-icon name="receipt-sharp"></ion-icon>
                  <p>Laporan Inventory Material</p>
                </a>
              </li>
            </ul>
          </li>
<!--------------------- MASTER ACCOUNT ------------------------>
          <li class="nav-header">Master Account</li>
          <li class="nav-item">
            <a href="<?php echo BASE_URL ?>admin/pages/setting_admin.php" 
                class="nav-link <?php echo $SettingAdminActive ?>">
              <ion-icon name="settings-sharp"></ion-icon>
              <p>
                Settings Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo BASE_URL ?>admin/pages/about.php" 
                class="nav-link <?php echo $AboutActive ?>">
              <ion-icon name="settings-sharp"></ion-icon>
              <p>About</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo BASE_URL ?>admin/action/logout.php" class="nav-link">
              <ion-icon name="power-sharp"></ion-icon>
              <p>
                Log Out
              </p>
            </a>
          </li>
<!------------------------ END SIDEBAR MENU ------------------------------------>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
