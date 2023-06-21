<!doctype html>
<html lang="en">

<head>
    <?php include "inc_css.php"; ?>
    <title>Tattoo - Servizi</title>
</head>

<body id="body-no-home">

<?php 
$menu4 = "active";
include "inc_header.php";
?>


    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="container-fluid">
            <div class="offcanvas-header">



                <button type="button" class="btn btn-close-canvas ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="col mx-auto text-center img-offcanvas"><img class="img-fluid"
                            src="assets/img/logo-sidearea.png" alt=""></div>
                    <div class="row social-off-canvas justify-content-center mx-auto">
                        <div class="col-auto"><a href="https://www.facebook.com">fb.</a></div>
                        <div class="col-auto"><a href="https://www.twitter.com">tw.</a></div>
                        <div class="col-auto"><a href="https://www.instagram.com">In.</a></div>
                        <div class="col-auto"><a href="https://www.pinterest.it">pin.</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid">

            <div class="jarallax parallasse5" style="background-image: url('assets/img/contact-title-img.jpg');">

                <div class="col title-page mx-auto">Servizi</div>
            </div>


        </div>
    </section>



    <section id="modulo_contatti">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="frase-emozionale">We are here for you</div>
                    <h5>Book anytime</h5>
                    <p>Lorem ipsum dolor sit amet, id his hinc quodsi, mollis ali enum epicuri at duo. Ornatus volumus omittam mei cu commodo principes disputationi</p>
                    <div class="row contentitore-orari">
                        <div class="col data">Monday-friday</div>
                        <div class="col orario text-end">9am > 9pm</div>
                    </div>
                    <div class="row contentitore-orari">
                        <div class="col data">Saturday</div>
                        <div class="col orario text-end">9am > 3pm</div>
                    </div>
                    <div class="row contentitore-orari">
                        <div class="col data">Sunday</div>
                        <div class="col orario text-end">closed</div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-center luogo-locale">Via Lorem ipsum +1-202-555-0133</div>
                        <div class="col-6 text-center luogo-locale">Via Lorem ipsum +1-202-555-0133</div>
                    </div>

                </div>
               
                    <form class="col-md-6 mx-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" id="enterName" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp"
                                placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" cols="30" rows="7"
                                placeholder="Message"></textarea>
                        </div>
            
                    </form>
                    <a href="#" class="btn btn-page">Send</a>
               

            </div>



        </div>
    </section>


    <section id="google-maps">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24185.068729516566!2d-74.00895100929884!3d40.73708587705507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25993e5b7bf05%3A0xb81c927a366c2fcc!2sWest%204%20Tattoo!5e0!3m2!1sit!2sit!4v1652104528882!5m2!1sit!2sit"
            width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>


    <?php include "inc_footer.php"; ?>

    <?php include "inc_js.php"; ?>


</body>

</html>