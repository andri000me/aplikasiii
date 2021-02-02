    <section class="content-header">
      <h1>
        <i class="glyphicon glyphicon-plus"></i>
        TAMBAH DATA PEGAWAI
      </h1>
    </section><br>


 <section class="content">
 <div class="col-lg">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('Welcome/AddDataPegawai'); ?>" method="post">
              
              <div class="box-body">
                <div class="form-group">
                  <label for="inputnip" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputnip" name="nip">
                  </div>
                </div>
                
                          <div class="form-group">
                            <label for="inputgelar_awal" class="col-sm-2 control-label">Gelar Awal</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="inputgelar_awal" name="gelar_awal">
                            </div>
                                  <label for="inputnama" class="col-sm-1 control-label">Nama </label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control" id="inputnama" name="nama">
                                  </div>
                            <label for="inputgelar_awal" class="col-sm-2 control-label">Gelar Akhir</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="inputgelar_akhir" name="gelar_akhir">
                            </div>
                          </div>
                
                <div class="form-group">
                  <label for="inputtempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputtempat_lahir" name="tempat_lahir">
                  </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="agama" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                  <select id="agama" name="agama" class="form-control">
                        <option value="">~Pilih Agama~</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                      </select>
                    </div>
                </div> 
                 <div class="form-group">
                  <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                  <select id="jabatan" name="jabatan" class="form-control">
                        <option value="">~Pilih Jabatan~</option>
                        <option value="Eselon I.a">Eselon I.a</option>
                        <option value="Eselon I.b">Eselon I.b</option>
                        <option value="Eselon  II.a">Eselon II.a</option>
                        <option value="Eselon II.a">Eselon II.a</option>
                        <option value="Eselon III.a">Eselon III.a</option>
                        <option value="Eselon III.b">Eselon </option>
                        <option value="Eselon ">Eselon IV.a</option>
                        <option value="Eselon IV.b">Eselon IV.b</option>
                        <option value="Eselon V.a">Eselon V.a</option>
                        <option value="Eselon V.b">Eselon V.b</option>
                        <option value="Eselon Widyaiswara Utama  ">Eselon Widyaiswara Utama  </option>
                        <option value="Eselon Widyaiswara Utama Madya">Eselon Widyaiswara Utama Madya</option>
                        <option value="Eselon Widyaiswara Utama Muda">Eselon Widyaiswara Utama Muda</option>
                        <option value="Eselon Widyaiswara Utama Pertama">Eselon Widyaiswara Utama Pertama</option>
                        <option value="Eselon Widyaiswara Madya">Eselon Widyaiswara Madya</option>
                        <option value="Eselon Widyaiswara Muda ">Eselon Widyaiswara Muda </option>
                        <option value="Eselon Widyaiswara Pratama">Eselon Widyaiswara Pratama</option>
                        <option value="Eselon Ajun Widyaiswara">Eselon Ajun Widyaiswara</option>
                        <option value="Eselon Ajun Widyaiswara Madya">Eselon Ajun Widyaiswara Madya</option>
                        <option value="Eselon Ajun Widyaiswara Muda">Eselon Ajun Widyaiswara Muda</option>
                      </select>
                    </div>
                </div>    
                <div class="form-group">
                  <label for="pangkat" class="col-sm-2 control-label">Pangkat</label>
                  <div class="col-sm-10">
                  <select id="pangkat" name="pangkat" class="form-control">
                        <option value="">~Pilih Pangkat~</option>
                        <option value="Juru Muda">Juru Muda</option>
                        <option value="Juru Muda Tingkat I">Juru Muda Tingkat I</option>
                        <option value="Juru">Juru</option>
                        <option value="Juru Tingkat I">Juru Tingkat I</option>
                        <option value="Pengatur Muda">Pengatur Muda</option>
                        <option value="Pengatur Muda Tingkat I">Pengatur Muda Tingkat I</option>
                        <option value="Pengatur">Pengatur</option>
                        <option value="Pengatur Tingkat I">Pengatur Tingkat I</option>
                        <option value="Penata Muda">Penata Muda</option>
                        <option value="Penata Muda Tingkat I">Penata Muda Tingkat I</option>
                        <option value="Penata">Penata</option>
                        <option value="Penata Tingkat I">Penata Tingkat I</option>
                      </select>
                    </div>
                </div>    
                <div class="form-group">
                  <label for="unit_bidang" class="col-sm-2 control-label">Unit Bidang</label>
                  <div class="col-sm-10">
                  <select id="unit_bidang" name="unit_bidang" class="form-control">
                        <option value="~Unit Bidang~">~Pilih Unit Bidang~</option>
                        <option value="TU">TU</option>
                        <option value="P2E">P2E</option>
                        <option value="P3KT">P3KT</option>
                        <option value="P3JFA">P3JFA</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="unit_bidang" class="col-sm-2 control-label">Status Pegawai</label>
                  <div class="col-sm-10">
                  <select id="status_pegawai" name="status_pegawai" class="form-control">
                        <option value="~Unit Bidang~">~Pilih Status Pegawai~</option>
                        <option value="PNS">PNS</option>
                        <option value="Honorer">Honorer</option>
                      </select>
                    </div>
                </div>
                               
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="simpan" value="Simpan" data-toggle="modal" data-target="#modal-tambahdata" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </section>