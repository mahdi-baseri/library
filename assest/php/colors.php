<?php
$conn = mysqli_connect('localhost', 'root', '', 'library');
$colors = "SELECT * FROM `colors`";
$colors_query = mysqli_query($conn, $colors);
$rowcolor = mysqli_fetch_assoc($colors_query);
$bg =  $rowcolor['bg-color'];
$panel = $rowcolor['panel-color'];
$text = $rowcolor['text-color'];
?>