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
                           Form Edit Hutang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php  foreach($hutang as $u){ ?>
                                    <form action="<?php echo base_url(). 'hutang/update'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>No Transaksi</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control" name="no_transaksi" maxlength="15" required value="<?php echo $u->no_transaksi?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Faktur</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control"  name="no_faktur" maxlength="15" required value="<?php echo $u->no_faktur?>">
                                        </div>
                                        
										
										<div class="form-group">
                                            <label>Tanggal Transaksi</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control" type="date"  name="tanggal_transaksi" required value="<?php echo $u->tanggal_transaksi?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Nama Supplier</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
											 <select class="form-control" name="id_supplier" required>
                                            <option  value="<?php echo $u->id_supplier?>"><?php echo $u->nama_supplier?></option>                    
										<?php foreach($get_category as $row) { ?>
											<option value="<?php echo $row->id_supplier;?>"><?php echo $row->nama_supplier;?></option>
										<?php } ?>
										   </select>  
                                        </div>
										
										<div class="form-group">
                                            <label>Hutang</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control" id="txt1" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="hutang" maxlength="20" required value="<?php echo $u->hutang?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Bayar</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control" id="txt2" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="bayar" maxlength="20" required value="<?php echo $u->bayar?>">
										</div>
										
										<div class="form-group">
                                            <label>Sisa Bayar</label>
											<input class="form-control" type="hidden" name="id_hutang" value="<?php echo $u->id_hutang?>">
                                            <input class="form-control" id="txt3" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="sisa_bayar" maxlength="20" required value="<?php echo $u->sisa_bayar?>">
                                            <input type="hidden"  class="form-control" id="txt4" onkeyup="sum();"  name="keterangan" maxlength="15" required value="<?php echo $u->keterangan?>">
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
	
	
	<script>
function sum() {
	
      var txtFirstNumberValue = document.getElementById('txt1').value;
	   var txtTigaNumberValue = document.getElementById('txt2').value;
      var result =parseInt(txtFirstNumberValue)- parseInt(txtTigaNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
	  
	  var txtFirstNumberValue = document.getElementById('txt1').value;
	   var txtTigaNumberValue = document.getElementById('txt2').value;
      var result =parseInt(txtFirstNumberValue)- parseInt(txtTigaNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt4').value = result;
      }
	  
	  
	 
}

</script>