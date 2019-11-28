<?php $this->load->view('page_header')?>
  <div style="margin-top: 150px;margin-left: 200px;margin-right: 200px">
    <div class="row" style="background-color: white">
      <div class="col-1">
        <div class="tempatThumbnail"></div>
      </div>
      <div class="col">
        
      </div>
      <div class="col-6" style="margin-left: -150px">

        <div class="row">
          <div class="col" style="">
            <p style="font-family: Sunflower; font-style: normal; font-weight: bold; font-size: 36px; line-height: 35px; color: #787878;">namatempat</p>
          </div>
        </div>

        <div class="row">
          <div class="col" style="margin-top: 10px">
            <p style="font-family: Sunflower; font-style: normal; font-weight: normal; font-size: 20px; line-height: 35px; color: #787878;">namatempat</p>
          </div>
        </div>

      </div>  

      <div class="col">
        
        <div class="row" style="margin-bottom: 10px;margin-top: 5px">
          <div class="col-1"><i class="fa fa-map" aria-hidden="true" style="color:#00BCD4;font-size:20px"></i></div>
          <div class="col-9" style="font-family: Roboto; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px;color: #676767; margin-left: 10px;">alamat</div>
        </div>
        <div class="row" style="margin-bottom: 10px">
          <div class="col-1"><i class="fa fa-tags" aria-hidden="true" style="color:#00BCD4;font-size:20px"></i></div>
          <div class="col-9" style="font-family: Roboto; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px;color: #676767; margin-left: 10px;">kategori</div>
        </div>
        <div class="row" style="">
          <div class="col-1"><i class="fa fa-user-circle" aria-hidden="true" style="color:#00BCD4;font-size:20px"></i></div>
          <div class="col-9" style="font-family: Roboto; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px;color: #676767; margin-left: 10px;">kapasitas</div>
        </div>

      </div>            
    </div>

    <div class="row" style="margin-top: 60px;">
      <div class="col" style="font-family: Sunflower; font-style: normal; font-weight: bold; font-size: 28px; line-height: 20px; letter-spacing: 0.25px; color: #787878;">Pengaturan Pemesanan
      </div>
    </div>


    <div class="row" style="margin-top: 30px;">
      <div class="col">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="namaTempat" style="font-family: Roboto; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px;color: #676767;margin-bottom: 10px; margin-right: 5px">Pilih Tanggal masuk</label>
              <input class="mulai" type="date" name="mulai" style="font-family: Sunflower; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px; letter-spacing: 0.25px; color: #00BCD4; background-color: white; height: 40px; width: 150px; border-radius: 5px; border:none; padding-left: 22px;border: 3px solid #00BCD4;">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="namaTempat" style="font-family: Roboto; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px;color: #676767;margin-bottom: 10px; margin-right: 5px">Pilih Tanggal keluar</label>
              <input class="keluar" type="date" name="keluar" style="font-family: Sunflower; font-style: normal; font-weight: normal; font-size: 14px; line-height: 20px; letter-spacing: 0.25px; color: #00BCD4; background-color: white; height: 40px; width: 150px; border-radius: 5px; border:none; padding-left: 22px; border: 3px solid #00BCD4;">
            </div>
          </div>
          <div class="col">
            <a href="" onclick="#">Terapkan</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        Metode pembayaran
      </div>
    </div>

    <div class="row">
      <div class="col">
        pilih metode pembayaran
      </div>
    </div>

    <div class="row">
      <div class="col">
        total biaya
      </div>
    </div>
    <div class="row">
      <div class="col">
        <a href="" onclick="">Pesan Tempat</a>
      </div>
    </div>

  </div>

</div>
</body>
<script type="text/javascript">
  function confirmHapus(id){
    var notice = confirm("Apakah Anda ingin pemesanan tempat ini?")
    if ( notice == true) {
      window.location.href = "<?= site_url('penyewaControl/hapusReservasiPenyewa/')?>"+id;
    } else {
      x = "Anda telah membatalkan penghapusan tempat";
      alert(x);
    }
  }
</script>
</html>