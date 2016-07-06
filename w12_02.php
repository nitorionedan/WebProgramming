<?php

if(isset($_POST["item0"]))
{
    $num_item[0] = $_POST["num0"];
}
else
{
    $num_item[0] = 0;
}

$t_price = 0;
$price_item = array(2800, 5300);

for($i = 0; $i < 2; $i++)
{
    $t_price += $num_item[$sum] * $price_item[$i];
}

$zeikomi = floor($t_price * 1.08);