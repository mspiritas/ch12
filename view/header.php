<?php 
    $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
    $_SESSION['userid'] = $firstname;

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'list_vehicles';
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
    <main>
        <header>
            <!-- Step 10 / 11 -->
            <?php if ($action != 'register' && !isset($_SESSION['userid'])) { ?>
            <!-- Step 3 / 4-->
            <p class="right-align"><a href="view/register.php" action="register">Register</a></p>
            <h1>Zippy Used Autos</h1>
            <?php } else if (isset($_SESSION['userid']) && ($action != 'register' || $action != 'logout')) { ?>
                <!-- Step 12 -->
                <p>Welcome, <?php echo $_SESSION['userid'] ?>! (<a href="view/logout.php" action="logout">Sign Out</a>)</p><br>
            <?php } ?>
        </header>

        