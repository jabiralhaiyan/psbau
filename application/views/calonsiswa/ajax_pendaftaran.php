          <div class="form-group">
            <label for="inputKelompok" class="col-lg-3 control-label">Proses Penerimaan <span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <input class="form-control" name="inputProsesPenerimaan" id="inputProsesPenerimaan" value="<?php echo ($proses ? $proses : ""); ?>" readonly/>
            </div>
          </div>
          <div class="form-group">
            <label for="inputKelompok" class="col-lg-3 control-label">Kelompok <span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <select class="form-control" name="inputKelompok" id="inputKelompok">
                <?php foreach($_kelompok->result() as $row) {
                  if ($kelompok==$row->kelompok)
                    echo '<option selected>'.$row->kelompok.'</option>';
                  else
                    echo '<option>'.$row->kelompok.'</option>';
                } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputTahunMasuk" class="col-lg-3 control-label">Tahun Masuk <span style="color:red;">*</span></label>
            <div class="col-lg-3">
              <select class="form-control" name="inputTahunMasuk" id="inputTahunMasuk">
                <?php foreach($_tahunmasuk->result() as $row) {
                  if ($tahunmasuk==$row->tahunmasuk)
                    echo '<option selected>'.$row->tahunmasuk.'</option>';
                  else
                    echo '<option>'.$row->tahunmasuk.'</option>';
                } ?>
              </select>
            </div>
          </div>