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
                           Form Piutang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(). 'piutang/tambah_aksi'; ?>" method="post" role="form">
                                        
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
                                            <label>Piutang Awal</label>
                                            <input class="form-control" id="txt1" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="piutang_awal" maxlength="20" required placeholder="Piutang Awal">
                                        </div>
										
										<div class="form-group">
                                            <label>Jumlah Bayar</label>
                                            <input class="form-control" id="txt2" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="jumlah_bayar" maxlength="20" required placeholder="Jumlah Bayar">
                                        </div>
										
										<div class="form-group">
                                            <label>Sisa Piutang</label>
                                            <input class="form-control" id="txt3" onkeyup="sum();" onkeypress="return isNumberKeyTrue(event)" name="sisa_piutang" maxlength="20" required placeholder="Sisa Piutang">
										</div>
										
										<div class="form-group">
                                            <label>Tanggal Jatuh Tempo</label>
                                            <input class="form-control" type="date"  name="tanggal_jatuh_tempo" required placeholder="Tanggal Jatuh Tempo">
											<input class="form-control" type="hidden" id="txt4" onkeyup="sum();"  name="keterangan" maxlength="20" required placeholder="Keterangan">
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