 <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        
						<ol class="breadcrumb">
  <li><a href="<?php echo base_url('dashboard/index');?>">Dashboard <?php echo $this->session->userdata("level"); ?></a></li>
  <li><a href="#"></a></li>
</ol>
                    </div>
                </div>
				
				
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green green">
                            <div class="panel-left pull-left green">
                                <i class="fa fa-eye fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
								<h3><?php 
	
		foreach($pembelian1 as $u){ 
		?><?php echo $u->pembelian ?><?php }?></h3>
                               <strong> Pembelian</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-shopping-cart fa-5x"></i>
								</div>
                                
                            <div class="panel-right">
							<h3><?php 
	
		foreach($penjualan1 as $u){ 
		?><?php echo $u->penjualan ?><?php }?> </h3>
                               <strong>Penjualan</strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-left pull-left red">
                                <i class="fa fa fa-comments fa-5x"></i>
                               
                            </div>
                            <div class="panel-right">
							 <h3><?php 
	
		foreach($hutang1 as $u){ 
		?><?php echo $u->hutang ?><?php }?> </h3>
                               <strong> Hutang </strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-left pull-left brown">
                                <i class="fa fa-users fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
							<h3><?php 
	
		foreach($piutang1 as $u){ 
		?><?php echo $u->piutang ?><?php }?> </h3>
                             <strong>Piutang</strong>

                            </div>
                        </div>
                    </div>
                </div>
				</div>
				
			 
			 
				
			

				
 
				
	   
				
				
