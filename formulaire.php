<!--  -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Profile">
    <meta name="keywords" content="Valérie Zamino, profile, animaux, vétérinaire, véto, Nigéria">
    <title>Contactez Valérie Honoré</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="val2.css" />

    <!--  -->

</head>

<body>

    <header>
        <nav class="nav nav-pills flex-column flex-sm-row">
<a class="flex-sm-fill text-sm-center nav-link active" href="valfr.html">Valérie Zamino</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="valfr.html#moi">Tout sur moi</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#formulaire">Contactez-moi</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="form.php">Français/English</a>
        </nav>
    </header>
   
    <section class="container-fluid section3 img-fluid pt-5" id="formulaire">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-center">Contactez-moi</h2>
                </div>
            </div>
            <form class="formulaire pt-5 pb-5" name="formulaire"   method="post" action="validate.php?lang==fr">
                <p>* Required field</p>
                <div class=" form-row">
                    <div class="form-group col-md-6">
                        <label class="" for="text">Prénom *</label>
                        <input type="text" id="prenom" name="firstname" class="form-control" placeholder="Prénom" autocomplete="given-name">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="" for="text">Nom *</label>
<input type="text" id="nom" name="lastname" class="form-control" placeholder="Nom" autocomplete="name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="" for="text">Numéro de téléphone *</label>
<input type="text" id="telephone" name="phone" class="form-control" placeholder="Numéro de téléphone"autocomplete="tel">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Pays</label>
                        <select name="country" class="form-control" id="exampleFormControlSelect1">
                            <option>France</option>
                            <option>Sénégal</option>
                            <option>Autre</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Addresse mail *</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com" autocomplete="email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Questions ou commentaires</label>
<textarea class="form-control" name="questions" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="ml-4">Comment voulez-vous être contacté.e ?</label>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios1" value="option1">
                            <label class="form-check-label" for="gridRadios1"> Par téléphone</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">Par email</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios1=3" value="option3">
                            <label class="form-check-label" for="gridRadios3">Autre</label>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                            <input id="monboutton" name=envoyer type="submit" class="btn btn-primary btn-lg center-block" value="Envoyer">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="text-center pt-2">
        <h3>Retrouvez-moi sur Facebook ou Twitter pour les dernières nouvelles !</h3>
        <a class="mr-3" href="https://www.facebook.com/valerie.zanimo"> <img src="media/fb_logo.png"  height="50px" width="50px" alt="logo de Facebook" 
/></a>
        <a class="ml-3" href="https://www.twitter.com/ValLupin"> <img src="media/twitter_logo.png" height="50px" width="50px" alt="logo de Twitter"
/></a>
    </footer>


    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $('#myTab li:last-child a').tab('show')
        })
    </script>

    <!-- <script type="text/javascript" src="verification.js"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>