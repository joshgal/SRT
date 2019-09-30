<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
      transition: 0.2s;
    }
    .nav-link {
      color: #00BCD4;
      border-style: solid;
      border-width: 1px;
      font-weight: 550;
      font-size:16px;
    }
    .masukText {
      color: #00BCD4;
      font-size: 36px;
      font-weight: 700;
      margin-left: 15px;
    }
    .kiri {
      margin-right:120px;
      margin-left: 100px;
      padding-right: 55px;
      margin-top: 50px;
    }
    .inputUsrname {
      width: 345px;
      height: 50px;
      border: 0px solid white;
      border-radius: 10px;
      background-color: #F3F3F3;
      margin-bottom: 20px;
      padding:10px;
      color : #474747;
    }

    .inputUsrname:focus {
      box-shadow: 0 0 2px 0 #A7A7A7;
      transition: 0.3s;
    }

    .inputPassword {
      width: 345px;
      height: 50px;
      border: 0px solid white;
      border-radius: 10px;
      background-color: #F3F3F3;
      margin-bottom: 30px;
      padding:10px;
      color : #474747;
    }

    .inputPassword:focus {
      box-shadow: 0 0 2px 0 #A7A7A7;
      transition: 0.3s;
    }

    .tab-pane {
      margin:15px;
    }

    .nav{
      margin-right:150px;
      margin-bottom:30px;
      padding-right: 40px;
    }

    .btnLogin {
      width: 345px;
      height: 50px;
      background-color: #00BCD4;
      border: none;
      border-radius: 100px;
      color: white;
      font-weight:550;
      font-size:16px;
    }

    .btnLogin:hover{
      background-color: #1A8390;
      box-shadow: 0 0 2px 0 #1A8390;
      transition: 0.3s;
    }

    .boundary {
      position: relative;
      margin-left: 120px;
    }

    .top-left{
      position: absolute;
      top: 8px;
      left: 16px;
    }

    .intro{
      top: 120px;
      font-size: 36px;
      width: 400px;
      font-weight: bold;
      color: #fff;
      margin-left: 16px;
    }

    .logo-white{
      top: 24px;
      margin-left: 16px;
    }

    .inputWicon .inputUsrname{
      padding-left: 60px;
    }

    .inputWicon .inputPassword{
      padding-left: 60px;
    }

    .inputWicon {
      position:relative;
    }

    .inputWicon i{
      position:absolute;
      left:0;
      top:8px;
      padding:9px 8px;
      color : #7B7B7B;
    }
    .text-danger {
      margin-left: 10px;
    }
</style>
<body>
   <div class="bungkus">
       <div class="row">
            <div class="col-sm">
              <div class="boundary" style="background-color: #00BCD4; height: 480px; width: 520px; border-radius: 10px">
                <div class="top-left logo-white"><img src="<?= base_url('')?>" width="250px"></div>
                <div class="top-left intro">Halo, <br> Selamat datang di SRT</div>
              </div>
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
                <div class="tab-pane active" id="loginPenyewa" role="tabpanel">
                    <form action="<?= base_url('index.php/loginControl/loginPenyewa')?>" method="POST">
                      <?= form_error('usernamePenyewa','<small class="text-danger">','</small>');?>
                      <div class="inputWicon">
                        <input class="inputUsrname" name="usernamePenyewa" type="text" placeholder="Username/ Email">
                        <i class="fa fa-user fa-lg icon"></i>
                      </div>
                      <?= form_error('passPenyewa','<small class="text-danger">','</small>');?>
                      <div class="inputWicon">
                        <input class="inputPassword" name="passPenyewa" type="password" placeholder="Password">
                        <i class="fa fa-lock fa-lg icon"></i>
                      </div>
                      <button class="btnLogin" type="submit">Masuk</button>
                    </form> 
                </div>
                <div class="tab-pane" id="loginPemilik" role="tabpanel">
                    <form action="<?= base_url('index.php/loginControl/loginPemilik')?>" method="POST">
                      <?= form_error('usernamePemilik','<small class="text-danger">','</small>');?>
                      <div class="inputWicon">
                        <input class="inputUsrname" name="usernamePemilik" type="text" placeholder="Username/ Email">
                        <i class="fa fa-user fa-lg icon"></i>
                      </div>
                      <?= form_error('passPemilik','<small class="text-danger">','</small>');?>
                      <div class="inputWicon">
                        <input class="inputPassword" name="passPemilik" type="password" placeholder="Password">
                        <i class="fa fa-lock fa-lg icon"></i>
                      </div>
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