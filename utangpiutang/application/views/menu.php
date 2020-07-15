         <?php //ROLE ADMIN ?> 
<?php  $h=$this->session->userdata('level'); ?>
<?php if($h=='Admin'){ ?>
		 <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="<?php echo base_url('dashboard/index');?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-laptop"></i>Data Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('barang/index');?>">Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('supplier/index');?>">Supplier</a>
                            </li>
							<li>
                                <a href="<?php echo base_url('pelanggan/index');?>">Pelanggan</a>
                            </li>
							<li>
                                <a href="<?php echo base_url('user/index');?>">User</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-edit"></i>Data Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level1">
                            <li>
                                <a href="<?php echo base_url('pembelian/index');?>">Pembelian</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('penjualan/index');?>">Penjualan</a>
                            </li>
							<li>
                                <a href="<?php echo base_url('hutang/index');?>">Hutang</a>
                            </li>
							<li>
                                <a href="<?php echo base_url('piutang/index');?>">Piutang</a>
                            </li>
                        </ul>
                    </li>
					
                    <li>
                        <a href="<?php echo base_url('piutang/laporan');?>"><i class="fa fa-print"></i>Data Laporan</a>
                    </li>
					<li><a href="<?php echo base_url('dashboard/logout');?>"><i class="fa fa-power-off text-white"></i>Logout</a></li>
                </ul>

            </div>
<?php } ?>


         <?php //ROLE ADMIN ?> 
<?php  $h=$this->session->userdata('level'); ?>
<?php if($h=='Manager'){ ?>
		 <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="<?php echo base_url('dashboard/index');?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    
					
                    <li>
                        <a href="<?php echo base_url('piutang/laporan');?>"><i class="fa fa-print"></i>Data Laporan</a>
                    </li>
					<li><a href="<?php echo base_url('dashboard/logout');?>"><i class="fa fa-power-off text-white"></i>Logout</a></li>
                </ul>

            </div>
<?php } ?>