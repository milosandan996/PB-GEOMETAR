<?php
include './partials/header.php';
?>
<!--HEADER END-->

<!--MAIN START-->

<main>
    <?php
    include './partials/lead-section.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="map col-12 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11347.078005562!2d20.4388166!3d44.6834864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a71d20ea68f05%3A0x9899c82d35e3119d!2sPB-GEOMETAR!5e0!3m2!1ssr!2srs!4v1688576303172!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-lg-6">
                <?php
// Povezivanje na bazu podataka
                $servername = "localhost";
                $username = "pbgeometrs";
                $password = "vE^aS3bm3E,F";
                $database = "pbgeometrs_forma";

                $conn = new mysqli($servername, $username, $password, $database);

// Provjera konekcije
                if ($conn->connect_error) {
                    die("Konekcija na bazu podataka nije uspjela: " . $conn->connect_error);
                }

                if (isset($_POST['poruka'])) {
                    $telefon = $_POST['telefon'];
                    $email = $_POST['email'];
                    $poruka = $_POST['poruka'];

                    // Prihvaćanje podataka iz forme
                    // SQL upit za unos podataka u bazu
                    $sql = "INSERT INTO kontakt (telefon, email, poruka) VALUES ('$telefon', '$email', '$poruka')";

                    if ($conn->query($sql) === TRUE) {
                        echo "USPEŠNO STE POSLALI VAŠE PODATKE";
                    } else {
                        echo "<h2>Greška pri unosu podataka u bazu:</h2> " . $conn->error;
                    }
                    $to = "balanovicpetar1982@gmail.com";
                    $subject = "Poruka sa web forme";
                    $message = "Telefon: $telefon\nEmail: $email\nPoruka: $poruka";

                    // Slanje e-maila
                    mail($to, $subject, $message);

                    // Zatvaranje konekcije na bazu
                    $conn->close();
                } else {
                    
                }
                ?>

                <form id="form" method="post" action="">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <label for="email">*EMAIL</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required="">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="phone">KONTAKT TELEFON</label>
                            <input type="text" class="form-control" name="telefon" id="phone" placeholder="06012345678">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="message">*VAŠA PORUKA</label>
                            <textarea class="form-control" name="poruka" id="message" placeholder="Poruka" required="" rows="5"></textarea>
                        </div>
                        <div class="text-center m-4">
                            <button class="butt" type="submit"><b>Pošaljite</b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include './partials/contact-section.php';
    ?>
</main>

<!--MAIN END-->

<!--HEADER END-->
<?php
include './partials/footer.php';
?>