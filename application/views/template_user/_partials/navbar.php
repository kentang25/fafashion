<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
      <ul class="navbar-nav"> 
         <li class="nav-item <?php echo $this->uri->segment(1) == 'home' ? 'active' : ''; ?>">
          <a href="<?= base_url('home') ?>" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(1) == 'profil' ? 'active' : ''; ?>">
          <a href="<?= base_url('profil') ?>" class="nav-link"><i class="far fa-user"></i><span>Data Diri</span></a>
        </li>
        <li class="nav-item dropdown <?php echo $this->uri->segment(1) == 'kinerja' ? 'active' : ''; ?>">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fab fa-galactic-senate"></i><span>Kinerja Bidang</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a href="<?php echo base_url(); ?>kinerja/pendidikan" class="nav-link">Pendidikan</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>kinerja/penelitian" class="nav-link"> Penelitian</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>kinerja/pengabdian" class="nav-link">Pengabdian Masyarakat</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>kinerja/penunjang" class="nav-link">Penunjang</a></li>
          </ul>
        </li>
          <li class="nav-item <?php echo $this->uri->segment(1) == 'kewajiban' ? 'active' : ''; ?>">
            <a href="<?php echo base_url(); ?>kewajiban" class="nav-link"><i class="fas fa-meteor"></i><span>Kewajiban Khusus</span></a>
          </li>

         <?php
         //CEK ASSESOR
         if(cek_assesor($this->session->userdata('code'))){
            ?>
            <li class="nav-item dropdown <?php echo $this->uri->segment(1) == 'assesor' ? 'active' : ''; ?>">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fab fa-galactic-senate"></i><span>Assesor</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="<?php echo base_url(); ?>assesor" class="nav-link"> Penilaian</a></li>
              </ul>
            </li>
            <?php
         }
         ?>
         
        <li class="nav-item dropdown <?php echo $this->uri->segment(1) == 'cetak' ? 'active' : ''; ?>">
          <a href="#" data-toggle="dropdown" class="nav-link has-dropdown "><i class="fa fa-print"></i><span>Cetak</span></a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a href="<?php echo base_url(); ?>cetak/rencana" class="nav-link">Rencana SIAMI</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>cetak/laporan" class="nav-link"> Laporan SIAMI</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>cetak/kesimpulan" class="nav-link">Kesimpulan SIAMI</a></li>
            <!-- <li class="nav-item"><a href="<?php echo base_url(); ?>cetak/lapwajib" class="nav-link">Laporan Kewajiban Khusus</a></li> -->
            <div class="dropdown-divider"></div>
            <li class="nav-item"><a href="<?php echo base_url(); ?>cetak/report" class="nav-link">Data SIAMI Lama</a></li>

          </ul>
        </li>


        
        <li class="nav-item <?php echo $this->uri->segment(1) == 'signature' ? 'active' : ''; ?>">
          <a href="<?= base_url("signature") ?>" class="nav-link"><i class="fa fa-signature"></i><span>Signature / TTD</span></a>
        </li>
        <li class="nav-item <?php echo $this->uri->segment(2) == 'layout_top_navigation' ? 'active' : ''; ?>">
          <a href="<?= base_url("login/logout") ?>" class="nav-link text-danger"><i class="fas fa-power-off"></i><span>Logout</span></a>
        </li>
      </ul>
    </div>
  </nav>
