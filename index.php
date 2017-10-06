<!DOCTYPE html>
<html>
<head>
    <?php include 'partials/head.php'; ?>
</head>

<body data-spy="scroll" data-target=".navbar">
<div class="container-fluid">
    <header>
        <?php include 'partials/header.php'; ?>
    </header>

    <!--SECTION HOME-------------------------->

    <div class="row" id="home">
        <h1 class="title-section">[m4r]</h1>
        <div class="row">
            <p class="sTitle">Développeuse Php Symfony</p>
        </div>

        <!--SCROLL ICON------------->


        <div class="row">
            <div class="col-xs-12 center-block text-center">
                <a href="#portfolio"><span id="scrollIcon" class="front-glyph glyphicon glyphicon-menu-down"
                                           aria-hidden="true"></span></a>
            </div>
        </div>
    </div>


    <!--SECTION PORTFOLIO--------->

    <div class="row" id="portfolio">
        <h1 class="title-section-2">[Portfolio]</h1>
        <div class="container ">
            <div class="row article">
                <div class="col-sm-5 text-center">
                    <h2>Compagnie Kotekan</h2>
                    <p class="p-section-2">Site de la compagnie Kotekan :<br/> gamelan, musique collective.</p>
                    <a class="btn btn-rounded " href="http://www.kotekan.fr" role="button">View Project</a>
                </div>
                <div class="col s7 text-center">
                    <img src="img/logo_kotekan.jpg" alt="">

                </div>
            </div>
            <div class="row article">
                <div class="col-sm-7 text-center">
                    <img src="img/logo_fbz.png" alt="">

                </div>
                <div class="col s5 text-center">
                    <h2>Compagnie Foulbaz'Art</h2>
                    <p class="p-section-2">Site de la Compagnie Foulbaz'Art : <br/> les arts du spectacles en milieu
                        rural.</p>
                    <a class="btn btn-rounded " href="http://www.foulbazart.org" role="button">View Project</a>
                </div>
            </div>
        </div>
    </div>


    <!--SECTION CONTACT----------------->

    <div class="row" id="contact">
        <h1 class="title-section-3">[Cont4ct]</h1>
        <!--FORMULAIRE------------------->
        <div class="row">
            <div>
                <form class="Form col s4 offset-s4" id="contact-form" method="post" action="">

                    <div class="field">
                        <label for="doge" class="field-label">Nom</label>
                        <input type="text" id="doge" name="doge" class="field-input" required="required"
                               data-error="Veuillez ecrire votre nom">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="field">
                        <label for="doge" class="field-label">Prénom</label>
                        <input type="text" id="doge" name="doge" class="field-input" required="required"
                               data-error="Veuillez ecrire votre prénom">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="field">
                        <label for="doge" class="field-label">Email</label>
                        <input type="email" id="email" name="email" class="field-input" required="required"
                               data-error=" merci d'indiquer votre mail ex:  nom@domaine.fr">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="field">
                        <textarea name="message" class="form-control" placeholder="Votre Message" rows="4"
                                  required="required"
                                  data-error="Entrez votre message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <!--BUTTON-->
                    <div class="Send_Retry">
                        <input type="submit" class="btn btn-default btn-send" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--SECTION RESEAU---------------------->

    <div class="row" id="reseaux">
        <h1 class="title-section-2">[Rese4u] </h1>
        <div class="btn-reseaux">
            <a href="https://github.com/m4rthiz/"><i class="fa fa-github" style="font-size:106px"></i></a>
            <a href="https://www.linkedin.com/in/mariethizy/"><i class="fa fa-linkedin" style="font-size:106px"></i></a>
            <a href="https://twitter.com/thizm4r"><i class="fa fa-twitter" style="font-size:106px"></i></a>
        </div>
    </div>

    <!--FOOTER------------------------>
    <footer>
        <?php include 'partials/footer.php'; ?>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>
