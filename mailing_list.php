<html>
<body>

Your email address is: <?php echo $_POST["email"]; ?>

<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

mail("wimpsmail@gmail.com","My subject",$msg);
?>
</body>
</html>