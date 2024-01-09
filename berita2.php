<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Desa Kemiriombo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="tampilan.css">
</head>
<style>
  .kotak{
    border: 1px solid #fff;
    border-radius:10px;
    padding: 10px;
    margin-top: 15px;
    margin-left:20px;
    background-color:#f24a4a;background:linear-gradient(-50deg,#ee5952,#ea3a7e,#20aadb,#23e0b3);background-size:320% 200%;animation:Gradient 15s ease infinit;display:block;;
    width:900px;
}
 

 
.kotak img{
    border:1px solid #fff;
    border-radius:10px;
    display: block;
    width: 300px;
    height:300px;
    margin-right: 10px;
}
 
.kotak p
{
    margin-bottom: 10px;
}
 
 
.menu-tengah
{
    width: 530px;
    margin-right: 10px;
    float: left;
}
 
.menu-tengah h3
{
    background: none;
    color: crimson;
    margin-bottom: 0;
}
 
.tanggal-posting
{
    color: gray;
    text-align: left;
    font-size: 12px;
    margin-bottom: 10px;
    display: block;

}

/*footer*/
.row {
  display: flex;
  flex-wrap: wrap;
}
ul {
  list-style: none;
}
.footer {
  background-color: rgba(27, 27, 27, 1);
  padding: 70px 0;
}
.footer-col {
  width: 25%;
  padding: 0 15px;
  
}
.footer-col h4 {
  font-size: 18px;
  color: rgba(255, 255, 255, 1);
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
  
  
}
.footer-col h4::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: rgba(0, 3, 255, 0.8);
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child) {
  margin-bottom: 10px;
}
.footer-col ul li a {
  font-size: 16px;
  text-transform: capitalize;
  color: rgb(247, 3, 3);
  text-decoration: none;
  font-weight: 300;
  color: #eeebeb;
  display: block;
  transition: all 0.3s ease;
  text-align:left;
}
.footer-col ul li a:hover {
  color: rgba(0, 3, 255, 0.8);
  padding-left: 8px;
}
.footer-col .social-media a {
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: rgba(255, 255, 255, 0.5);
  margin: 0 10px 10px 0;
  transition: all 0.5s ease;
}
.footer-col .social-media a:hover {
  color: rgba(0, 3, 255, 0.8);
  background-color: rgba(236, 236, 236, 0.8);
}
.fixed-footer {
    width: 100%;
    position: relative;
    background-color:rgb(8, 8, 8);
    margin: 0 10px 10px 0;
    padding: 10px 0;
    color: rgba(255, 255, 255, 1);
    text-align: center;
    height: 50px;
   
  }
  .fixed-footer {
    bottom: 0;
  }
  
/*responsive*/
@media (max-width: 767px) {
  .footer-col {
    width: 50%;
    margin-bottom: 30px;
  }
}
@media (max-width: 574px) {
  .footer-col {
    width: 100%;
  }
}

</style>
<body>
    <div class="badan utama">
    <div class="navbar">
  <a href="indexs.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Profil Desa
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Sejarah Desa</a>
      <a href="Visimisi.php">Visi dan Misi</a>
      
    </div>
</div>
    <div class="dropdown">
    <button class="dropbtn">Pemerintahan
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="#">Pemerintah Desa</a>
      <a href="#">BPD</a>
      
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Potensi Desa
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="galeri.php">Galeri</a>
      <a href="pembangunan.php">Pembangunan</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Kelembagaan
      <i class="fa fa-caret-down"></i>
    </button>

<div class="dropdown-content">
      <a href="karangtaruna.php">Karang Taruna</a>
      <a href="satgas.php">Satgas Linmas</a>
      <a href="pkk.php">PKK Desa</a>
      <a href="lpmd.php">LPMD</a>
    </div>
</div>

<div class="dropdown">
    <button class="dropbtn">Data Desa
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      
      <a href="geeografis.php">Letak Geografis</a>
      <a href="datapenduduk.php">Data Penduduk</a>
    </div>
</div>
<form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  </div>
</div>
</div>
  <div class="header">
  <img src="logo.jpg" alt="Logo" class="logo">
  <div class="text-box">
        <h1>Balai Desa Kemiriombo</h1><br>
        <p>Alamat : Jalan Pasar No 1. Kemiriombo, Kecamatan Kaliwiro</p><br>
        <p>kode-pos: 56364 | 083105183584</p>
        <a target = "blank" href = 'https://web.whatsapp.com/'><i class="fab fa-whatsapp"></i></a>
</div>
</div>

<div class="menu-tengah">
            <div class="kotak">
               
                <span class="tanggal-posting">
                    Diposting pada 11.04 WIB, 29 April 2019
                </span>
 
                <img src="berita3.jpg" alt="Sate Ayam">
 
                <p>
                Bertempat di lapangan Kemiriombo, Kecamatan Kaliwiro, Komandan Tempur Elektoral Bintang Dua Dapil 6 Wonosobo, Andi Kristiawan bersama pemuda Desa Kemiriombo mengadakan turnamen bola voli se-Kecamatan Kaliwiro, Kecamatan Kalibawang, dan Kecamatan Wadaslintang. Turnamen tersebut digelar selama 2 hari, yakni 2-3 Juli 2023.
                Melihat pemuda yang ada di daerah Dapil 6 tersebut memiliki potensi di bidang olahraga khususnya voli, Andi berinisiatif mengadakan turnamen yang diikuti oleh 10 tim putri umum dan 12 tim putra umum.
                “Turnamen ini bertujuan untuk memajukan potensi bola voli di Kecamatan Kaliwiro, Kecamatan Kalibawang, dan Kecamatan Wadaslintang. Karena warga sangat mendukung kegiatan bola voli, maka saya bersama pemuda Desa Kemiriombo mengadakan turnamen ini,” ujar Andi.
                Tidak hanya sebatas turnamen, namun Andi memiliki tujuan lain dalam event itu, yakni untuk memajukan Wonosobo di bidang olahraga melalui pembinaan atlet lokal.
            </div>
        </div>
 
        


   <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63296.9600511797!2d109.77889822282545!3d-7.458614458468684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa37dc15d44d9%3A0xbf852b357c07182a!2sKantor%20Pemerintahan%20Desa%20Kemiriombo!5e0!3m2!1sid!2sid!4v1703678653983!5m2!1sid!2sid" width="300" height="300"   style="border:3px solid gainsboro;margin-left:1000px;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  <div class="row social" align="center">
   <a target = "blank" href = 'https://www.youtube.com/@desakemiriombo9694/videos'><i class="fab fa-youtube"></i></a>
   <a target = "blank" href='https://twitter.com/codingCommander' ><i class="fab fa-twitter"></i></a>
   <a target = "blank" href='https://web.facebook.com/groups/798486420313108/?_rdc=1&_rdr'><i class='fab fa-facebook'></i></a>
   <a target = "blank" href='https://www.instagram.com/kemiriombo.kaliwiro/?hl=id'><i class='fab fa-instagram'></i></a>
   <a target = "blank" href = 'https://web.whatsapp.com/'><i class="fab fa-whatsapp"></i></a>
   
 </div>

  <footer class="footer">
        <div class="row">
          <div class="footer-col">
            <h4 >Desa Kami mengatakan tidak untuk</h4>
            <ul>
              <li><a href="#">Korupsi</a></li>
              <li><a href="#">Pungli</a></li>
             
            </ul>
          </div>
          <div class="footer-col">
            <h4>Kategori</h4>
            <ul>
              <li><a href="#">Berita Desa</a></li>
              <li><a href="#">Layanan Mandiri</a></li>
              <li><a href="#">Data Desa</a></li>
              <li><a href="#">Informasi Desa</a></li>
             
            </ul>
          </div>
          <div class="footer-col">
            <h4>Kontak Kami</h4>
            <ul>
              <li><a href="#">Telp : 083105183584</a></li>
              <li><a href="#">Email: kemiriombodesa@gmail.com</a></li>
              <li><a href="#">Alamat : Jalan Pasar No 1. Kemiriombo, Kecamatan Kaliwiro</a></li>
             
            </ul>
          </div>
          <div class="footer-col">
            <h4>Sosial Media Kami</h4>
            <div class="social-media">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="fixed-footer">
      <h4>Copyright &copy; 2023 Ashatul Ilham Manzis</h4>
    </div>
 


</body>
</html>