<li class="treeview">
          <a href="<?= base_url('dashboard') ?>">
            <i class="fa fa-files-o"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
        <li class="treeview <?php
        $userclass = $this->session->userdata('lvl');
         if($userclass==1){
          echo "";
         }elseif($userclass == 2){
          echo "hidden";
         }else{
          echo "";
         }
        ?>">
          <a href="<?= base_url('Datapasien') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Data Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>
        <li class="treeview <?php
        $userclass = $this->session->userdata('lvl');
         if($userclass==1){
          echo "hidden";
         }elseif($userclass == 2){
          echo "hidden";
         }else{
          echo "";
         }
        ?>">
          <a href="<?= base_url('Transaksi') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview <?php
        $userclass = $this->session->userdata('lvl');
         if($userclass==1){
          echo "hidden";
         }elseif($userclass == 2){
          echo "";
         }else{
          echo "";
         }
        ?>">
          <a href="<?= base_url('Obat') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Data Obat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

           </li>
        <li class="treeview <?php
        $userclass = $this->session->userdata('lvl');
         if($userclass==1){
          echo "hidden";
         }elseif($userclass == 2){
          echo "";
         }else{
          echo "";
         }
        ?>">
          <a href="<?= base_url('Rekammedis') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Data Rekam Medis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>