<?php

$name = "やでんしょうへい";

print "俺は" . $name . "だ！<br/>";

$name = mb_convert_kana($name, "KVC", "utf-8");

// 文字コード確認
// print mb_internal_encoding();

print "オレハ" . $name . "ダ！<br/>";

?>