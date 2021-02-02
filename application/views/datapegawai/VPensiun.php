	<section class="content-header">
      <h1>
        <i class="fa fa-book"></i>
        DATA PENSIUN
      </h1>
    </section><br>
<!-- templet -->
<!-- /.row -->
<section class="content">
<div class="box">
  <div class="col-xs">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Cuti</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table colspan="2" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NIP</th>
					<th>Nama</th>
					<th>Tanggal <br> Pensiun</th>
					<th>Umur</th>
					<th>Masa Kerja</th>
					<th></th>
                </tr>
                </thead>
                               <?php
					if(!empty($DataPegawai))
					{
						foreach($DataPegawai as $ReadDS)
						{
					?>
					<tr>
						<td><?php echo $ReadDS->nip; ?></td>
						<td><?php echo $ReadDS->gelar_awal,
						" ",		   $ReadDS->nama,
						" ",		   $ReadDS->gelar_akhir; ?></td>
						<td><?php
							$tgllahir = $ReadDS-> nip;
							$thn = substr($tgllahir, 0,4);
							$bln = substr($tgllahir, 4,2);
							$tgl = substr($tgllahir, 6,2);

							$tglhr = $tgl;
							$jarak = new datetime;
							$umur = 58+($thn) ;
							echo $tgl,"-",$bln,"-",$umur;
							?>
						</td>
						<td><?php
						$nip=$ReadDS->nip;
						$tgl= substr($nip, 0,8);
						$birdth = new Datetime($tgl);
						$today = new DateTime('today');
						$y = $today->diff($birdth)->y;
						$m = $today->diff($birdth)->m;

						echo $y, " Tahun" ;
							?>
						</td>

						<!-- Masakerja -->
						<td>
							<?php
						$pensiun = 58 ;
						$nip=$ReadDS->nip;
						$tgl= substr($nip, 0,8);
						$birdth = new Datetime($tgl);
						$today = new DateTime('today');
						$y = $today->diff($birdth)->y;
						$m = $today->diff($birdth)->m;
						$masakerja = '58'-($y);

						echo $masakerja, " Tahun"  ;
							?>
						</td>
						<td>
							<a href="<?php echo site_url('Welcome/DetailPegawai/'.$ReadDS->nip.'/view') ?>" class="btn btn-success">Detail</a>
						</td>
					</tr>

					<?php		
						}
					}
					?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
  </section>
      <!-- /.row -->
  

