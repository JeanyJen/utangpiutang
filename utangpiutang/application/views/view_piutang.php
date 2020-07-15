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
                             View Piutang
                        </div>
                        <div class="panel-body">
						<a href="<?php echo base_url() ?>piutang/tambah" class="btn btn-info btn-sm">Tambah Data Baru</a>
                            <br>
							<p align="center"><?php echo $this->session->flashdata('msg') ?></p>
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Jatuh Tempo</th>
                                            <th>No Transaksi</th>
                                            <th>No Nota</th>
											 <th>Nama Pelanggan</th>
											 <th>Nama Barang</th>
											<th>Piutang Awal</th>
											<th>Jumlah Bayar</th>
											<th>Sisa Piutang</th>
											<th>Keterangan</th>
											<th>Kirim Whatsapp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

				 <?php 
				 $this->load->helper('nominal');
		$no = 1;
		foreach($piutang as $u){ 
		?>
             
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
			                                 <td><?php echo $u->tanggal_jatuh_tempo ?></td>
                                            <td><?php echo $u->no_transaksi ?></td>
											<td><?php echo $u->no_nota ?></td>
											<td><?php echo $u->nama_pelanggan ?></td>
											<td><?php echo $u->nama_barang ?></td>
											<td>Rp.<?php echo nominal ($u->piutang_awal) ?></td>
											<td>Rp.<?php echo nominal ($u->jumlah_bayar) ?></td>
											<td>Rp.<?php echo nominal ($u->sisa_piutang) ?></td>
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
			    <a href="https://api.whatsapp.com/send?phone=<?php echo $u->no_wa_hp ?>&text=Kepada <?php echo $u->nama_pelanggan ?> alamat <?php echo $u->alamat ?> bahwa piutang anda sebesar Rp. <?php echo nominal ($u->piutang_awal) ?> sudah anda bayar Rp.<?php echo nominal ($u->jumlah_bayar) ?> sisa piutang anda Rp.<?php echo nominal ($u->sisa_piutang) ?> dengan status <?php $hasil=$u->keterangan ?>
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
			?> tanggal jatuh tempo <?php echo $u->tanggal_jatuh_tempo ?>%20" target="_blank"><img src="https://lh3.googleusercontent.com/-N23V4qsFKs8/WMV9mGK5x5I/AAAAAAAAAPQ/BcC6qzLzJtcqKUWAX5TXX8KxuwDX5JXAgCLcB/h90/Button%2BChat%2Bvia%2BWhatsapp.png" style="max-width:60%;" /></a>
			     
			    </td>
										 <td>
										 <a href="<?=base_url('piutang/edit/'.$u->id_piutang)?>"  class="fa fa-fw fa-pencil"></a> &nbsp;
										<a href="<?=base_url('piutang/hapus/'.$u->id_piutang)?>" onclick="return konfirmasi()" class="fa fa-fw fa-bitbucket"></a>
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
