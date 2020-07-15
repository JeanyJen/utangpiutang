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
                                      <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(). 'piutang/cetak'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>Dari Tanggal</label>
                                            <input type="date" class="form-control"  name="tgl_awal" placeholder="Tanggal Awal" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Sampai Tanggal</label>
                                           <input type="date" class="form-control" name="tgl_akhir"   placeholder="Tanggal Akhir" required>
                                        </div>

			
                                        <button type="submit" class="btn btn-primary">Cetak</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                 
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                        </div>
                        <div class="panel-body">
						
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
                                        </tr>
                                    </thead>

				 <?php 
				 $this->load->helper('nominal');
		$no = 1;
		foreach($piutang as $u){ 
		$tanggal = date('d-m-Y', strtotime($u->tanggal_jatuh_tempo));
		?>
             
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
			                                 <td><?php echo $tanggal ?></td>
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
               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
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
