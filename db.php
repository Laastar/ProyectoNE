<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'ne2021'
) or die(mysqli_erro($mysqli));

?>