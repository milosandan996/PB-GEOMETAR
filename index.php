<?php
include './partials/header.php';
?>
<!--HEADER END-->

<!--MAIN START-->

<main>
    <?php
    include './partials/lead-section.php';
    ?>
    <section id="about" class="mb-s">
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-12 col-md-5 mb-6">
                    <h2 class="mb-5 animation text-uppercase text-left" data-animation="slideRight" style="font-size: 2.7rem;">
                        Profesionalci za geodetske usluge
                    </h2>
                    <p class="text-left animation" data-animation="slideRight">
                        Naša misija je da omogućimo klijentima da postignu svoje
                        ciljeve brzo i efikasno, pružanjem preciznih geodetskih usluga. 
                        „PB-GEOMETAR”  obavlja sve vrste geodetskih usluga, na 
                        teritoriji cele Srbije profesionalno, brzo i efikasno i 
                        deli besplatne stručne savete. 
                    </p>
                    <p class="text-justify animation" data-animation="slideRight">
                        Stojimo Vam na raspolaganju od ponedeljka do subote u periodu od 07h do 20h.
                    </p>
                    <p class="text-justify animation" data-animation="slideRight">
                        U zavisnosti od oblika, veličine, položaja i pristupačnosti
                        katastarske parcele ili objekta određuju se cene.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row mb-4 animation" data-animation="slideLeft">
                        <div class="col-3"">
                            <img width="100" height="100" src="images/inzenjerska-geodezija.jpg" alt="Slika nije ucitana"/>
                        </div>
                        <div class="col-9">
                            <h2 class="mb-4 text-left text-uppercase">Inžеnjerska geodezija</h2>
                            <p class="text-left ">
                                Računanje kubatura, kontrola temelja, praćenje sleganja 
                                objekata, trasiranje saobraćajnica i nivelacija terena.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4 animation" data-animation="slideLeft">
                        <div class="col-3">
                            <img  width="100" height="100" src="images/omedjavanje-parcele.jpg" alt="Slika nije ucitana"/>
                        </div>
                        <div class="col-9">
                            <h2 class="mb-4 text-left text-uppercase">Omeđavanje parcele</h2>
                            <p class="text-left">
                                Obnova granica katastarske parcele (poznatije kao omeđavanje 
                                zemljišta, parcele ili obeležavanje granice placa).
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4 animation" data-animation="slideLeft">
                        <div class="col-3">
                            <img  width="100" height="100" src="images/legalizacija-beograd.jpg" alt="Slika nije ucitana"/>
                        </div>
                        <div class="col-9">
                            <h2 class="mb-4 text-left text-uppercase">Legalizacija</h2>
                            <p class="text-left">
                                Kada objekat nije evidentiran u Katastru nepokretnosti,
                                a u cilju legalizacije objekta, potrebno je izraditi Elaborat geodetskih radova.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a class="butt glow1" href="geodetske-usluge.php">Pogledajte sve naše usluge &nbsp<i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
            </div>
        </div>
    </section>

    <?php
    include './partials/carousel-projekti.php';
    ?>

    <?php
    include './partials/contact-section.php';
    ?>

</main>

<!--MAIN END-->

<!--HEADER END-->
<?php
include './partials/footer.php';
?>