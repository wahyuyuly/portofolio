<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="icon" href="https://storage.cloud.google.com/zahra-bucket/img/header_logo.png">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <title>ManUtd - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      position: static;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      text-align: center;
    }
    
    /*Header Image*/
    header {
      height: auto;
      text-align: left;
      background-color: #DA0106;
    }

    /* Set black background color, white text and some padding */
    footer {
      	height: auto;
      	background-color: #800000;
      	color: #aaa;
      	padding: 10px;
      	position: fixed;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <img src="https://storage.cloud.google.com/zahra-bucket/img/header.PNG" >
  </header>
  <!-- Batas Header -->

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="index.php">Wahyu Yuly Artha</a>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-center">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
      </ul>
    </div>
</nav>
<!-- Batas Navbar -->

<div class="container-fluid text-center">    
	<div class="row content">
    	<div class="col-sm-2 sidenav">
      		<p><a href="https://www.manutd.com/en/videos">Video</a></p>
     		<p><a href="https://www.manutd.com/en/news">Berita</a></p>
      		<p><a href="https://www.manutd.com/en/matches/fixtures-results">Jadwal Pertandingan</a></p>
      		<p><a href="https://www.manutd.com/en/players-and-staff">Pemain</a></p>
    	</div>
    		<div class="col-sm-8 text-left"> 
      			<h1>Seputar Manchester United</h1>
      			<p>Manchester United Football Club adalah sebuah klub sepak bola profesional Inggris yang berbasis di Old Trafford, Manchester Raya, yang bermain di Liga Inggris. Didirikan sebagai Newton Heath LYR Football Club pada tahun 1878, klub ini berganti nama menjadi Manchester United pada 1902 dan pindah ke Old Trafford pada tahun 1910.</p>

      			<p>Manchester United telah memenangkan banyak trofi di sepak bola Inggris, termasuk rekor 20 gelar Liga, 12 Piala FA, empat Piala Liga dan rekor 21 FA Community Shield. Klub ini juga telah memenangkan tiga Piala Eropa, Piala UEFA satu Piala Winners UEFA, satu Piala Super UEFA, satu Piala Interkontinental dan satu Piala Dunia Antarklub FIFA. Pada 1998-1999, klub memenangkan treble dari Liga Premier, Piala FA dan Liga Champions, prestasi belum pernah terjadi sebelumnya untuk klub Inggris.</p>
      			<hr>
      			<h3>Sejarah Manchester United</h3>
      			<p>Tahun awal (1878–1945)
      			Tim pertama kali dibentuk dengan nama Newton Heath Lancashire and Yorkshire Railway F.C. pada 1878 sebagai tim karya Lancashire dan Yorkshire, stasiun kereta api di Newton Heath.</p>
      			<a href="https://id.wikipedia.org/wiki/Manchester_United_F.C.">Lebih lengkap</a>
    		</div>
  	</div>
</div>

    <!-- Footer -->
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; Copyright 2022 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://fb.com/wahyu chesya">Wahyu Yuly Artha</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://instagram.com/wahyu_balung14" class="btn btn-danger">
              <i class="fa fa-instagram"></i> Follow my Instagram </a>
      </div>
    </div>  
  </div>
</footer>
<!-- Akhir Footer -->

</body>
</html>
