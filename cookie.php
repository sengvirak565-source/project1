?>
<p><a href="nocookie.php">Click This Anchor Tag!</a></p>
<p>
<form action="nocookie.php" method="post">
  <input type="submit" name="click" value="Click This Submit Button!">
</form>
<p>Our Session ID is: <?php echo(session_id()); ?></p>
<pre>
<?php print_r($_SESSION); ?>
</pre>

