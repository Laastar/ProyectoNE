<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "ne2021");
$query ="insert into respuestas(puntuacion, comentario)values($q_score, '$feedback_txt')";
$result = mysqli_query($conn, $query);
echo 'Muchas gracias por sus comentarios';
?>