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
                             View Pelanggan
                        </div>
                        <div class="panel-body">
						<a href="<?php echo base_url() ?>pelanggan/tambah" class="btn btn-info btn-sm">Tambah Data Baru</a>
                            <br>
							<p align="center"><?php echo $this->session->flashdata('msg') ?></p>
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>No Whatsapp</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

				 <?php 
				 $this->load->helper('nominal');
		$no = 1;
		foreach($pelanggan as $u){ 
		?>
             
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
			                                 <td><?php echo $u->nama_pelanggan ?></td>
                                            <td><?php echo $u->no_wa_hp ?></td>
											<td><?php echo $u->alamat ?></td>
                                         <td>
										 <a href="<?=base_url('pelanggan/edit/'.$u->id_pelanggan)?>"  class="fa fa-fw fa-pencil"></a> &nbsp;
										<a href="<?=base_url('pelanggan/hapus/'.$u->id_pelanggan)?>" onclick="return konfirmasi()" class="fa fa-fw fa-bitbucket"></a>
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
