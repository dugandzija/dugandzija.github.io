<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
	
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script  src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    
    
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon1.png">
    
    
    
    <title>blueRent rent-a-car</title>
</head>
<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
        
        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>
        
        <div class="navigation__background">&nbsp;</div>
        
        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>O nama</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Naša vozila</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Ostale usluge</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Rezervacija</a></li>
            </ul>
        </nav>
    </div>
    <header class="header">
        
        <div class="header__logo-box">
            <img src="img/logo-white.png" alt="Bluerent logo" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">blueRent</span>
                <span class="heading-primary--sub">drive better</span>
            </h1>
            <a href="#" class="btn btn--white btn--animated">Rezervacija</a>
        </div>
        
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
            <section class="section-about">
                <div class="center-text margin-bot-8">
                    <h2 class="heading-secondary">
                        O nama
                    </h2>
                </div>
                
                <div class="row">
                    <div class="col-1-of-2">
                        <p class="paragraph">
                            Kada govorimo „o nama“ onda je bitno krenuti od razloga zašto smo uopće pokrenuli rent a car tvrtku.
                        </p>
                        <p class="paragraph">
                            Naime, vođeni vlastitim iskustvom sa brojnih službenih i privatnih putovanja koja su nas obogatila i dobrim i lošim iskustvima kada govorimo o najmu vozila, odlučili smo pokrenuti vlastiti posao kako bi pružili uslugu koja će biti prilagođena Vašim stvarnim potrebama. 
                        </p>                        
                        <p class="paragraph">
                            Kada govorimo o najmu vozila, na temelju vlastitih očekivanja i potreba, kreirali smo model poslovanja koji će ispuniti sva očekivanja naših klijenata bez astronomskih troškova i prikrivenih izdataka.
                        </p>
                        
                        <div>
                            <input type="checkbox" class="read-more-state" id="post-1" />
                            <p class="paragraph read-more-wrap">
                                Naš fokus je pružiti kvalitetnu uslugu po realnim cijenama i prihvatljivim uvjetima uz osiguranje potpune tehničke ispravnosti svakog vozila. Naime, osim što želimo biti pristupačni cjenovno, želimo steći i povjerenje klijenata i kvalitetom vozila koje nudimo.
                                <span class="read-more-target">                                
                                    Ujedno, shvaćamo da nije uvijek lako doći i preuzeti vozilo na određene i već unaprijed zadane lokacije, a što smo se i osobno nebrojeno puta uvjerili te smo se odlučili izaći u susret svima Vama koji nemate vremena voziti se do drugog dijela grada kako bi preuzeli vozilo. To ćemo učiniti mi umjesto Vas sukladno vašim željama i potrebama.
                                </span>
                                <span class="read-more-target">
                                    Naša misija je da nam poklonite povjerenje i to temeljem prepoznate kvalitete naših usluga te da nam se vratite opet!
                                    
                                </span>
                                
                            </p>
                            <label for="post-1" class="read-more-trigger"></label>
                        </div>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="img/opel-corsa.jpg" alt="" class="composition__photo composition__photo--p1"/>
                            <img src="img/ford-focus.jpg" alt="" class="composition__photo composition__photo--p2"/>
                            <img src="img/skoda-fabia.jpg" alt="" class="composition__photo composition__photo--p3"/>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="section-features">
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon fas fa-shuttle-van"></i>
                            <h3 class="heading-tertiary">Transferi</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis quisquam ad neque ipsa sed error nostrum magni.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon fas fa-car"></i>
                            <h3 class="heading-tertiary">Naruci voznju</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis quisquam ad neque ipsa sed error nostrum magni.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon fas fa-taxi"></i>
                            <h3 class="heading-tertiary">Taxy Zagreb</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis quisquam ad neque ipsa sed error nostrum magni.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon fas fa-car-alt"></i>
                            <h3 class="heading-tertiary">Prijevoz na posao</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis quisquam ad neque ipsa sed error nostrum magni.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-cars">
                <div class="center-text margin-bot-8">
                    <h2 class="heading-secondary">
                        Naša vozila
                    </h2>
                </div>
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                </div>
                                <h4 class="card__heading">
                                    Ford focus
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__side card__side--back card__side--back-1">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                </div>
                                <h4 class="card__heading">
                                    Opel astra
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__side card__side--back card__side--back-2">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                </div>
                                <h4 class="card__heading">
                                    Opel astra karavan
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__side card__side--back card__side--back-3">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--4">
                                </div>
                                <h4 class="card__heading">
                                    Opel Vivaro
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__side card__side--back card__side--back-3">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--5">
                                </div>
                                <h4 class="card__heading">
                                    Renault clio
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                <div class="card__side card__side--back card__side--back-1">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--6">
                                </div>
                                <h4 class="card__heading">
                                    Volkswagen Up!
                                </h4>
                                <div class="card__details">
                                    <ul class="card__details">
                                        <li>Godina proizvodnje: </li>
                                        <li>Vrsta goriva: </li>
                                        <li>Snaga motora: </li>
                                        <li>Karoserija: </li>
                                        <li>Broj vrata:</li>
                                        <li>Vrsta menjača:</li>
                                        <li>Kubikaža</li>
                                        <li>Klima uređaj:</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__side card__side--back card__side--back-2">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Već od</p>
                                            <p class="card__price-value">109,99 kn</p>
                                        </div>
                                        <a href="#" class="btn btn--white">Rezerviši</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-book">
                <div class="row">
                    <div class="col-1-of-2">
                        <div class="book">
                            <div class="book__form">
                                <form method="POST" action="#" class="form" id="book-form">
                                    <h3 class="book__heading">Popunite upit za rezervaciju vozila</h3>
                                    <div class="form__group">
                                        <input type="text" class="form__input" placeholder="Ime i prezime" id="name" required />
                                        <label for="name" class="form__label">Ime i prezime</label>
                                    </div>
                                    <div class="form__group">
                                        <input type="tel" class="form__input" placeholder="Kontakt telefon" id="phone" required />
                                        <label for="phone" class="form__label">Kontakt telefon</label>
                                    </div>
                                    <div class="form__group">
                                        <input type="email" class="form__input" placeholder="Email adresa" id="email" required />
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
                                                <input type='text' class="form-control" required />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                            <label class="form__label">Datum preuzimanja</label>
                                        </div>
                                        <div class="form__group center-text">
                                            <button class="btn btn--white">Pošalji</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-of-2">
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
        <footer class="footer">
            <div class="footer__logo-box">
                <img class="footer__logo" src="img/logo-blue.png" alt="">
            </div>
            <div class="row">
                <div class="col-1-of-1">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Početna</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Uvjeti najma</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Uvjeti korištenja</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Usporedbe sa leasingom</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Ostale usluge</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </footer>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </body>
    </html>