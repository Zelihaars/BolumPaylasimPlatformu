<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('front/')}}/css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/418ee03e15.js" crossorigin="anonymous"></script>
    <title>Bölüm Paylaşım Platformu</title>
</head>
<body>
<!-- Menü alanı -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Fırat Üniversitesi | Bölüm Paylaşım Platformu </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="ogrenciGiris">Öğrenci Girişi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="akademisyenGiris">Akademisyen Girişi</a>
            </li>

        </ul>
    </div>
</nav>
<!-- Slider alanı -->
<section class="bg-white py-5" >
    <div id="anasayfa-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="anasayfa-slider" data-slide-to="0" class="active"></li>
            <li data-target="anasayfa-slider" data-slide-to="1"></li>
            <li data-target="#anasayfa-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="d-block w-100 resimSlider" src="anasayfaFoto.jpg" alt="Hello">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 resimSlider" src="FiratUniKtp.jpg" alt="World">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 resimSlider" src="Kampus.jpg" alt="Welcome">
            </div>
        </div>
        <a class="carousel-control-prev" href="#anasayfa-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#anasayfa-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
<!-- Görseller alanı -->
<section class="p-5 text-center gorseller">
    <div class="container">
        <br>
        <br>
        <br>
        <h2 class="mb-5 font-weight-bold">Sitemizde bulunanlar</h2>
        <hr class="ayrac"><i class="fas fa-leaf ibeyaz"></i>
        <div class="card-deck">
            <div class="card gorsel">
                <img class="card-img-top" src="dersnotlari.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Öğrenciler tarafından paylaşılan notlar</p>
                </div>
            </div>
            <div class="card gorsel ">
                <img class="card-img-top" src="dersfotolari.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Öğrenciler tarafından paylaşılan fotoğraflar</p>
                </div>
            </div>
            <div class="card gorsel">
                <img class="card-img-top " src="pdf.jpg" alt="Card image">
                <div class="card-body">
                    <p class="card-text">Akademisyenler tarafından paylaşılan ders notlar</p>
                </div>
            </div>
        </div>

    </div>
    <br><br>
    <hr class="ayrac"><i class="fas fa-leaf ibeyaz"></i>
</section>
<!--Footer Alanı-->
<section class="footer">
    <div class="footer-img">
    <img src="logo.png" width="110px">
        <div class="footer-text">
       <br> Fırat Üniversitesi
       <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 23119
        <br>&nbsp;&nbsp;Merkez/Elâzığ <br><br></div>
        <div class="logolar">
            <div class="logolar-liste">
                <ul>
                    <li><a target="_blank" href="https://twitter.com/fu_muh_1967" class="fab fa-twitter"></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/fumuh1967" class="fab fa-facebook"></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCS-JlcWloLYtnX99Rgk-_xA" class="fab fa-youtube"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/fu_muh_1967/" class="fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
<div class="copyright">
    Copyright © 2021 |
    Fırat Üniversitesi
</div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
