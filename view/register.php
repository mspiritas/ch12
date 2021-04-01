<?php 
    $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
    $_SESSION['userid'] = $firstname;
?>
<?php include('header.php'); ?>
<!-- Step 9 -->
<?php if (!$_SESSION['userid']) { ?>
    <!-- Step 5 -->
    <form action="welcome.php" method="get">
        <input type="hidden" action="register">
        <label>Please enter your first name:</label><br>
        <input class="center" type="text" name="firstname" maxlength="50" required><br>
        <input id="add_type_button" class="button" type="submit" class="button blue center" action="register" value="Register"><br>
    </form>
<?php } else {
    header("Location: .?action=welcome");
}
?>
<?php include('footer.php')?>