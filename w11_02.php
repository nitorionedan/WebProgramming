<?php

// 変数の受け取り
$height = $_POST['height'];
$weight = $_POST['weight'];
$sex = $_POST['sex'];

// BMI
$height /= 100.0;
$bmi = CalBMI($height, $weight);
$bmi = round($bmi, 1);

// 体型
$style = CheckBodyStyle($sex, $bmi);

// 結果表示
print "あなたのBMIは...". $bmi. "です！<br/>";
print "体型は...". $style. "です！<br/>";

// BMIの計算
function CalBMI($height, $weight)
{
    $bmi = $weight / ($height * $height);
    return $bmi;
}

// 体型チェック
function CheckBodyStyle($sex, $bmi)
{
    if($sex === "Female")
    {
        if($bmi < 21)   return "痩せ型";
        else if($bmi < 23)  return "標準";
        else if($bmi < 30)  return "プチ肥満";
        else return "肥満";  
    }
    else
    {
        if($bmi < 18.5)   return "痩せ型";
        else if($bmi < 20)  return "標準";
        else if($bmi < 30)  return "プチ肥満";
        else return "肥満";  
    }
}

?>