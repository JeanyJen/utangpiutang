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
                           Form Edit User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php  foreach($user as $u){ ?>
                                    <form action="<?php echo base_url(). 'user/update'; ?>" method="post" role="form">
                                        
                                        <div class="form-group">
                                            <label>Nama User</label>
											<input class="form-control" type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                            <input class="form-control" name="nama_user" maxlength="30" required value="<?php echo $u->nama_user ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Username</label>
											<input class="form-control" type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                            <input class="form-control"  name="username" maxlength="20" required value="<?php echo $u->username ?>">
                                        </div>
                                        
										
										<div class="form-group">
                                            <label>Password</label>
											<input class="form-control" type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                            <input class="form-control"  name="password" maxlength="10" required value="<?php echo $u->password ?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Level</label>
											<input class="form-control" type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                            <select class="form-control"  name="level" required>
											<option value="<?php echo $u->level ?>"><?php echo $u->level ?></option>
											<option value="Admin">Admin</option>
											<option value="Manager">Manager</option>
											</select>
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