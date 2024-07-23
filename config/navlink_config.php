<!------------ Navlink Sidebar Controller (Active/Non Active) --------->
<?php
$page = @$_GET['page'];
// Fungsi untuk mengatur nilai default
function setMenuDefault() {
        return [
            'MasterInventoryActive' => '',
            'MasterProdukActive' => '',
            'MasterCustomerActive' => '',
            'TransaksiProduksiActive' => '',
            'LaporanPenjualanActive' => '',
            'LaporanProfitActive' => '',
            'LaporanOmsetActive' => '',
            'LaporanProduksiActive' => '',
            'LaporanPembatalanActive' => '',
            'LaporanInventoryActive' => ''
        ];
    }
// Set nilai default
$menuStatus = setMenuDefault();

//-------------------------- SWITCH CASE START -------------------------// 
switch(TRUE){
//-------------------------- DASHBOARD --------------------------------//
    case ($page == 'Dashboard') :
            $Dashboard = 'active';
    break;
//-------------------------- MASTER SETTINGS --------------------------//
    case ($page == 'MasterInventory') :
            $activeMS1 = 'menu-open';
            $activeMS2 = 'active';
            $MasterInventoryActive = 'active';
    break;

    case ($page == 'MasterProduk') :
            $activeMS1 = 'menu-open';
            $activeMS2 = 'active';
            $MasterProdukActive = 'active';
    break;

    case ($page == 'MasterCustomer') :
            $activeMS1 = 'menu-open';
            $activeMS2 = 'active';
            $MasterCustomerActive = 'active';
    break;
//-------------------------- MASTER TRANSAKSI ------------------------//
    case ($page == 'TransaksiProduksi') :
            $activeMT1 = 'menu-open';
            $activeMT2 = 'active';
            $TransaksiProduksiActive = 'active';
    break;
//-------------------------- MASTER REPORT --------------------------//
    case ($page == 'LaporanPenjualan') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanPenjualanActive = 'active';
    break;

    case ($page == 'LaporanProfit') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanProfitActive = 'active';
    break;

    case ($page == 'LaporanOmset') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanOmsetActive = 'active';
    break;
    case ($page == 'LaporanProduksi') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanProduksiActive = 'active';
    break;
    case ($page == 'LaporanPembatalan') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanPembatalanActive = 'active';
    break;
    case ($page == 'LaporanInventory') :
            $activeMR1 = 'menu-open';
            $activeMR2 = 'active';
            $LaporanInventoryActive = 'active';
    break;
//-------------------------- MASTER ACCOUNT --------------------------//
    case ($page == 'SettingAdmin') :
        $activeMA2 = 'active';
        $SettingAdminActive = 'active';
    break;
    case ($page == 'About') :
            $activeMA2 = 'active';
            $AboutActive = 'active';
    break;
//----------------------------- DEFAULT -----------------------------//
    default:
        $menuStatus = setMenuDefault();
    break;
//------------------------ END SWITCH CASE --------------------------//
    }
?>
<!------------ Navlink Sidebar Controller (Active/Non Active) END ------------->