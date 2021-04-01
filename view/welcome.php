<?php 
    $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
    $_SESSION['userid'] = $firstname;
?>

<p class="personalmessage">Thanks for registering, <?php echo $_SESSION['userid']; ?>.</p><br>
<a href="../index.php">Click here to view our vehicles</a>