<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'admin',
  'mipassword',
  'Bingo'
) or die(mysqli_erro($mysqli));

?>
