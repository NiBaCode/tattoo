<!doctype html>
<html lang="en">

<head>
    <?php include "inc_css.php"; ?>
    <title>Tattoo - Contatti</title>
</head>

<body id="body-no-home">

<?php 
$menu3 = "active";
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

                <div class="col title-page mx-auto">Contatti</div>
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
<style>
.required {border:solid 1px red !important;}

</style>
    <script>
        $(document).ready(function() {

            $('#form-contact2 button[type=button]').click(function() {

                controllo = true;
                $('#form-contact2 input').removeClass('required');

                nome = $('#nome2').val();
                if (nome == "")
                {
                    controllo = false;
                    $('#nome2').addClass('required');
                }
                email = $('#email2').val();
                if (email == "")
                {
                    controllo = false;
                    $('#email2').addClass('required');
                }
                messaggio = $('#messaggio2').val();
                if (messaggio == "")
                {
                    controllo = false;
                    $('#messaggio2').addClass('required');
                }

                if (controllo)
                {
                    var dataString = 'nome='+ nome + '&email=' + email + '&messaggio=' + messaggio;

                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: dataString,
                        success: function(data){
                            x = "";
                            if (data != "")
                                x = '<div class="alert alert-success">'+data+'</div>';
                            
                            $('#esito').html(x);
                        }
                    });
                }
                else
                {
                    $('#esito').html('<div class="alert alert-danger">Compila tutti i campi</div>');
                }
            });

        });
    </script>
</body>

</html>