<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             View Hutang
                        </div>
                        <div class="panel-body">
						<a href="<?php echo base_url() ?>hutang/tambah" class="btn btn-info btn-sm">Tambah Data Baru</a>
                            <br>
							<p align="center"><?php echo $this->session->flashdata('msg') ?></p>
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Tanggal Transaksi</th>
                                            <th>No Transaksi</th>
                                            <th>No Faktur</th>
                                            <th>Nama Supplier</th>
											<th>Hutang</th>
											<th>Bayar</th>
											<th>Sisa Bayar</th>
											<th>Keterangan</th>
											<th>Kirim Whatsapp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

				 <?php 
				 $this->load->helper('nominal');
		$no = 1;
		foreach($hutang as $u){ 
		?>
             
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
			                                 <td><?php echo $u->tanggal_transaksi ?></td>
                                            <td><?php echo $u->no_transaksi ?></td>
											<td><?php echo $u->no_faktur ?></td>
											<td><?php echo $u->nama_supplier ?></td>
											<td>Rp.<?php echo nominal ($u->hutang) ?></td>
											<td>Rp.<?php echo nominal ($u->
											bayar) ?></td>
											<td>Rp.<?php echo nominal ($u->sisa_bayar) ?></td>
											<td><?php $hasil=$u->keterangan ?>
			   <?php   if ($hasil == "") {
                echo "";
            } else if ($hasil <= 0) {
                echo 'Lunas';
            } else if ($hasil >= 0 && $hasil <= 0) {
               echo 'Lunas';
            } else if ($hasil >= 1 && $hasil <= 1000000) {
                echo 'Belum Lunas';
            } else if ($hasil >= 2000000 && $hasil <=100000000) {
                echo 'Belum Lunas';
            } 
			?></td>
			
			 <td>
			    <a href="https://api.whatsapp.com/send?phone=<?php echo $u->no_wa_hp ?>&text=Kepada <?php echo $u->nama_supplier ?> alamat <?php echo $u->alamat ?> bahwa hutang kami sebesar Rp. <?php echo nominal ($u->hutang) ?> sudah kami bayar Rp.<?php echo nominal ($u->bayar) ?> sisa hutang kami Rp.<?php echo nominal ($u->sisa_bayar) ?> dengan status <?php $hasil=$u->keterangan ?>
			   <?php   if ($hasil == "") {
                echo "";
            } else if ($hasil <= 0) {
                echo 'Lunas';
            } else if ($hasil >= 0 && $hasil <= 0) {
               echo 'Lunas';
            } else if ($hasil >= 1 && $hasil <= 1000000) {
                echo 'Belum Lunas';
            } else if ($hasil >= 2000000 && $hasil <=100000000) {
                echo 'Belum Lunas';
            } 
			?> tanggal transaksi <?php echo $u->tanggal_transaksi ?>%20" target="_blank"><img src="https://lh3.googleusercontent.com/-N23V4qsFKs8/WMV9mGK5x5I/AAAAAAAAAPQ/BcC6qzLzJtcqKUWAX5TXX8KxuwDX5JXAgCLcB/h90/Button%2BChat%2Bvia%2BWhatsapp.png" style="max-width:60%;" /></a>
			     
			    </td>
                                         <td>
										 <a href="<?=base_url('hutang/edit/'.$u->id_hutang)?>"  class="fa fa-fw fa-pencil"></a> &nbsp;
										<a href="<?=base_url('hutang/hapus/'.$u->id_hutang)?>" onclick="return konfirmasi()" class="fa fa-fw fa-bitbucket"></a>
										</td>
											</tr>
											<?php } ?>
                                        
                      
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
              
            
           
        </div>
               <footer><p>&copy; Copy <?php echo date('Y'); ?> <a href="http://localhost/skripsi2021-2022/utangpiutang/">implementasi Sistem informasi utang piutang pada PT Sumber Wisesa Indolestari</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/hybrid/assets/js/custom-scripts.js"></script>
    
   <script type="text/javascript" language="JavaScript">
function konfirmasi(){
tanya = confirm("Anda yakin akan hapus Data ini?");
if (tanya == true) return true;
else return false;
}											
</script>
	
</body>
</html>
