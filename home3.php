


 <section class="content-header">
      <h1>
        Dashboard 
      </h1>
    </section>

<marquee><h2>Selamat Datang di Sistem Informasi Perpustakaan SMPN 7 Tegal</marquee></h2>

<br></br>

        <div class="container-fluid">
            <div class="block-header">
                <h>Pilih Menu</h>
            </div>
			<br>
	
         <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>  <?php
                            $koneksi = new mysqli("localhost","root","","db_perpustakaan");
                            $data = mysqli_query($koneksi,"SELECT  COUNT(a.id) as judul FROM tb_buku a ");
                                if (mysqli_num_rows($data) > 0) {
                                    while($dat = mysqli_fetch_array($data)){
                                ?>
                                <div class="stat-digit"><span class="count"><?php echo $dat['judul'];?></span></div>
                                 <?php
                                        }
                                         }else {
                                            echo "0 results";
                                        }

                                        mysqli_close($koneksi);
                                ?>
			  </h3>

              <p>Data Buku</p>
			
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="?page=buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
			  
			  <?php
                            $koneksi = new mysqli("localhost","root","","db_perpustakaan");
                            $data = mysqli_query($koneksi,"SELECT  COUNT(a.id) as username FROM tb_pengguna a ");
                                if (mysqli_num_rows($data) > 0) {
                                    while($dat = mysqli_fetch_array($data)){
                                ?>
                                <div class="stat-digit"><span class="count"><?php echo $dat['username'];?></span></div>
                                 <?php
                                        }
                                         }else {
                                            echo "0 results";
                                        }

                                        mysqli_close($koneksi);
                                ?>
			  
			  </h3>

              <p>Data Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=pengguna" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
			  
			  <?php
                            $koneksi = new mysqli("localhost","root","","db_perpustakaan");
                            $data = mysqli_query($koneksi,"SELECT  COUNT(a.nis) as nama FROM tb_anggota a ");
                                if (mysqli_num_rows($data) > 0) {
                                    while($dat = mysqli_fetch_array($data)){
                                ?>
                                <div class="stat-digit"><span class="count"><?php echo $dat['nama'];?></span></div>
                                 <?php
                                        }
                                         }else {
                                            echo "0 results";
                                        }

                                        mysqli_close($koneksi);
                                ?>
			  
			  </h3>

              <p>Data Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
			  
			  <?php
                            $koneksi = new mysqli("localhost","root","","db_perpustakaan");
                            $data = mysqli_query($koneksi,"SELECT  COUNT(a.id) as judul FROM tb_transaksi a where status='Pinjam' ");
                                if (mysqli_num_rows($data) > 0) {
                                    while($dat = mysqli_fetch_array($data)){
                                ?>
                                <div class="stat-digit"><span class="count"><?php echo $dat['judul'];?></span></div>
                                 <?php
                                        }
                                         }else {
                                            echo "0 results";
                                        }

                                        mysqli_close($koneksi);
                                ?>
			  
			  </h3>

              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
            </div>
            <a href="?page=transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>5</h3>

              <p>Laporan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		
		
		
        <!-- ./col -->
      </div>
      <!-- /.row -->
	  
	  
      <!-- Main row -->

      <!-- /.row (main row) -->
	  
	  
	  

    </section>
    <!-- /.content -->
  </div>