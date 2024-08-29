<?php

echo $this->layout("_theme");




include_once('Config.php')
$sql = "SELECT * FROM produtos ORDER BY id DESC";
$result = $conexao->query($sql);
print_r($result);

