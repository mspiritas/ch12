<?php $firstname = filter_input(INPUT_GET, $_SESSION['userid'], FILTER_SANITIZE_STRING); ?>

<p class="personalmessage">Thanks for logging out, <?php echo $_SESSION['userid'] ?>.</p><br>
<a href="../index.php">Click here to view our vehicles</a>