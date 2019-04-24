<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(!empty($_POST)) {
    
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $car = $_POST['carlist'];
    $datetime = $_POST['datetime'];
    $datetime2 = $_POST['datetime2'];
    
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    // Auth
    require 'gmail-settings.php';
    
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = $gmail_settings['username'];
    $mail->Password = $gmail_settings['password'];
    $mail->SetFrom("dugandzija@gmail.com");
    $mail->Subject = "Carlist";
    $mail->Body = "
    <p> Ime i Prezime: $name</p>
    <p> Kontakt Telefon: $tel </p>
    <p> Email adresa: $email </p>
    <p> Automobil: $car </p>
    <p> Datum Preuzimanja: $datetime </p>
    <p> Datum Povratka: $datetime2 </p>
    ";
    $mail->AddAddress($gmail_settings['username']);
    
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
    
    
}


?>

<html lang="hr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ###### IMPORTING FONT FROM LOCAL DIRECTORY ###### -->
<style> 
@font-face {
    font-family: neuropolitical;
    src: url(/fonts/neuropolitical.ttf);
}
body { font-family: neuropolitical; }
</style>
<!-- ###### BOOTSTRAP AND JQUERY ###### -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script  src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!-- ###### FONTAWESOME ICONS ###### -->
<link rel="stylesheet" href="css/icon-font.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/icon-font.css">
<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- ###### MAIN CSS FILE ###### -->
<link rel="stylesheet" href="css/main.css">
<!-- ###### FAVICON ###### -->
<link rel="shortcut icon" type="image/png" href="img/favicon1.png">
<title>blueRent rent-a-car</title>
</head>
<body>
<!-- ***** TOP FIXED NAVBAR ***** -->
<nav class="navbar navbar-default navbar-fixed-top nav-blue">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-navbar"></span>
<span class="icon-navbar"></span>
<span class="icon-navbar"></span>
</button>
<!-- <a class="navbar-brand" href="#">Brand</a> -->
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                
<ul class="nav navbar-nav navbar-right">
<li><a href="index.html#section-header">O nama</a></li>
<li><a href="index.html#section-cars">Naša vozila</a></li>
<li><a href="index.html#section-about">Rezervacija</a></li>
<li><a href="index.html#section-features">Transferi</a></li>
<li><a href="index.html#section-contact">Kontakt</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- ###### SOCIAL MEDIA BAR ###### -->
<div class="icon-bar">
<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
<a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
<a href="#" class="instagram"><i class="fa fa-instagram"></i></a> 
</div>
<!-- ###### HEADER SECTION ###### -->
<header class="header-alt">
<div class="header-alt__logo-box">
<img src="img/logo-white.png" alt="Bluerent logo" class="header-alt__logo">
</div>
<!-- ###### COOKIES POPUP AGREEMENT ###### -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#005eff"
            },
            "button": {
                "background": "#fff",
                "text": "#005eff"
            }
        },
        "content": {
            "message": "Kako bismo poboljšali vaše iskustvo prilikom korištenja naše web stranice koristimo kolačiće (eng. cookies) i slične tehnologije. Ako nastavite s pregledom stranice, smatraćemo da ste suglasni s navedenom uporabom.",
            "dismiss": "Slažem se.",
            "link": "Više informacija...",
            "href": "politika-kolacica.html"
        }
    })});
    </script>
    </header>
    <main>
    <!-- ########## COOKIES SECTION ########## -->
    <section class="section-cookies">
    
    <h1 class="reserved-h2">Upit uspesno poslat. Hvala</h1>
    </section>
    <!-- ###### BOOKING SECTION ###### -->
    <section class="section-book" id="section-contact">
    <div class="row">
    <!-- ###### CONTACT INFO ###### -->
    <div class="col-1-of-1">
    <div class="contact__info">
    <h4 class="contact__info--heading">Kontakt info</h4> 
    <ul class="contact__info--list"> 
    <li class="contact__info--item">Adresa: Petrovaradinska ul. 58, Zagreb </li>
    <li class="contact__info--item">Telefon: +385 91 73 78 102 </li>
    <li class="contact__info--item">Email: info@bluerent.hr</li>
    </ul>
    </div>
    <div class="contact">
    <div class="contact__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2782.010105873559!2d15.904361523803711!3d45.79102526548391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d159fe4f077d%3A0x81e163dfb8bbe6e2!2sPetrovaradinska+ul.+58%2C+10000%2C+Zagreb!5e0!3m2!1ssr!2shr!4v1551184801397" width="600" height="450" style="border:0" allowfullscreen></iframe>
        </div>
        </div>                        
        </div>
        </div>
        </section>
        </main>
        <!-- ###### FOOTER ###### -->
        <footer class="footer">
        <div class="footer__logo-box">
        <img class="footer__logo" src="img/logo-blue.png" alt="">
        </div>
        <div class="row">
        <div class="col-1-of-1">
        <div class="footer__navigation">
        <ul class="footer__list">
        <li class="footer__item">
        <a href="pdf/Uvjeti-najma.pdf" class="footer__link">Uvjeti najma</a>
        </li>
        <li class="footer__item">
        <a href="pdf/UVJETI-koristenja.pdf" class="footer__link">Uvjeti korištenja</a>
        </li>
        <li class="footer__item">
        <a href="pdf/usporedbe-sa-leasingom.pdf" class="footer__link">Usporedbe sa leasingom</a>
        </li>
        <li class="footer__item">
        <a href="pdf/IZJAVA-O-ZASTITI-OSOBNIH-PODATAKA.pdf" class="footer__link">Izjava o zastiti osobnih podataka</a>
        </li>
        <li class="footer__item">
        <a href="pdf/uvjeti-placanja.pdf" class="footer__link">Uvjeti placanja</a>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </footer>
        <!-- NAV TRANSPARENT TO SOLID -->
        <script>
        $(document).ready(function() {
            // Transition effect for navbar 
            $(window).scroll(function() {
                // checks if window is scrolled more than 250px, adds/removes solid class
                if($(this).scrollTop() > 100) { 
                    $('.nav-blue').addClass('nav-solid');
                } else {
                    $('.nav-blue').removeClass('nav-solid');
                }
            });
        });
        </script>
        </body>
        </html>
        
        
        
        
        