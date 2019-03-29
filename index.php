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
    $mail->SetFrom("example@gmail.com");
    $mail->Subject = "Carlist";
    $mail->Body = "
    <p> Ime i Prezime: $name</p>
    <p> Kontakt Telefon: $tel </p>
    <p> Email adresa: $email </p>
    <p> Automobil: $car </p>
    <p> Datum Preuzimanja: $datetime </p>
    ";
    $mail->AddAddress($gmail_settings['username']);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }

    
}


 ?>

 <form method="POST" action="send.php" class="form" id="book-form">
    <h3 class="book__heading">Popunite upit za rezervaciju vozila</h3>
    <div class="form__group">
    <input name="name" type="text" class="form__input" placeholder="Ime i prezime" id="name" required />
    <label for="name" class="form__label">Ime i prezime</label>
    </div>
    <div class="form__group">
    <input name="tel" type="tel" class="form__input" placeholder="Kontakt telefon" id="phone" required />
    <label for="phone" class="form__label">Kontakt telefon</label>
    </div>
    <div class="form__group">
    <input name="email" type="email" class="form__input" placeholder="Email adresa" id="email" required />
    <label for="email" class="form__label">Email adresa</label>
    </div>
    <div class="form__group">
    <select name="carlist" class="form__input" form="book-form" id="cars" required>
    <option value="volvo">Opel Astra</option>
    <option value="saab">Opel Astra karavan</option>
    <option value="opel">Renault Clio</option>
    <option value="audi">Ford Focus</option>
    <option value="audi">Opel Vivaro</option>
    <option value="audi">Volkswagen Up</option>
    </select>
    <label for="cars" class="form__label">Automobil</label>
    <div class="form__group">
    
    <div class='form__input input-group date' id='datetimepicker1'>
    <input name="datetime" type='text' class="form-control" required />
    <span class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
    </span>
    </div>
    <label class="form__label">Datum preuzimanja</label>
    </div>
    <div class="form__group center-text">
    <input type="submit" name="submit" value="Pošalji" class="btn btn--white" />
    </div>
    </div>
    
</form>