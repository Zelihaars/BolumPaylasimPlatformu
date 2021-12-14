<!DOCTYPE html>
<html lang="en">
<head>
    <title>Öğrenci Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('back/')}}/css/styles.css" rel="stylesheet" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse1{
            margin-left: 50px;
            height: 80px;
            background-color: #2d3748;
        }
        .navbar-inverse{
            width: 100px;
            background-color: #2d3748;
        }
        .navbar-header{
            height: 80px;
        }
        .glyphicon-log-in{
            color: white;
            margin-left: 20px;
        }
        .glyphicon{
            color: white;
        }

    </style>
</head>
<body>
<!--Üst Menü-->
<nav class="navbar navbar-inverse1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Zeliha Arslan</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><span class="glyphicon glyphicon-log-in "></span> <p style="color: white"> Çıkış Yap</p> </a></li>
        </ul>
    </div>
</nav>

<!--Alt Menü-->
<div class="navbar navbar-inverse navbar-twitch" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <li> <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-user"></i></a></li>
            </a>
        </div>

        <div class="">
            <ul class="nav navbar-nav">

                <li class="nav-item">

                    <a href="OgrenciPaneli">
						<span class="small-nav " data-toggle="collapsed"data-placement="right" title="Anasayfa">
							<span class="glyphicon glyphicon-home"><h5>Anasayfa</h5></span>
						</span>

                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="Notlar"><span class="glyphicon glyphicon-folder-open"><h5>Notlar</h5></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="tumnotlar">Tüm Notlar</a></li>
                        <li><a href="notekle">Not Ekle</a></li>
                        <li><a href="Notsil">Not Sil</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#profil">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Contact Us">
							<span class="glyphicon glyphicon-user"><h5>Profil</h5></span>
						</span>

                    </a>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

</div>

</body>
</html>
