<?php

$name = isset($_POST['txtName']) ? $_POST['txtName'] : '';
setcookie("name", $name, time() + 3600);

header('Location: welcome.php');


