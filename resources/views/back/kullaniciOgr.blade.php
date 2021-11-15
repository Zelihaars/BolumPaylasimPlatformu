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
</head>
<body>
<!--Üst Menü-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Zeliha Arslan</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><span class="glyphicon glyphicon-log-in"></span> Çıkış Yap</a></li>
        </ul>
    </div>
</nav>

<!--Alt Menü-->
<div class="navbar navbar-inverse navbar-twitch" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <span class="small-nav"> <span class="logo"> </span> </span>
                <span class="full-nav"> <Bootsnipp> </span>
            </a>
        </div>
        <div class="">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="OgrenciPaneli">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
							<span class="glyphicon glyphicon-home"></span>
						</span>
                        <span class="full-nav"> Anasayfa </span>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="#file">
						<span class="small-nav " data-toggle="collapsed"data-placement="right" title="About Us">
							<span class="glyphicon glyphicon-file"></span>
						</span>
                        <span class="full-nav"> Not ekle</span>
                    </a>
                </li>
                <li>
                    <a href="#image">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Contact Us">
							<span class="glyphicon glyphicon-picture"></span>
						</span>
                        <span class="full-nav"> Fotoğraf Ekle</span>

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
