<?php

$recepient = "webdev.dmitry@gmail.com";
$siteName = "Reutovsky.ru";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\" ";
mail($recepient, $pagetitle, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>