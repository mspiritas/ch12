<?php
    //local development server connection
    $dsn = 'mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dpiofwiklt0wbc6m';
    $username = 'cmhejv54yxrmw9kh';
    $password = 'ggg8gakj5wltu58o';

    // Heroku connection
    /* 
    $dsn = 'mysql:host=AVeryLongURLprovidedforJawsDBhost;dbname=YourJawsDBdbname';
    $username = 'Your JawsDB username';
    $password = 'Your JawsDB password'; */
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        $db = new PDO($dsn, $username);

        // Heroku connection
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>
