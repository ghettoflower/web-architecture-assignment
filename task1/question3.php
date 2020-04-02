<?php
if (!isset($_COOKIE["firstVisitTime" ])) {
  setcookie("firstVisitTime" , time(), time() + 60 * 60 * 24 * 365,"" ,"" );
}
?>original work by us
<html>
  <head>
    <title>Remembering the first visit with cookies</title>
  </head>
  <body>
    <h2>Remembering the first visit with cookies</h2>

<?php if (isset($_COOKIE["firstVisitTime" ])) {
  $elapsedTime = time()-$_COOKIE["firstVisitTime" ];
  $elapsedTimeMinutes = (int) ($elapsedTime / 60);
  $elapsedTimeSeconds = $elapsedTime % 60;
?>
    <p>Hi there! You first visited this page <?php echo $elapsedTimeMinutes ?>
 minute<?php echo $elapsedTimeMinutes != 1 ?"s" :" " ?> and <?php echo
$elapsedTimeSeconds ?> second<?php echo $elapsedTimeSeconds != 1 ?"s " :" " ?>
ago.</p>
<?php } else { ?>
    <p>It's your first visit! Welcome!</p>
<?php } ?>
  </body>
</html>