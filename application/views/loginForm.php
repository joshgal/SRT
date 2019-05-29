<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<style>
    .bungkus {
        background-color: white;
        width: 100%;
        height: auto;
        padding: 10px;
    }
    .nav > li.nav-item > a.active {
      background-color: #00BCD4;
      font-weight: 550;
      font-size: 16px;
    }
    .nav-link {
      color: #00BCD4;
      border-style: solid;
      border-width: 1px;
      border-radius: 10px;
    }
    .masukText {
      color: #00BCD4;
      font-size: 36px;
      font-weight: 700;
      margin-left: 15px;
    }
    .kiri {
      margin-right:30px;
    }
</style>
<body>
   <div class="bungkus">
       <div class="row">
            <div class="col-sm">
              Halo, <br>
              Selamat datang di website SRT
            </div>
            <div class="col-sm kiri">
              <h1 class="masukText">Masuk</h1>
              <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                  <li class="nav-item rounded-top">
                      <a class="nav-link active" id="penyewa-tab" onclick="loginprofile(event)" data-toggle="tab" href="#loginPenyewa" role="tab" aria-selected="true">Penyewa</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" id="pemilik-tab" onclick="loginprofile(event)" data-toggle="tab" href="#loginPemilik" role="tab" aria-selected="false">Pemilik</a>
                  </li>
              </ul>

              <div class="tab-content">
                <div class="tab-pane active" id="loginPenyewa" role="tabpanel">login buat penyewa
                    <form action="<?= base_url()?>">
                      <input class="inputUsrname" type="text" placeholder="Username/ Email">
                      <br>
                      <input class="inputPassword" type="password" placeholder="Password">
                      <br>
                      <button class="btnLogin" type="submit">Masuk</button>
                    </form>  
                </div>
                <div class="tab-pane" id="loginPemilik" role="tabpanel">login untuk pemilik tempat
                    <form action="<?= base_url()?>">
                      <input class="inputUsrname" type="text" placeholder="Username/ Email">
                      <br>
                      <input class="inputPassword" type="password" placeholder="Password">
                      <br>
                      <button class="btnLogin" type="submit">Masuk</button>
                    </form> 
                </div>
              </div>
            </div>
        </div>
   </div>
</body>
<script type="text/javascript">
    function loginprofile(evt) {
      var i, tabcontent;
      
      tablinks = document.getElementsByClassName("nav-link");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      evt.currentTarget.className += " active";
    }
</script>
</html>