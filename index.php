<!doctype html>
<html lang="en">

<head>
    <?php include "inc_css.php"; ?>
    <title>Tattoo</title>
</head>


<body>
<?php

echo $_GET["nome"]." ".$_GET["cognome"];
?>

<?php 
$menu1 = "active";
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
                        <div class="col-auto"><a href="https://www.pinterest">pin.</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid">
            <div class="jarallax parallasse1" style="background-image: url('assets/img/h6-rev-img-1.jpg');">
                <div class=" col arrow-scroll "><a href="#about-us" ><img class="img-fluid" src="assets/img/h6-rev-img-2.png" alt=""></a></div>
                <div class="col text-scroll mx-auto"><a  href="#about-us" style=" text-decoration:none; color: white;" >scroll down</a></div>
            </div>


        </div>
    </section>




    <section id="about-us">
        <div>
            <p id="emotional"> We are here for you</p>
            <h2>INKING IS LIFE BY PEPPINO</h2>
        </div>
        <div class="col-md-5 mx-auto m-3" id="subtitle">“Lorem ipsum dolor sit amet, id his hinc quodsi, mollis ali enum
            epicuri at duo. Or natus vo lumus omit tam mei cu com modo principes di sputatio ni.”</div>
        <div class="col-md-6 mx-auto m-3" id="text-desription">At augue tem por epicuri vel, modu or natus mi nimum pro
            eu. At vim veniam singulis, mutat vitu per atoribu sea vis. Amet eripuit pete tium sit eu. Ad huc facilis
            nam no. Qui con stit uto com prehe isam te, ut vel libris scripta dis cere, dicunt al ienum cum no. Ne cum
            modus qu aestio. Sca evola ad ipisci eg cu est, ne sed illud pha edrum pe rpetua, eos illud aliquam in. At
            de nique re pudiare com pre he sam eam, noster ceteros sen tentiae pri cu, his cu ridens dicunt. Eros gl
            oriatur at cum, eam eu vidit scripserit.</div>
        <a href="chi-siamo.html" class="btn btn-page">read more</a>
    </section>







    <section>
        <div class="container-fluid">
            
                <div class="jarallax parallasse2" style="margin-bottom:50px; background-image: url('assets/img/h6-img-1-2.jpg');">
            </div>

        </div>
    </section>
    <section>
        <div class="container-fluid">
           
                <div class="jarallax parallasse3" style=" margin-bottom:50px; background-image: url('assets/img/h6-img-2-2.jpg');">
                

            </div>

        </div>
    </section>
    <section>
        <div class="container-fluid">
           
                <div class="jarallax parallasse4" style="background-image: url('assets/img/h6-img-3-2.jpg');">

            </div>

        </div>
    </section>





    <section id="contact">
        <div>
            <p id="emotional"> We are here for you</p>
            <h2>BOOK ANYTIME</h2>
        </div>
        <div class="col-md-5 mx-auto m-3" id="subtitle">“Lorem ipsum dolor sit amet, id his hinc quodsi, mollis ali enum
            epicuri at duo. Or natus vo lumus omit tam mei cu com modo principes di sputatio ni.”</div>
        <form class="col-md-5 mx-auto ">
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
    </section>

    <section id="google-maps">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24185.068729516566!2d-74.00895100929884!3d40.73708587705507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25993e5b7bf05%3A0xb81c927a366c2fcc!2sWest%204%20Tattoo!5e0!3m2!1sit!2sit!4v1652104528882!5m2!1sit!2sit"
            width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <?php include "inc_footer.php"; ?>
    <?php include "inc_js.php"; ?>
    
    <script>

$(document).ready(function() {
    $('.smooth-link').click(function() {
        destination = $(this).attr("href");
        $('html,body').animate({
            scrollTop: $(destination).offset().top
        },5000);
    });
});

</script>
    
</body>

</html>