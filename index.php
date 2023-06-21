<?php
require 'controller.php';
$donatur = query("SELECT * FROM db_donatur"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masjid Al Ikram</title>
  <!-- Navbar -->
  <header>
        <img src="img/logowk.png" alt="" width="40">
        <h1 id="nav-title">SMK Wikrama Bogor</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#cara">Cara Waqaf</a></li>
                <li><a href="#data.php">Data Waqaf</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
  <h3 class= "text1" id="masjid">Masjid Besar SMK Wikrama Bogor</h3> 
<h1>Mari <span class="color1">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
<img class ="foto1" src="img/desk-masjid.png" alt="">
<br> <br> <br> <br> <br>
<div class="btn"><a href="bantuan.php"><button>Beri Bantuan shodaqoh</button></a></div>
<br> <br> <br> <br> <br>
<?php
$total_dana = 0;
$total_harus = 5000000;
$query = "SELECT nominal FROM db_donatur";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
  $total_dana += $row['nominal'];
}

$format_harus = number_format($total_harus, 0, ',', '.');
$format_nominal = number_format($total_dana, 0, ',', '.');

$bar = round(($total_dana / $total_harus) * 100);
?>
<div class="totalitas" style="display: flex; justify-content: center; padding-top: 3rem;">
    <div class="cardana" style="box-shadow: 1px 2px 5px 2px black; width: 93%; display: flex; justify-content: center;  padding-top: 3rem;">
      <div class="danac-main" style="background-color: white; width: 100%;">
        <div class="danac-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); grid-gap: 10px; padding: 0 20px; max-width: 100%; justify-items: center;">
          <section class="danac-1">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Target Dana</h3>
            <br>
            <h1 style="font-size: 35px; text-align: center; color: black;">Rp.50.000.000,00</h1>
            <br><br>
          </section>
          <section class="danac-2">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Dana Terkumpul</h3>
            <h1>
           <?= '<h1 style="margin-top: 15px; font-size: 35px; text-align: center; color: black;"> Rp:' . $format_nominal . ',00</h1>'; ?>
            </h1>

            <br><br>
          </section>
          <section class="danac-3">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Donatur</h3>
            <br>
            <h1 style=" font-size: 25px; text-align: center; color: black;">
              <div class="naon">
                <?php $angka = 0; ?>
                <?php foreach ($donatur as $don) : ?>
                  <?php $angka++ ?>
                <?php endforeach; ?>
                <h1> <?= $angka; ?></h1>
              </div>
            </h1>
            <br>
          </section>
        </div>
        <div style="display: flex; justify-content: center">
          <div class="progress-bar" style="width: 50%; background-color: #606C5D; height: 30px; border-radius: 10px; overflow: hidden;">
            <div class="progress" style="background-color: #525FE1; width: <?= $bar ?? 0 ?>%;"></div>
            <span class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"></span>
          </div>
        </div>
        <br>
          <?=  '<h1 style="color: black; display: flex; justify-content: center; display: flex;">'. $bar  . '%</h1>'; ?>
        <br><br>
        <div style=" background-color: #1F3984; width: 100%;  height: 60px; display: flex; justify-content: center; align-items: center;">
          <marquee behavior="scroll" direction="left" scrollamount="20" style=" width: 100%; white-space: nowrap;overflow: hidden;">
            <?php foreach ($donatur as $dtr) { ?>
              <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: #FFFFFF;">
                    <?= $dtr["nama_donatur"]; ?>
               <h3 style="display: inline-block; margin: 0; padding-right: 10px; color:#FFFFFF;">-</h3>
                  </h3>
              <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                <?= $dtr["kategori"]; ?>
                Rp. <?= number_format($dtr['nominal'], 2, ',', '.'); ?>
              </h3>
            <?php } ?>
          </marquee>
        </div>
      </div>
    </div>
  </div>
  <br>*
  <h1 class><span class="color1">Manfaat</span> Wakaf, Infaq Shodaqoh</h1>
  <br> <br>
  <h3 class= "text1">Berikut Adalah Beberapa Keutamaaan Wakaf, Infaq Shodaqoh Yang Akan Anda Dapatkan</h3>
  <br><br><br><br><br><br>
  <img class= "salam" src="img/bersama.png" alt="Foto">

  <div class="card">
  <img class= "card-img" src="img/ceklis.png" alt="">
  <div class="card-info">
    <p class="text-body">Kami memberikan harga yang terbaik dibandingkan dengan kompetitor kami.<p>
    <p class="text-title">Menjadikan Hati Lebih Tenang</p>
  </div>
</div>
  <div class="card">
  <img class= "card-img" src="img/lov.png" alt="">
  <div class="card-info">
    <p class="text-body">Allah SWT akan membuka pintu rezeki dari arah yang tak dikira sebelumnya.<p>
    <p class="text-title">Terbukanya Pintu Rezeki</p>
  </div>
</div>
<br><br><br><br><br>
<div class="card">
<img class= "card-img" src="img/perisai.png" alt="">
  <div class="card-info">
    <p class="text-body">Rasullah SAW pernah bersabda: "Bersegeralah untuk bersedekah, karena musibah bencana tidak bisa mendahului sedekah."<p>
    <p class="text-title">Menjauhkan Dari Bahaya</p>
  </div>
</div>
<div class="card">
<img class= "card-img" src="img/bintang.png" alt="">
  <div class="card-info">
    <p class="text-body">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api Neraka.<p>
    <p class="text-title">Pahala yang Tak Terputus</p>
  </div>
</div>
<br><br><br><br><br><br><br><br><br>
<h1 class><span class="color1" id="cara">Cara Melakukan</span> Wakaf, Infaq Shodaqoh</h1>
<br><br>
<h3 class= "text1">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk Membantu Pembangunan Masjid Besar SMK Wikrama Bogor</h3>
<br><br><br><br><br><br>
<div class="kartu">
        <div class="kartu1" href="#">
            <p>1. Isi Form Data Diri</p>
            <p class="small">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan terliti.</p>
        </div>
        <div class="kartu1" href="#">
            <p>2. Isikan Nominal Shodaqoh</p>
            <p class="small">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
        </div>
        <div class="kartu1" href="#">
            <p>3. Upload Bukti Pembayaran</p>
            <p class="small">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
        </div>
        <div class="kartu1" href="#">
            <p>4. Verifikasi Pembayaran</p>
            <p class="small">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
        </div>
    </div>
    <br><br><br>
    <h1 class><span class="color1" id="data.php">Data Donatur</span> Wakaf, Infaq Shodaqoh</h1>
    <br><br>
    <h3 class= "text1">Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk Masjid Besar Wikrama</h3>
    <br><br><br><br>
    <div class= "table-responsive">
        <table border="1" cellpadding="10" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Donatur</th>
              <th>Donatur ID</th>
              <th>Paket</th>
              <th>Kategori</th>
              <th>Nominal/Barang</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($donatur as $dtr) { ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $dtr["nama_donatur"]; ?></td>
                <td><?= $dtr["id"]; ?></td>
                <td><?= $dtr["paket"]; ?></td>
                <td><?= $dtr["kategori"]; ?></td>
                <td><?= $dtr["nominal"]; ?></td>

              </tr>
              <?php $i++; ?>
           <?php } ?>
          </tbody>
        </table>
    </div>
    <br><br><br>
    <h1 class><span class="color1" id="gallery">Gallery</span> Masjid Besar SMK Wikrama Bogor</h1>
    <h3 class= "text1">Berikut Adalah Gallery Masjid Besar Wikrama</h3>
    <br><br>
    <div class="gallery">
             
             <img src="img/masjid1.jpeg" alt="Above Photo 1">
             <img src="img/masjid2.jpeg" alt="Above Photo 2">
             <img src="img/masjid3.jpeg" alt="Above Photo 3">
           </div>

           <div class="gallery">
             
             <img src="img/masjid4.jpeg" alt="Below Photo 1">
             <img src="img/masjid5.jpeg" alt="Below Photo 2">
             <img src="img/masjid6.jpeg." alt="Below Photo 3">
   </div>
</body>
<div class="clearfix"></div>
            <footer class="footer-main">
                <div class="footer-grid">   
                      <section class="footer-1">
                        <h4>Tentang RPL</h4>
                          <p>Sejarah</p>
                          <p>Kompetensi</p>
                          <p>Profesi</p>
                          <p>Kerjasama</p>
                      </section>
                     <section class="footer-2">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Wangun
                            Kelurahan Sindangsari
                            Bogor Timur 16720</p>
                        <h4>Telepon</h4>
                        <p>0251-8242411 / 082221718035(Whatsapp)</p>
                      </section>
                     <section class="footer-3">
                       <h4>Sosial Media</h4>
                         <p>Instagram : @rplwikrama</p>
                         <p>Youtube : RPL Wikrama</p>
                     </section>
                </div>
            </footer>
  <style>
    .progress-bar {
  width: 200px;
  height: 25px;
  background-color: lightgray;
  border-radius: 4px;
}

.progress {
  height: 100%;
  background-color: #1F3984;
}

.progress-text {
  line-height: 20px;
  text-align: center;
  color: white;
  font-weight: bold;
}
  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;;
    padding: 5px 5%;
    }

    .gallery img {
    width: 350px;
    height: 550px;
    object-fit: cover;
    margin: 10px;
    border-radius: 20px;
    }
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .footer-main {
    background-color:#004258;
    padding: 24px 60px;
    color: white;
  }
  
  .footer-grid {
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
    grid-gap: 10px;
    margin: 0 auto;
    max-width: 100%;
    justify-items: center;
  }
  
  @media (max-width: 1024px) {
    .footer-grid {
      padding-left: 20px;
    }
  }
  
  .footer-grid p {
    margin: 10px 0;
  }
  .marq{
    .marquee {
  display: inline-block;
  white-space: nowrap;
  animation: marquee 5s linear infinite;
}

@keyframes marquee {
  0% { transform: translateX(100%); }
  100% { transform: translateX(-100%); }
}
  }
  .table-responsive {
    overflow-x: auto;
  }

  table {
    width: 95%;
    border-collapse: collapse;
    justify-content: center;
    margin-left: 35px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #f5f5f5;
  }
.kartu p {
  font-size: 17px;
  font-weight: 400;
  line-height: 20px;
  color: #666;
  display: inline-block;
}

.kartu p.small {
  font-size: 14px;
}

.kartu1 {
  display: flex;
  position: relative;
  width: 450px;
  height: 50px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  margin-top: 20px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
  display: inline-block;
  margin-left: 50px;
}

.kartu1:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -16px;
  right: -16px;
  background: #00838d;
  height: 32px;
  width: 55px;
  border-radius: 32px;
  transform: scale(1);
  transform-origin: 50% 50%;
  transition: transform 0.25s ease-out;
  display: inline-block;
}

.kartu1:hover:before {
  transform: scale(21);
}

.kartu1:hover p {
  transition: all 0.3s ease-out;
  color: rgba(255, 255, 255, 0.8);
}

.kartu1:hover h3 {
  transition: all 0.3s ease-out;
  color: #fff;
}
.salam {
  float: right;
  margin-right: 450px;
  height: 640px;
  width: 4 00px;
  border-radius: 30px;

}
.card {
 width: 190px;
 height: 280px;
 background: #f5f5f5;
 overflow: visible;
 box-shadow: 0 5px 20px 2px rgba(0,0,0,0.1);
 display: flex;
 flex-direction: column;
 align-items: center;
 display: inline-block;
 margin-left: 50px;
 z-index: 2;
 
}

.card-info {
 display: flex;
 flex-direction: column;
 align-items: center;
 gap: 2em;
 padding: 0 1rem;
}

.card-img {
 --size: 100px;
 width: var(--size);
 height: var(--size);
 border-radius: 50%;
 transform: translateY(-50%);
 position: relative;
 transition: all .3s ease-in-out;

}

.card-img::before {
 border-radius: inherit;
 position: absolute;
 top: 50%;
 left: 50%;
 width: 90%;
 height: 90%;
 transform: translate(-50%, -50%);
 border: 1rem solid #e8e8e8;
 z-index: 999;
}

/*Text*/
.text-title {
 text-transform: uppercase;
 font-size: 0.75em;
 color: #42caff;
 letter-spacing: 0.05rem;
 text-align: center;
}

.text-body {
 font-size: .8em;
 text-align: center;
 color: #6f6d78;
 font-weight: 400;
 font-style: italic;
}

/*Hover*/
.card:hover .card-img {
 --size: 110px;
 width: var(--size);
 height: var(--size);
}
.btn {
        display: flex;
        margin-top: -100px;
        text-align: center;
        margin-left: 50px;
    }

    .btn a {
        text-decoration: none;
    }

    .btn button {
        background-color: #25377F;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        margin-top: -100px;
    }

    .btn button:hover {
        background-color: #1F6E8C;
    }

.foto1 {
    margin-top: -100px;
}

h1 .color1 {
    color: #25377F;
    font-family: 'Patrick Hand', cursive;
}
h1 {
    font-size: 55px;
    width: 50%;
    float: left;
    margin-left: 50px;
}
  .text1 {
    width: 640px;
    height: 41px;
    Font style: Medium
    Font size: 28px;
    Line height: 48px
    Line height: 160%
    #919191
    font-style: normal;
    font-weight: 500;
    font-size: 29px;
    line-height: 138%;
    font-family: 'perpetua';
/* or 41px */

letter-spacing: 0.015em;

/* text */

color: #919191;


/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;
margin-top: 120px;
margin-left: 50px;
  }
*{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica;
}

/* Header */
header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px 50px;
    box-shadow: 0 1px 8px #ddd;
    position: sticky;
    left: 0;
    top: 0;
    background-color: #fff;
    z-index: 1;
}

#nav-title {
    margin-left: 10px;
    margin-right: auto;
    font-size: 1.5em;
}

header li {
    list-style: none;
    display: inline-block;
    padding: 0 20px;
}

header a {
    text-decoration: none;
    color: #555;
    transition: all 0.3s ease 0s;
}

header a:hover {
    color: #b2dfdb;
}
html {
  scroll-behavior: smooth;
}

@import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap%27');
</style>
</html>