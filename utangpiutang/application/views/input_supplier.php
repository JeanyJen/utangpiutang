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
                           Form Supplier
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(). 'supplier/tambah_aksi'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>Nama Supplier</label>
                                            <input class="form-control" name="nama_supplier" maxlength="30" required placeholder="Nama Supplier">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Whatsapp</label>
                                            <input class="form-control" onkeypress="return isNumberKeyTrue(event)" name="no_wa_hp" maxlength="13" required placeholder="No Whatsapp">
                                        </div>
                                        
										
										<div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" required placeholder="Alamat"></textarea>
                                        </div>
                                        
			
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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