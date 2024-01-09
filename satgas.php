<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Desa Kemiriombo</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="tampilan.css">
</head>
<style>
div.scroll-container {
  background-color: #f24a4a;background:linear-gradient(-50deg,#ee5952,#ea3a7e,#20aadb,#23e0b3);background-size:320% 200%;animation:Gradient 15s ease infinit;display:block;
  overflow: auto;
  white-space: nowrap;
  padding: 5px;
  
}
div.scroll-container img {
  border:1px solid #fff;
  border-radius:10px;
  height:340px;

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
      <a href="sejarahdesa.php">Sejarah Desa</a>
      <a href="Visimisi.php">Visi dan Misi</a>
      
    </div>
</div>
    <div class="dropdown">
    <button class="dropbtn">Pemerintahan
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="pemerintahdesa.php">Pemerintah Desa</a>
      <a href="bpd.php">BPD</a>
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
      
      <a href="geografis.php">Letak Geografis</a>
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
  </div>
        

        <nav class="navigasi">
            <ul>
                <marquee style="color:white;overflow:hidden;">
                  Selamat Datang Di Website Sistem Informasi Desa Kemiriombo | Kantor Desa Kemiriombo membuka pelayanan publik pada hari Senin - Sabtu pukul 08.00 - 15:00 WIB 
                </marquee>
            </ul>
        </nav>

        <div class="menu">
			<ul>
				<p>Kegiatan Dan Pelatian Satgas Linmas Desa Kemiriombo</p>
			</ul>
</div>

<div class="scroll-container">
  <img src="satgas.jpg" alt="Cinque Terre">
  <img src="satgas1.jpg" alt="Forest">
  <img src="satgas2.jpg" alt="Northern Lights">
  
  
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
            <h4>Desa Kami mengatakan tidak untuk</h4>
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