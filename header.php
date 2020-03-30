<header>
    <div class="logo"></div>

    <div class="inloggenheader">
        <div class="inloggenregistreren">   <!--Moet weg zijn bij kleine schermgrootte en/of wanneer je hebt ingelogd-->
          
          <?php 
          session_start();

          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

            include("header_loginregister_button.php");
       
            }
            else {
                print('Welkom, ' . $_SESSION["username"] .
                '<a href="./logout.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Uitloggen</a>
                '
            );
            }
            
            ?>
        
        </div>  <!--zie je ipv inloggenenregistreren wanneer je bent ingelogd, bij kleine schermgrootte zie je dit ook zonder ingelogd te zijn en krijg je een inlogscherm-->
        <button type="button" class="btn btn-light profielklein ">
            <img src="./img/icon.png" alt="profiel" class="profielklein">
        </button>
        <!-- profiel? -->
    </div>

</header>