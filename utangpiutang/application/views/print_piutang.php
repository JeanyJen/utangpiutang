	
<html>
<head>
  <title>Laporan Pembayaran</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 400px;
	  font-size: 10pt;
	  font-style: Times new roman;
    }
	
	 table td {
      word-wrap:break-word;
      width:28%;
    }
    
	
  </style>
  
</head>
<body>
<div align="left"><img src="<?=base_url()?>images/kop.PNG"   alt="User Image"></div>
<hr>
<br>
<div align="center"><h2>Piutang</h2></div>
<div align="left">

</div>

		<table border="1" cellpadding="8">	
			<tr align="center">
			             <th>Tanggal Jatuh Tempo</th>
						<th>No Transaksi</th>
						<th>No Nota</th>
						<th>Nama Pelangga</th>
						<th>Nama Barang</th>
						<th>Piutang Awal</th>
						<th>Jumlah Bayar</th>
						<th>Sisa Piutang</th>
						<th>Keterangan</th>
						
			</tr>
		<?php
       	 $this->load->helper('nominal');
         if(!empty($piutang)){
    	$no = 1;
		
    	foreach($piutang as $u){
		 $tanggal = date('d-m-Y', strtotime($u->tanggal_jatuh_tempo));			
		?>		
			
			<tr align="center">
			 
			   <td><?php echo $tanggal ?></td>
				<td><?php echo $u->no_transaksi ?></td>
				<td><?php echo $u->no_nota ?></td>
			   <td><?php echo $u->nama_pelanggan ?></td>
				<td><?php echo $u->nama_barang ?></td>
			  <td><?php echo nominal ($u->piutang_awal) ?></td>
			 <td><?php echo nominal ($u->jumlah_bayar) ?></td>
			 <td><?php echo nominal ($u->sisa_piutang) ?></td>
			 <td><?php echo $u->keterangan ?></td>
			</tr>
			
			
					
		<?php
        		
			
    	}
    }
	
    ?>
	
	
  </table>
  <br><br>
  <table>
  <tr>
  <td>Manager</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  
  <tr>
  <td><br><br><br>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  </table>
</body>
</html>
