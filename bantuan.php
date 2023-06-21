<?php
require 'controller.php';
//apakah botton submit pernah di klik atau belum
if (isset($_POST["submit"])) {
    if (
        tambah($_POST) >
        0
    ) {
        echo "
<script>
  alert('data berhasil ditambahkan');
  document.location.href = 'index.php';
</script>
";
    } else {
        echo "
<script>
  alert('data tidak ditambahkan');
  document.location.href = 'index.php';
</script>
";
    }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bantuan Shodaqoh</title>
</head>
<style>
  .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(24, 20, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03f40f;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03f40f,
              0 0 25px #03f40f,
              0 0 50px #03f40f,
              0 0 100px #03f40f;
}

.login-box a span {
  position: absolute;
  display: block;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(1) {
  bottom: 2px;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03f40f);
  animation: btn-anim1 2s linear infinite;
}
.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #00000;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #FF78C4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #FF78C4,
              0 0 25px #FF78C4,
              0 0 50px #FF78C4,
              0 0 100px #FF78C4;
}

.login-box button span {
  position: absolute;
  display: block;
}
</style>
<body>
<div class="login-box">
 
 <form method= "post">
   <div class="user-box">
     <input type="text" name="nama_donatur" required="">
     <label type= "text" id= "nama_donatur" name= "nama_donatur" require>Nama:</label>
   </div>
   <div class="user-box">
   <label class="user-box" for="paket"></label>
    <select class="form-control" name="paket" id="paket" style="width: 320px;" required="" autocomplete="off">
      <option value="">Pilih Paket</option>
      <option value="Paket 1">Paket 1</option>
    </select>
    </div>
    <br>
   <div class="user-box">
   <label class="user-box" for="kategori"></label>
    <select class="form-control" name="kategori" id="kategori" style="width: 320px;" required="" autocomplete="off">
      <option value="">Pilih kategori</option>
      <option value="uang">Uang</option>
      <option value="emas">Emas</option>
    </select>
    </div>
    <br>
    <br>
    <div class="user-box">
     <input type="text" name="nominal" required="">
     <label>Nominal:</label>
   </div>
  <center>
  <div class="user-box">
   <label class="user-box" for="metode"></label>
    <select class="form-control" name="metode" id="metode" style="width: 320px;" required="" autocomplete="off">
      <option value="">Pilih Metode</option>
      <option value="bank">Bank</option>
      <option value="pospay">PosPay</option>
      <option value="lainnya">Lainnya</option>
    </select>
    </div>
   <button type="submit" name="submit">Kirim</button>
   </center>
 </form>
</div>
</body>
</html>