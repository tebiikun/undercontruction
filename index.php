<!DOCTYPE html>
<html lang="en" id="principal">
  <head>
    <title>Autominuto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <style type="text/css">
      /* se sobrescribe el useragent */

      html, body {
       height: 100% !important;
    }
    html {
        overflow-y: hidden;
    }
    body {
	  overflow-y: auto;

		margin:0px;
		background: url('autominuto-under-construction-fondo.jpg') center center;
		background-attachment: fixed;
		width: 100%;
		height: 100%;
		min-width: 100%;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

      .subscribe-responsive-inner{
        width:20%;
      }
      .subscribe-responsive-inner>input{
        width:100%;
      }

      .subscribe-responsive-outer{
        display:none;
      }

      .subscribe-container{
        width: 100%;
        background-color: #ededed;
        border: 5px solid #ededed;
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0 auto;
        border-radius: 50px;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
      }

      .input-subscribe{
        height: 50px;
        background-color: #283d50;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.13em;
      }

      .email-subscribe{
          width: 80%;
          background-color: transparent;
          padding: 0px 10px 0px 20px;
          color: #000;
      }

      .email-subscribe>input{
        width: 100%;
        height: 50px;
        border: none;
        outline: 0px;
        background-color: transparent;
      }

      .rounded{
        border-radius: 50px;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border: 0px solid #000000;
      }



      h5{
        font-family: 'Montserrat', sans-serif;
        font-size: 1.30em;
        margin: 0 0px 15px 0;
        font-weight: 500;
        -webkit-font-smoothing: antialiased;
        letter-spacing: 0.3;
      }
      .construction{
        margin-top: 15%;
      }
      .construction>div{
        display: flex;
        justify-content: center;
        align-items: center;
        color:#fff;
      }
      .padding-30{
        padding: 30px;
      }

      .logo-principal{
        width:100%;
      }

      .icons-redes{
        display: flex;
        -webkit-justify-content: space-between;
        justify-content: space-between;
      }

      .padding-top-50{
        padding-top: 50px;
      }

      .bottom-align{
		  margin-top: 150px;
		  margin-bottom: 80px;
      }

      .margin-top-10{
        margin-top: 10px;
      }

      .border-solid{
        border:1px solid #fff;
      }
      .subscribe-text{
        text-align: center;
        color: #fff;
      }
	}


	/* Smartphones (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {


}

/* Smartphones (landscape) ----------- */
@media only screen
and (min-width : 321px) {
/* STYLES GO HERE */
}

/* Smartphones (portrait) ----------- */
@media only screen
and (max-width : 320px) {
/* STYLES GO HERE */
}

/* iPads (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px) {
/* STYLES GO HERE */
}

/* iPads (landscape) ----------- */
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
and (orientation : landscape) {
/* STYLES GO HERE */
}

/* iPads (portrait) ----------- */
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
and (orientation : portrait) {
/* STYLES GO HERE */
}

/* Desktops and laptops ----------- */
@media only screen
and (min-width : 1400px) {
/* STYLES GO HERE */

}

/* Large screens ----------- */
@media only screen
and (min-width : 1824px) {
/* STYLES GO HERE */
}

/* iPhone 5 (portrait & landscape)----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 568px) {
/* STYLES GO HERE */
}

/* iPhone 5 (landscape)----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 568px)
and (orientation : landscape) {
/* STYLES GO HERE */
}

/* iPhone 5 (portrait)----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 568px)
and (orientation : portrait) {
/* STYLES GO HERE */

}

@media only screen and (max-width: 480px) {

        .input-subscribe{
          padding-left: 10px !important;
          padding-right: 10px !important;
          height: 38px !important;
          width: 100%;
        }

        .subscribe-responsive-inner{
          display:none !important;
        }

        .subscribe-responsive-outer{
          display:block !important;
        }

        .subscribe-responsive-outer>input{
          border: 2px solid #fff;
        }

        .email-subscribe{
          width: 100% !important;
          float: left;
        }

        .email-subscribe>input{
          height: 25px !important;
        }

        h5{
          font-family: 'Montserrat', sans-serif;
          font-size: 1.10em !important;
          margin: 0 0px 15px 0;
          font-weight: 500;
          -webkit-font-smoothing: antialiased;
          letter-spacing: 0.3;
        }

      }

@media only screen and (max-width: 667px) {

        .email-subscribe{
          width: 65% !important;
      }
	  .subscribe-responsive-inner{
		  width: 35% !important;
	  }

      }


        </style>

  </head>
  <body>

    <div class="container" style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
      <div class="row construction" style="margin-top: 0;">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 ">
          <img src="autominuto-under-construction-logo.png" class="logo-principal"/>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
          <div class="col-md-4 col-sm-10 col-xs-10 icons-redes padding-top-50">
            <a target="_blank" href="http://twitter.com/autominuto/">
                <img src="autominuto-twitter.png"  alt="Twitter" title="Twitter"/>
            </a>
            <a target="_blank" href="https://www.facebook.com/autominuto/">
                <img src="autominuto-facebook.png" alt="Facebook" title="Facebook"/>
            </a>
            <a target="_blank" href="https://es.pinterest.com/autominuto/">
                <!-- TODO: modificar por imagen pinterest -->
                <img src="autominuto-pinterest.png"  alt="Pinterest" title="Pinterest"/>
            </a>
            <a target="_blank" href="https://www.instagram.com/autominuto/">
                <!-- TODO: modificar por imagen instagram -->
                <img src="autominuto-instagram.png"  alt="Instagram" title="Instagram"/>
            </a>
            <a target="_blank" href="http://www.autominuto.com/blog/">
                <!-- TODO: modificar por imagen blog -->
                <img src="autominuto-blog.png"  alt="Nuestro blog" title="Nuestro blog"/>
            </a>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 100px;">
        <form name="index.php" action=""  method="post">

          <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
            <div class="subscribe-text">
                <label><h5>Suscribirte a nuestro newsletter y recib&iacute; las mejores promos y novedades en tu mail</h5></label>
            </div>
            <div class="subscribe-container">
              <div class="email-subscribe" style="float: left;">
                <input type="text" name="email" />
              </div>
              <div class="subscribe-responsive-inner" style="float: right;">
                <input type="submit" name="enviar" id="enviar" class="rounded input-subscribe" style="" value="Suscribirse ahora">
              </div>
            </div>

            <div class="subscribe-responsive-outer margin-top-10">
              <input type="submit" name="enviar" id="enviar" class="rounded input-subscribe" style="" value="Suscribirse ahora">
            </div>

          </div>

        </form>

    <?php
     if (isset($_POST['enviar'])) {
             $mail = $_POST['email'];
       print($mail);
             if(!file_put_contents("manypeopleemails.txt", $mail.PHP_EOL, FILE_APPEND)){
        echo "fail file";
             }
          }
    ?>

      </div>

    </div>

  </body>
</html>
