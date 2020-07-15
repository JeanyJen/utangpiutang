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
                           Form Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(). 'penjualan/tambah_aksi'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>No Transaksi</label>
                                            <input class="form-control" name="no_transaksi" maxlength="15" required placeholder="No Transaksi">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Nota</label>
                                            <input class="form-control"  name="no_nota" maxlength="15" required placeholder="No Nota">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Nama Pelanggan</label>
											 <select class="form-control" name="id_pelanggan" required>
                                            <option  value="">Pilih</option>                    
										<?php foreach($get_category1 as $row) { ?>
											<option value="<?php echo $row->id_pelanggan;?>"><?php echo $row->nama_pelanggan;?></option>
										<?php } ?>
										   </select>  
                                        </div>
										
										
										<div class="form-group">
                                            <label>Nama Barang</label>
											 <select class="form-control" name="id_barang" required>
                                            <option  value="">Pilih</option>                    
										<?php foreach($get_category as $row) { ?>
											<option value="<?php echo $row->id_barang;?>"><?php echo $row->nama_barang;?></option>
										<?php } ?>
										   </select>  
                                        </div>
										
										
										
										<div class="form-group">
                                            <label>Harga Satuan</label>
                                            <input class="form-control" id="txt1" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="harga_satuan" maxlength="20" required placeholder="Harga Satuan">
                                        </div>
										
										<div class="form-group">
                                            <label>Jumlah Barang</label>
                                            <input class="form-control" id="txt2" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="jumlah_barang" maxlength="15" required placeholder="Jumlah Barang">
                                        </div>
										
										<div class="form-group">
                                            <label>Jumlah Harga</label>
                                            <input class="form-control" id="txt3" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="jumlah_harga" maxlength="20" required placeholder="Jumlah Harga">
										</div>
										
										<div class="form-group">
                                            <label>Tanggal Penjualan</label>
                                            <input class="form-control" type="date"  name="tanggal_penjualan" required placeholder="Tanggal Penjualan">
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
	
	
	<script>
function sum() {
	
      var txtFirstNumberValue = document.getElementById('txt1').value;
	  var txtTigaNumberValue = document.getElementById('txt2').value;
      var result =parseInt(txtFirstNumberValue)* parseInt(txtTigaNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
	  
	  
	 
}

</script>