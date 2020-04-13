<header>
    <div class="logo"></div>

    <div class="inloggenheader">
            <!--Moet weg zijn bij kleine schermgrootte en/of wanneer je hebt ingelogd-->

            <?php
            session_start();
            $berichtentekst = "";


            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

                include("header_loginregister_button.php");
            } else {
                if ($_SESSION["isstaff"] == true)
                {
                    $berichtentekst = '<a class="dropdown-item" href="./index.php?content=panel">Administratie</a>';
                }
                
                print(
                    '<div class="dropdown">                    
                    <a href="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . 
                    'Welkom, ' . $_SESSION["username"] .    
                    '<img src="./img/dropdownicon.png" alt="">' .
                        
                    '</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="./index.php?content=panel">Profiel en berichten</a>'
                        . $berichtentekst .
                        '<a class="dropdown-item" href="./phpscripts/logout.php">Uitloggen</a>
                        <hr>
                        <b class="ml-3">rol: ' . $_SESSION["userrole"] . '</b>
                        
                    </div>
                </div>
                
                ');
            }

            ?>
</header>