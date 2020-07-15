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
                           Form Edit Pelanggan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php  foreach($pelanggan as $u){ ?>
                                    <form action="<?php echo base_url(). 'pelanggan/update'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>Nama Pelanggan</label>
											<input class="form-control" type="hidden" name="id_pelanggan" value="<?php echo $u->id_pelanggan ?>">
                                            <input class="form-control" name="nama_pelanggan" maxlength="30" required value="<?php echo $u->nama_pelanggan ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Whatsapp</label>
											<input class="form-control" type="hidden" name="id_pelanggan" value="<?php echo $u->id_pelanggan ?>">
                                            <input class="form-control" onkeypress="return isNumberKeyTrue(event)" name="no_wa_hp" maxlength="13" required value="<?php echo $u->no_wa_hp ?>">
                                        </div>
                                        
										
										<div class="form-group">
                                            <label>Alamat</label>
											<input class="form-control" type="hidden" name="id_pelanggan" value="<?php echo $u->id_pelanggan ?>">
                                            <textarea class="form-control" name="alamat" required><?php echo $u->alamat ?></textarea>
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