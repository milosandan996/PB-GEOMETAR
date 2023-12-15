<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
?>
<html lang="sr">
    <head>
        <title>
            <?php
            if ($curent == '/index.php' || $curent == '/') {
                echo 'PB-GEOMETAR BEOGRAD';
            } else if ($curent == '/projekti.php') {
                echo 'LEGALIZACIJA | OMEDJAVANJE | PARCELACIJA | GEOMETAR | RAKOVICA | RESNIK';
            } else if ($curent == '/geodetske-usluge.php') {
                echo 'GEOMETAR | VRČIN | BARAJEVO | RUŠANJ | ČUKARICA | RESNIK | SREMČICA | ŽELEZNIK';
            } else if ($curent == '/kontakt.php') {
                echo 'GEOMETAR | RUŠANJ | BARAJEVO | ČUKARICA | MELJAK | MILJAKOVAC | PINOSAVA | RAKOVICA PB-GEOMETAR';
            } else if ($curent == '/galerija.php') {
                echo 'GEOMETAR | RUSANJ | BARAJEVO | MILJAKOVAC | SREMČICA | PINOSAVA | ŽELEZNIK';
            } else if ($curent == '/katastarska-geodezija-barajevo-rusanj.php') {
                echo 'GEOMETAR | VRČIN | BARAJEVO | RUŠANJ | ČUKARICA | RESNIK | SREMČICA';
            } else if ($curent == '/inzenjerska-geodezija-rusanj-barajevo.php') {
                echo 'GEOMETAR | VRČIN | BARAJEVO | RUŠANJ | ČUKARICA | RESNIK | SREMČICA';
            } else if ($curent == '/legalizacija-ozakonjenje.php') {
                echo 'LEGALIZACIJA | RUŠANJ | BARAJEVO | SREMCICA | ŽELEZNIK | RAKOVICA | PINOSAVA';
            } else if ($curent == '/geodetski-snimak.php') {
                echo 'GEODETSKI SNIMAK | MILJAKOVAC | SREMČICA | BARAJEVO | RUŠANJ | ČUKARICA | VRČIN | MELJAK';
            } else if ($curent == '/geodetski-elaborat.php') {
                echo 'GEODETSKI ELABORAT | BEOGRAD | BARAJEVO | RIPANJ | MELJAK | ČIKARICA | RUŠANJ | MILJAKOVAC';
            } else if ($curent == '/omedjavanje.php') {
                echo 'OMEDJAVANJE | SOPOT | GEOMETAR | RUŠANJ | ŽELEZNIK | VRČIN | BARAJEVO | SREMČICA';
            } else if ($curent == '/parcelacija.php') {
                echo 'PARCELACIJA | GEOMETAR | RESNIK | RAKOVICA | ČUKARICA | VRČIN | ŽELEZNIK | RIPANJ | RESNIK ';
            } else if ($curent == '/ktp.php') {
                echo 'TOPOGRAFSKI PLAN | BEOGRAD | RUŠANJ | BARAJEVO | ČUKARICA | SREMČICA | MELJAK | PINOSAVA ';
            } else if ($curent == '/specifikacija-objekta.php') {
                echo 'SPECIFIKACIJA OBJEKTA | CUKARICA | RESNIK | BARAJEVO | MILJAKOVAC | RIPANJ | VRČIN';
            } else if ($curent == '/ucrtavanje-vodova.php') {
                echo 'UCRTAVANJE VODOVA | BEOGRAD | GEOMETAR | MELJAK | RAKOVICA | ŽELEZNIK';
            } else if ($curent == '/udaljenost-kladionica.php') {
                echo 'UDALJENOST KLADIONICA | BEOGRAD | GEOMETAR | SREMČICA | BARAJEVO | RAKOVICA | PINOSAVA';
            } else if ($curent == '/identifikacija-parcela.php') {
                echo 'IDENTIFIKACIJA PARCELA | RUŠANJ | BEOGRAD | RESNIK | ŽELEZNIK | MILJAKOVAC | RIPANJ';
            } else if ($curent == '/racunanje-kubatura.php') {
                echo 'RAČUNANJE KUBATURA | BEOGRAD |  RESNIK | BARAJEVO | ČUKARICA | RAKOVICA | PINOSAVA';
            } else if ($curent == '/obelezavanje-objekta.php') {
                echo 'OBELEZAVANJE OBJEKTA | SREMČICA | BARAJEVO | RESNIK | MILJAKOVAC';
            } else if ($curent == '/kontrola-temelja.php') {
                echo 'KONTROLA TEMELJA | RUŠANJ | GEOMETAR | ČUKARICA | RESNIK | ŽELEZNIK';
            } else if ($curent == '/kontrola-objekta.php') {
                echo 'KONTROLA OBJEKTA | RIPANJ | GEOMETAR | RUŠANJ | MELJAK | VRČIN | MILJAKOVAC';
            } else if ($curent == '/sleganje-objekta.php') {
                echo 'SLEGANJE OBJEKTA | SREMČICA | RUŠANJ | GEOMETAR | VRČIN | MELJAK';
            } else if ($curent == '/nivelacija-terena.php') {
                echo 'NIVELACIJA TERENA | BARAJEVO | SREMČICA | GEOMETAR | RESNIK|VRČIN';
            } else if ($curent == '/trasiranje-saobracajnica.php') {
                echo 'TRASIRANJE SAOBRAĆAJNICA | RUŠANJ | RIPANJ | GEOMETAR | BEOGRAD';
            } else if ($curent == '/401.php') {
                echo '401 Authorization Required';
            } else if ($curent == '/403.php') {
                echo '403 Forbidden';
            } else if ($curent == '/404.php') {
                echo '404 Not Found';
            } else if ($curent == '/500.php') {
                echo '500 Internal Server Error';
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan|milos.andan996@gmail.com">
        <meta name="description" content="
        <?php
        if ($curent == '/index.php' || $curent == '/') {
            echo 'Geometar Beograd, obavljamo sve vrste geodetskih usluga,
              Geodetski snimak, Elaborat geodetskih radova, Omedjavanje, Legalizaciju, Parcelaciju.';
        } else if ($curent == '/projekti.php') {
            echo 'Nova glavna železnička stanica „Beograd centar“ imaće staničnu zgradu sa parkingom (88 mesta), ukupne površine od 6200 kvadrata.';
        } else if ($curent == '/geodetske-usluge.php') {
            echo 'Naši inženjeri poseduju licence izdate od strane Republičkog geodetskog zavoda, kao i od Inženjerske komore Srbije.';
        } else if ($curent == '/kontakt.php') {
            echo 'PB-GEOMETAR | BEOGRAD , Stojimo Vam na raspolaganju od ponedeljka do subote u periodu od 07h do 20h. ';
        } else if ($curent == '/galerija.php') {
            echo 'Geometar Beograd, obavljamo sve vrste geodetskih usluga, Geodetski snimak, Elaborat geodetskih radova, Omedjavanje, Legalizaciju, Parcelaciju.';
        } else if ($curent == '/legalizacija-ozakonjenje.php') {
            echo 'Potrebna dokumentacija u postupku legalizacije objekta: Geodetski snimak i Elaborat geodetskih radova, izveštaj o zatečenom stanju, dokaz o uplati administrativne takse';
        } else if ($curent == '/geodetski-snimak.php') {
            echo 'Geodetski snimak po pravilu sadrži i visinsku predstavu terena, koja se može prikazati kotama i izohipsama.';
        } else if ($curent == '/geodetski-elaborat.php') {
            echo 'Elaborat geodetskih radova je niz dokumenata koji se izradjuju i predaju odgovarajućoj ustanovi.';
        } else if ($curent == '/omedjavanje.php') {
            echo 'Obnova granica katastarske parcele (omeđavanje) je postupak obnavljanja međnih tačaka parcele.';
        } else if ($curent == '/parcelacija.php') {
            echo 'Parcelacija je postupak kojim se vrši podela površine i oblika parcele u Katastru nepokretnosti.';
        } else if ($curent == '/ktp.php') {
            echo 'Katastarsko topografski plan služi kao podloga za projektovanje u građevinarstvu i urbanizmu.';
        } else if ($curent == '/specifikacija-objekta.php') {
            echo 'Specifikacija posebnih delova objekta je postupak kojim se uspostavlja vlasništvo na tačno određenom delu zgrade.';
        } else if ($curent == '/ucrtavanje-vodova.php') {
            echo 'Na osnovu izvedenog geodetskog merenja voda – instalacije radi se Geodetski elaborat za ucrtavanje vodova – instalacija i predaje u Katastar vodova na ucrtavanje.';
        } else if ($curent == '/udaljenost-kladionica.php') {
            echo 'Udaljenost kladionice, objekta igre na sreću od škole, obrazovne ustanove je obavezan dokument za rad koji izradjuje geometar, geodetska agencija, geodetski biro a overava nadležni Katastar.';
        } else if ($curent == '/identifikacija-parcela.php') {
            echo 'Identifikacija parcele je postupak kada stranka ima podakte o parceli ali ne zna ili nije sigurna gde se nalazi i kako pronaći katastarsku parcelu.';
        } else if ($curent == '/racunanje-kubatura.php') {
            echo 'Čest problem sa kojim se investitori i izvođači radova susreću je nemogućnost kontrole količina iskopa materijala odvezenog sa gradilišta ili materijala utrošenog za nasipanje.';
        } else if ($curent == '/obelezavanje-objekta.php') {
            echo 'Obeležavanje predstavlja postavljanje belega i pravaca koji definišu pozicije, slojeve i nivoe elemenata u izgradnji, tako da se radovi u toku gradnje mogu oslanjati na njih.';
        } else if ($curent == '/kontrola-temelja.php') {
            echo 'Kontrola temelja je obavezan postupak gde se proverava pozicija izvedenog temelja i njegova uskladjenost sa projektom.';
        } else if ($curent == '/kontrola-objekta.php') {
            echo 'Zapisnik o kontroli objekta potrebno je čuvati kao obavezni deo tehničke dokumentacije na gradilištu a i po završetku objekta, za dobijanje upotrebne dozvole i uknjižbu objekta.';
        } else if ($curent == '/sleganje-objekta.php') {
            echo 'Tokom vremena je potrebno periodično proveravanje sleganja objekta, tako što se uvek iznova meri visinska kota na ugrađenim reperima.';
        } else if ($curent == '/nivelacija-terena.php') {
            echo 'Nivelacija terena i linijskih objekata (saobraćajnica, kanala, platformi itd.) određuje se proračunom padova i poprečnih i podužnih profila u željenom pojasu.';
        } else if ($curent == '/trasiranje-saobracajnica.php') {
            echo 'Iskolčavanje trase predstavlja prenošenje na teren položaja, dimenzija i visina projektovanih osa i ostalih elemenata saobraćajnica, vodova i drugih linijskih objekata.';
        }
        ?>
              ">
        <meta name="keywords" content="geometar,geodeta,geodezija,omedjavanje,parcela,kubature,premer,geodetski elaborat,geodetski snimak, legalizacija, ozakonjenje">
        <?php
        if ($curent == '/index.php' || $curent == 'http://pb-geometar.rs' ) {
            echo '<link rel="canonical" href="https://pb-geometar.rs" />';
        }
        ?>
        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="PB-GEOMETAR BEOGRAD">
        <link rel="apple-touch-icon" href="iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="PB-GEOMETAR BEOGRAD">
        <link rel="icon" href="androidLogo.png">

        <!--CSS FILES-->

        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <!--HEADER START-->

        <header>
            <div id="top" class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand first-logo"  href="index.php">
                        <img class="logoHF" src="../pbgeometar.png" alt="Logo nije ucitan"/>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item mb-3 mb-md-0 animation <?php
                            if ($curent == '/index.php' || $curent == '/') {
                                echo 'active';
                            }
                            ?>" data-animation="slideDown5">
                                <a class="nav-link" href="index.php">o nama</a>
                            </li>
                            <li class="nav-item ml-md-5 mb-3 mb-md-0 animation <?php
                            if ($curent == '/geodetske-usluge.php' || $curent == '/katastarska-geodezija-barajevo-rusanj.php' ||
                                    $curent == '/inzenjerska-geodezija-rusanj-barajevo.php' || $curent == '/legalizacija-ozakonjenje.php' ||
                                    $curent == '/geodetski-snimak.php' || $curent == '/geodetski-elaborat.php' ||
                                    $curent == '/omedjavanje.php' || $curent == '/parcelacija.php' || $curent == '/ktp.php' ||
                                    $curent == '/specifikacija-objekta.php' || $curent == '/ucrtavanje-vodova.php' ||
                                    $curent == '/udaljenost-kladionica.php' || $curent == '/identifikacija-parcela.php' ||
                                    $curent == '/racunanje-kubatura.php' || $curent == '/obelezavanje-objekta.php' ||
                                    $curent == '/kontrola-temelja.php' || $curent == '/kontrola-objekta.php' ||
                                    $curent == '/sleganje-objekta.php' || $curent == '/nivelacija-terena.php' ||
                                    $curent == '/trasiranje-saobracajnica.php') {
                                echo 'active';
                            }
                            ?>" data-animation="slideDown4">
                                <a class="nav-link" href="geodetske-usluge.php">usluge</a>
                            </li>
                            <li class="nav-item ml-md-5 mb-3 mb-md-0 animation <?php
                            if ($curent == '/projekti.php') {
                                echo 'active';
                            }
                            ?>" data-animation="slideDown3">
                                <a class="nav-link" href="projekti.php">projekti</a>
                            </li>
                            <li class="nav-item ml-md-5 mb-3 mb-md-0 animation <?php
                            if ($curent == '/kontakt.php') {
                                echo 'active';
                            }
                            ?>" data-animation="slideDown2">
                                <a class="nav-link" href="kontakt.php">kontakt</a>
                            </li>

                            <li class="nav-item ml-md-5 mb-3 mb-md-0 animation actives" data-animation="slideDown">
                                <a class="nav-link header-phone " href="tel:00381642417437">
                                    064/24-17-437
                                    <br>
                                    Pozovite nas!
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </header>
