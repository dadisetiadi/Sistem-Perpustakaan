
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Laporan Data Peminjaman Buku</h4>
                        </div>
						
						
						
                        <div class="panel-body">
						<div class="row">
	<div class="col-md-12">
	 <div class="content-panel">
	 
	 
	 	<table >
        <tr><td>
            LAPORAN PERBULAN DAN PERTAHUN
        </td></tr>
        <tr>
            <td width="50%">
<form action="page/laporan/export_laporan_transaksi_excel.php" method="post">
	<div class="row form-group">

		<div class="col-md-5">
		<select class="form-control " name="bln">
							
							
    						<option value="1" selected="">January</option>
    						<option value="2">February</option>
    						<option value="3">March</option>
    						<option value="4">April</option>
    						<option value="5">May</option>
    						<option value="6">June</option>
    						<option value="7">July</option>
    						<option value="8">August</option>
    						<option value="9">September</option>
    						<option value="10">October</option>
    						<option value="11">November</option>
    						<option value="12">December</option>
        			</select>
        		</div>
        		<div class="col-md-3">
        		<?php
$now=date('Y');
echo "<select name='thn' class='form-control'>";
for ($a=2018;$a<=$now;$a++)
{
     echo "<option value='$a'>$a</option>";
}
echo "</select>";
?>
</div>
        
	<input type="submit" class="" name="submit" value="Export to Excel">
	</div>
	</form>
	
	
	<form id="Myform">
    <div class="row form-group">

        <div class="col-md-5">
        <select class="form-control " name="bln">
                            
                            <option value="all" selected="">ALL</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                    </select>
                </div>
                <div class="col-md-3">
                <?php
$now=date('Y');
echo "<select name='thn' class='form-control'>";
for ($a=2018;$a<=$now;$a++)
{
     echo "<option value='$a'>$a</option>";
}
echo "</select>";
?>
</div>


    <input type="submit" class="" name="submit2"  value="Tampilkan">
    </div>
    </form>
    </td>
    
          
   </table>
	 
	 
<div class="tampung">
                            <div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nis</th>
                                            <th>Nama Peminjam</th>
											<th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Terlambat</th>
											
											<th>Status</th>
											
                                        </tr>
                                    </thead>
									
						<tbody>
							
						<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tb_transaksi where status='Pinjam'");
									
										while ($data = $sql->fetch_assoc()) {
									
									
										
									?>
						
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['judul']; ?></td>
							<td><?php echo $data['nis']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tanggal_pinjam']; ?></td>
							<td><?php echo $data['tanggal_kembali']; ?></td>
							<td>
								<?php 
								
								$denda = 1000;
								$tanggal_dateline2 = $data['tanggal_kembali'];
								$tanggal_kembali = date('d-m-Y');
								
								$lambat = terlambat($tanggal_dateline2, $tanggal_kembali);
								$denda1 = $lambat * $denda;
								
								if ($lambat>0) {
									echo "
									
									<font color='red'>$lambat hari<br>(Rp $denda1)</font>
									";
								}else{
									echo $lambat." Hari";
								}
								
								?>
								
							</td>
							<td><?php echo $data['status']; ?></td>
					
							
							
							
						</td>
						</tr>
									<?php }
									
									?>

						</tbody>
						</table>
						</div> 
						</div>
						</section>
						</section>