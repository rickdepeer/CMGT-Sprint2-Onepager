<?php

$message = (!empty($_GET['message']) ? $_GET['message'] : '');

switch($message)
{
    case "succes":
        $message = "<b>Uw bericht is verzonden!</b> Bedankt voor de feedback";
        break;
    case "sql_error":
        $message = "Uw bericht is helaas niet opgeslagen, probeer het a.u.b opnieuw.";
        break;
    case "var_error":
        $message = "Een van de velden is niet ingevuld. Vul deze in en probeer het opnieuw";
        break;
    default:
        break;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SMART-viltje</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="css/extra.css">
        <link rel="stylesheet" href="js/jquery-ui.css">
        <link rel="stylesheet" href="js/jquery-ui.structure.css">
        <link rel="stylesheet" href="js/jquery-ui.theme.css">
    </head>
    <body>
        <div id="navbar">
            <ul class="nav justify-content-end">
                <li class="brand">
                    <img src="img/beeldmerk_smartviltje100x100.svg">
                </li>
                <li class="nav-item">
                    <a class="nav-link pulse active" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pulse" href="#concept">Concept</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pulse" href="#info">Infographic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pulse" href="#about-us">Over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pulse" href="#contact">Contact</a>
                </li >
            </ul>
        </div>
        <div id="fullpage">
            <div id="home" class="section">
                <div class="logo">
                    <img src="http://via.placeholder.com/600x400">
                </div>
                <div id="quote">
                    <p>"Deze revolutionaire onderzetter zal de toekomst
                        van kroeggangers in duizendvoud verbeteren."
                    </p>
                </div>
            </div>
            <div id="about-us" class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <img id="about-us-img" src="http://via.placeholder.com/400x600">
                        </div>
                        <div class="col-6">
                            <div id="about-us-text">
                                <h2>Over ons</h2>
                                <p>
                                    Wij zijn een <b style="color: blue;">Jansenio</b>, <b style="color: greenyellow;">Irene</b>, <b style="color: lightblue;">Lotte</b> en <b style="color: orange;">Rick</b>. Wij studeren aan de Hogeschool Rotterdam op de opleiding <b>Creative & Interactive Media & Game Technologiess</b>.
                                    Hier hebben wij de opdracht gekregen om een <b>smart-opject</b> te maken.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="info" class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-5">
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-5">
                        </div>
                    </div>
                </div>
            </div>
            <div id="concept" class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div id="concept-text" class="float-right">
                                <h2> Het SMART Viltje</h2>
                                <p>
                                    Het smart viltje is de uitvinding voor de moderne kroeg. Met behulp van een druksensor weet het smart viltje dat er een glas staat.
                                    Het ziet ook gelijk hoe vol die staat en hoelang.
                                    En met een LED ring word er aangegeven met kleuren of het biertje warm begint te worden als waarschuwing voor de klant zowel als de bartender.
                                    De klant kan met die informatie besluiten of hij/zij het biertje nog wilt opdrinken en/of een bartender kan vragen aan de klant of hij/zij een nieuwe biertje wilt hebben.
                                    Want je kan natuurlijk in alle gezelligheid met je vrienden vergeten dat je biertje er nog staat.
                                </p>
                                <p>
                                    <h3>Scenario</h3>
                                    Een klant besteld een biertje en plaatst die op het smart viltje.
                                    Het smart viltje ziet dat het een volle glas is en begint een timer om te kijken hoelang die blijft staan.
                                    De LED ring geeft vrolijke kleuren van dat je biertje er staat.
                                    Als de klant het biertje na ongeveer 15 min heeft laten staan dan veranderd de kleur van de LED ring naar rood als indicator dat het biertje warm is en niet meer lekker is om te drinken.
                                    Een bartender kan van een afstand zien dat er op tafel 5 een warm biertje staat en de klant vragen of hij een nieuw biertje wilt hebben.
                                    Hiermee versnel het proces van et bestellen van een biertje en je behoudt het persoonlijke gesprek tussen de klant en de bartender.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img id="concept-img" src="http://via.placeholder.com/400x600">
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact" class="section">
                <div class="container-fluid">
                        <form name="contact-form" method="post" action="contact.php">
                            <div class="contact-contents">
                                <h2>Contact</h2>
                                <?php
                                    if(!empty($message))
                                    {
                                ?>
                                <div class="contact-feedback">
                                    <div class="alert alert-primary" role="alert">
                                        <?= $message ?>
                                    </div>
                                </div>
                                <?php } ?>
                                <table id="contact-table">
                                    <tr>
                                        <td><input type="text" class="form-control" name="name" placeholder="Naam"></td>
                                        <td rowspan="2"><textarea class="form-control" name="message" placeholder="Uw bericht"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="email" placeholder="E-mail"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" class="btn btn-primary float-right" name="submit" value="Verzenden!"></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <script src="https://use.fontawesome.com/a12af9a02f.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/jquery.fullPage.js"></script>
        <script src="js/ready.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
