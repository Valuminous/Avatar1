<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Profile">
    <meta name="keywords" content="Valérie Zamino, profile, animals, vet, vetenarian, Nigeria">
    <title>Contact Valérie Honoré</title>
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
            <a class="flex-sm-fill text-sm-center nav-link active" href="index.html">Valérie Zamino</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="index.html#me">All about me</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#">Contact me</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="formulaire.php">Français/English</a>
        </nav>
    </header>
    <section class="container-fluid section3 img-fluid pt-5" id="form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-center">Contact me</h2>
                </div>
            </div>
            <form name="form" class="formulaire pt-5 pb-5" id="form" method="post" action="validate.php">
                <p>* Required field</p>
                <div class=" form-row">
                    <div class="form-group col-md-6">
                        <label class="" for="text">First name *</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
                      
                    </div>
                    <div class="form-group col-md-6">
                        <label class="" for="text">Last name *</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
                       
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="" for="text">Phone number *</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number">
                     
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Country</label>
                        <select id="country" class="form-control" name="country" id="exampleFormControlSelect1">
                            <span class="error">
                                <?= $country_error ?><span>
                                    <option>France</option>
                                    <option>Senegal</option>
                                    <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Mail address *</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                      
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Questions or comments</label>
                        <textarea class="form-control" name="questions" id="exampleFormControlTextarea1" rows="6"></textarea>
                   
                    </div>
                    <div class="form-group col-md-6">
                        <label class="ml-4">How would you like to be contacted?</label>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios1" value="option1">
                            <label class="form-check-label" for="gridRadios1">By phone</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">By mail</label>
                        </div>
                        <div class="ml-4 form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="gridRadios3" value="option3">
                            <label class="form-check-label" for="gridRadios3">Other</label>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                            <input type="submit" id="mybutton" class="btn btn-primary btn-lg center-block" value="submit">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="text-center pt-2">
        <h3>Follow me on Facebook or Twitter for the latest updates!</h3>
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