<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="<?php echo base_url(); ?>admin/dashboard">SIAMI IAIN KDR</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo base_url(); ?>admin/dashboard">SIAMI</a>
      </div>
      <ul class="sidebar-menu">

        <?php if ($this->session->userdata('level_user') == "admin"): ?>
          <!-- MENU ADMIN -->
          <li class="menu-header">Dashboard</li>
            <li class="<?php echo $this->uri->segment(2) == 'dashboard' &&  $this->uri->segment(3) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard"><i class="fas fa-desktop"></i> <span>Dashboard</span></a></li>
               <!-- Pengawasan -->
            <li class="menu-header">Pengawasan</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'pengawasan'  ? 'active' : ''; ?>">
               <li class="<?php echo $this->uri->segment(2) == 'pengawasan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/pengawasan"><i class="fa fa-window-restore" aria-hidden="true"></i> <span>Proses AMI</span></a></li>
               <li class="<?php echo $this->uri->segment(2) == 'dokumentasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/dokumentasi"><i class="fas fa-camera-retro"></i> <span>Foto Kegiatan</span></a></li>
            </li>

            <!-- Users -->
            <li class="menu-header">Users</li>
             <li class="dropdown <?php echo $this->uri->segment(2) == 'users'  ? 'active' : ''; ?>">
               <li class="<?php echo $this->uri->segment(2) == 'admin' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/admin"><i class="fa fa-users"></i> <span>Admin</span></a></li>
               <li class="<?php echo $this->uri->segment(2) == 'auditor' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/auditor"><i class="fas fa-user-secret"></i> <span>Auditor</span></a></li>
               <li class="<?php echo $this->uri->segment(2) == 'unit' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/unit"><i class="fas fa-user-astronaut"></i> <span>Auditee</span></a></li>
            </li>

            <!-- AMI -->
            <li class="menu-header">AMI</li>
               <li class="dropdown <?php echo $this->uri->segment(2) == 'ami'  ? 'active' : ''; ?>">
                 <li class="<?php echo $this->uri->segment(2) == 'ami' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/ami"><i class="fas fa-id-card-alt"></i> <span>AMI</span></a></li>
                 <li class="<?php echo $this->uri->segment(2) == 'standart' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/standart"><i class="fas fa-vote-yea"></i> <span>Standart</span></a></li>
                  <li class="<?php echo $this->uri->segment(2) == 'kts' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/kts"><i class="fas fa-square-root-alt"></i> <span>Temuan</span></a></li>
                   <li class="<?php echo $this->uri->segment(2) == 'periode' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/periode"><i class="fas fa-stopwatch"></i> <span>Periode</span></a></li>
                   <li class="<?php echo $this->uri->segment(2) == 'mekanisme' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/mekanisme"><i class="fab fa-stack-overflow"></i> <span>Mekanisme</span></a></li>
              </li>

              <!-- Laporan -->
              <li class="menu-header">Laporan</li>
               <li class="dropdown <?php echo $this->uri->segment(2) == 'laporan'  ? 'active' : ''; ?>">
                 <li class="<?php echo $this->uri->segment(2) == 'temuan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/temuan"><i class="fas fa-book-reader"></i> <span>Rekap Temuan</span></a></li>
                 <li class="<?php echo $this->uri->segment(2) == 'rangking' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/rangking"><i class="fas fa-memory"></i> <span>Rangking</span></a></li>
              </li>
                <!-- Master Data -->
              <li class="menu-header">Master Data</li>
               <li class="dropdown <?php echo $this->uri->segment(2) == 'master'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                  <li class="<?php echo $this->uri->segment(3) == 'unit' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/master/unit">Unit</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'tahap' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/master/tahap">Tahapan</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'urkts' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/master/urkts">Uraian KTS</a></li>
                   <li class="<?php echo $this->uri->segment(3) == 'urperbaikan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/master/urperbaikan">Uraian Perbaikan</a></li>
                </ul>
              </li>
              <li class="<?php echo $this->uri->segment(2) == 'format' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/format"><i class="far fa-newspaper"></i> <span>Format Cetak</span></a></li>

               <!-- Website -->
              <li class="menu-header">Website </li>
           
             <li class="dropdown <?php echo $this->uri->segment(2) == 'homepage'  ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-warehouse"></i><span>HomePage</span></a>
                <ul class="dropdown-menu">
                  <li class="<?php echo $this->uri->segment(3) == 'homepage' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/homepage/hero">Hero</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'service' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/homepage/service">Service</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'work' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/homepage/work">How It Work</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'struktur' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/homepage/struktur">Team</a></li>
                  <li class="<?php echo $this->uri->segment(3) == 'profile' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/homepage/profile">Profile</a></li>

                </ul>
              </li>
              <li class="<?php echo $this->uri->segment(2) == 'visi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/visi"><i class="fas fa-torah"></i> <span>Visi & Misi</span></a></li>
              <li class="<?php echo $this->uri->segment(2) == 'kategori' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/kategori"><i class="fas fa-certificate"></i> <span>Kategory News</span></a></li>
                          
             <li class="<?php echo $this->uri->segment(2) == 'gallery' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/gallery"><i class="fas fa-images"></i> <span>Gallery</span></a></li>
             <li class="<?php echo $this->uri->segment(2) == 'news' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/news"><i class="far fa-newspaper"></i> <span>News</span></a></li>
              <li class="<?php echo $this->uri->segment(2) == 'faq' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/faq"><i class="fas fa-torah"></i> <span>FAQ</span></a></li>
        <?php endif ?>


        <?php if ($this->session->userdata('level_user') == "auditor"): ?>
            <!-- MENU AUDITOR -->
            <li class="menu-header">Dashboard</li>
              <li class="<?php echo $this->uri->segment(2) == 'dashboard' &&  $this->uri->segment(3) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditor/dashboard"><i class="fas fa-desktop"></i> <span>Dashboard</span></a></li>
                 <!-- Pengawasan -->
              <li class="menu-header">Pengawasan</li>
               <li class="dropdown <?php echo $this->uri->segment(2) == 'pengawasan'  ? 'active' : ''; ?>">
               <li class="<?php echo $this->uri->segment(2) == 'pengawasan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditor/pengawasan"><i class="fa fa-window-restore" aria-hidden="true"></i> <span>AMI</span></a></li>
               <li class="<?php echo $this->uri->segment(2) == 'dokumentasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditor/dokumentasi"><i class="fas fa-camera-retro"></i> <span>Foto Kegiatan</span></a></li>
              </li>
        <?php endif ?>

        <?php if ($this->session->userdata('level_user') == "auditee"): ?>
            <!-- MENU AUDITEE -->
            <li class="menu-header">Dashboard</li>
              <li class="<?php echo $this->uri->segment(2) == 'dashboard' &&  $this->uri->segment(3) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditee/dashboard"><i class="fas fa-desktop"></i> <span>Dashboard</span></a></li>
                 <!-- Pengawasan -->
              <li class="menu-header">Pengawasan</li>
               <li class="dropdown <?php echo $this->uri->segment(2) == 'pengawasan'  ? 'active' : ''; ?>">
               <li class="<?php echo $this->uri->segment(2) == 'pengawasan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditee/pengawasan"><i class="fa fa-window-restore" aria-hidden="true"></i> <span>AMI</span></a></li>
               <li class="<?php echo $this->uri->segment(2) == 'dokumentasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auditee/dokumentasi"><i class="fas fa-camera-retro"></i> <span>Foto Kegiatan</span></a></li>
              </li>
        <?php endif ?>
        
        <!--     <li class="menu-header">System Setting</li>
        <li class="<?php echo $this->uri->segment(1) == 'pengaturan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/pengaturan"><i class="fas fa-wrench"></i> <span>Pengaturan</span></a></li> -->

        <?php
          
          // // Select all entries from the menu table
          // $result=$this->dbpdo->fetch_custom("select sys_menu.*,sys_menu_role.read_act,sys_menu_role.insert_act,sys_menu_role.update_act,sys_menu_role.delete_act,sys_menu_role.group_id from sys_menu
          // left join sys_menu_role on sys_menu.id=sys_menu_role.id_menu
          // where sys_menu.tampil='Y' AND sys_menu_role.group_id=? and sys_menu_role.read_act=? ORDER BY parent, urutan_menu",array('sys_menu_role.group_id'=>$this->session->userdata('id_group'),'sys_menu_role.read_act'=>'Y'));

          // // var_dump($result);
          //   // Create a multidimensional array to list items and parents
          //   $menu = array(
          //       'items' => array(),
          //       'parents' => array()
          //   );
          //   // Builds the array lists with data from the menu table
          //   foreach ($result as $items) {

          //     $items = toArray($items);

          //         // Creates entry into items array with current menu item id ie.
          //       $menu['items'][$items['id']] = $items;
          //       // Creates entry into parents array. Parents array contains a list of all items with children
          //       $menu['parents'][$items['parent']][] = $items['id'];
          //   }

          //   if(!empty(path_url()[1])){
          //       $aktif=$this->dbpdo->fetch_custom_single("SELECT t1.id, t1.url
          //       ,  CONCAT_WS(',',t1.id, t2.id ,t3.id,t4.id,t5.id) as uri
          //       FROM sys_menu AS t1
          //       LEFT JOIN sys_menu AS t2 ON t1.parent = t2.id
          //       LEFT JOIN sys_menu AS t3 ON t2.parent = t3.id
          //       LEFT JOIN sys_menu AS t4 ON t3.parent = t4.id
          //       LEFT JOIN sys_menu AS t5 ON t4.parent = t5.id
          //       WHERE t1.url = 'admin/".path_url()[1]."'
          //       ORDER BY t1.url, t2.url, t3.url, t4.url");

          //       if(!empty($aktif)){
          //         $uri = $aktif->uri;
          //       }else{
          //         $uri = null;
          //       }

          //       // var_dump(path_url());

          //       $pecah=explode(',',$uri);
          //          // foreach ($menu['parents'][0] as $itemId){
          //          //  var_dump($itemId);
          //          //  // echo $menu['items'][$itemId]['title'];

          //          // }

          //       echo $this->dbpdo->buildMenu("admin/".path_url()[1],0, $menu,$pecah);
          //   }

            

          //show only if user is admin
          if ($this->session->userdata('code')=='adm') {
            ?>
            <li class="menu-header">System Setting</li>
            <li class="<?php echo $this->uri->segment(3) == 'page_menu' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/system/page_menu"><i class="far fa-file-alt"></i> <span>Page Menu</span></a></li>
            <li class="<?php echo $this->uri->segment(3) == 'menu_management' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/system/menu_management"><i class="far fa-file-alt"></i> <span>Menu Management</span></a></li>
            <li class="<?php echo $this->uri->segment(3) == 'group_users' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/system/group_users"><i class="far fa-file-alt"></i> <span>Group User</span></a></li>
            <li class="<?php echo $this->uri->segment(3) == 'user_management' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/system/user_management"><i class="far fa-file-alt"></i> <span>User Management</span></a></li>
            <?php
              }
            ?>
        </ul>
       
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="<?= base_url().'auth/logout' ?>" class="btn btn-danger btn-sm btn-block btn-icon-split">
          <i class="fas fa-power-off"></i> Logout
        </a>
      </div>
    </aside>
  </div>
