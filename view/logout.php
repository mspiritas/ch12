<?php $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING); ?>

<p class="personalmessage">Thanks for logging out, <?php echo $firstname ?>.</p><br>
<a href="../index.php">Click here to view our vehicles</a>