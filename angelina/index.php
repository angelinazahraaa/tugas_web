<?php
 require_once("database.php");
 $tampil = kuery("Select * from pengunjung");
 // // var_dump($tampil);
 //   $no =1;
 // foreach($tampil as $data): 
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>nguel</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            ENJELLLL
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href=""></a>
                <a href="l"></a>
                <a href=""></a>
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/inienjel.jpeg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h1>
            Angelina Zahra Afrilia
          </h1>
          <p>
            ABOUT ME
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->


  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/lia.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ABOUT ANGELINA ZAHRA AFRILIA
              </h2>
            </div>
            <p>
              Hi,nama aku Angelina Zahra Afrilia nama panggilan aku enjel ataupun zahra umurku 17 tahun,aku lahir pada tanggal 03 April 2007,Hobi aku main game dan menonton
              <br>
              Jenis Kelamin : Perempuan
              <br>
              Kewarganegaraan : Indonesia
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- offer section -->

  <section class="offer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="images/gde.jpeg" alt="">
            <div class="detail-box">
              <h2>
                ENJELINAA
              </h2>
              <a href="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="images/jejel.jpeg" alt="">
            <div class="detail-box">
              <h2>
                ENJELLL
              </h2>
              <a href="">
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="images/ii.jpeg" alt="">
            <div class="detail-box">
              <h2>
              
              </h2>
              <a href="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- blog section -->

  <section class="blog_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          ABOUT ME
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/kaca 2.jpeg" alt="">
              <h4 class="blog_date">
                3  <br>
                APRIL
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                SDN CIKOPO II
                <BR></BR>
                SMPN 1 JATINANGOR
                <BR></BR>
                SMK BAKTI NUSANTARA 666
              </h5>
              <p>
     
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/kaca 1.jpeg" alt="">
              <h4 class="blog_date">
                2007  <br>
                
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Alamat: Cileunyi wetan,Jl.Cipacing
              </h5>
              <p>
    
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->
<!-- 
  <section class="client_section layout_padding">
  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Komentar</h1>
                 </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                   
      // foreach($tampil as $data):
                ?>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5"><?php echo $data['komentar']; ?></p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <div class="ps-3">
                            <h3 class="mb-1"><?php echo $data['nama']; ?></h3>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <?php 
    // endforeach; x
    ?>
            </div>
        </div>
    </div>
  </section> -->

 

</html>