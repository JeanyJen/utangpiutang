<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Form Edit Barang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php  foreach($barang as $u){ ?>
                                    <form action="<?php echo base_url(). 'barang/update'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>Nama Barang</label>
											<input class="form-control" type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
                                            <input class="form-control" name="nama_barang" maxlength="30" required value="<?php echo $u->nama_barang ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jumlah</label>
											<input class="form-control" type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
                                            <input class="form-control" onkeypress="return isNumberKeyTrue(event)" name="jumlah" maxlength="15" required value="<?php echo $u->jumlah ?>">
                                        </div>
                                        
										
										<div class="form-group">
                                            <label>Harga Satuan</label>
											<input class="form-control" type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
                                            <input class="form-control" onkeypress="return isNumberKeyTrue(event)" name="harga_satuan" maxlength="20" required value="<?php echo $u->harga_satuan ?>">
                                        </div>
                                        
			
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
								<?php } ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                 
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			</div>
			
			<script>
		 function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if ((charCode < 65) || (charCode == 32))
            return false;       
         return true;
      }
	  
//Hanya boleh Diisi dengan Dengan Angka
  function isNumberKeyTrue(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 65)
            return false;       
         return true;
      }
	</script>