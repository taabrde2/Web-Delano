<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/6b62a8a4eb.js" type="text/javascript"></script>
    <title><?= $title ?> | D.B</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <a class="navBar-Title-Link" href="index.html">
        <div class="navBar-Title">
          <h3>DLB</h3>
        </div>
      </a>

      <div class="navBar">
        <ul class="navBar-ul">
          <li class="navBar-ul-li dropdown"><i class="fa fa-user-circle fa-2x dropdown-Element "></i>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a></i>
          </li>
          <li class="navBar-ul-li"><a href="/Bewerbung/Bewerbung">Bewerbungsschreiben</a></li>
          <li class="navBar-ul-li"><a href="/Bewerbung/Lebenslauf">Lebenslauf</a></li>

          <!-- <li class="navBar-ul-li"><a href="index.html">Startseite</a></li> -->
          <!-- <li class="navBar-Title"><a href="index.html">StartseiteTitle</a></li> -->
        </ul>
      </div>
    </header>

    <div class="container">

    <h1><?= $heading ?></h1>
