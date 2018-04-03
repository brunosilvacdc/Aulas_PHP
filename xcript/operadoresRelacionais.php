<?php

echo "<strong><u>Igualdade</u></strong>";
echo "<hr>";
var_dump(10==10);
echo "<hr>";
var_dump(!10==10);
echo "<hr>";
var_dump(10==11);
echo "<hr>";
var_dump(11=="11");
echo "<hr>";
echo "<hr>";
echo "<strong><u>Diferente</u></strong>";
echo "<hr>";
var_dump(11 !="11");
echo "<hr>";
var_dump(11 != 10);
echo "<hr>";
var_dump(11 <> 11);
echo "<hr>";
var_dump((11 <> 11) and (11 != 11));
echo "<hr>";
echo "<hr>";
echo "<strong><u>Identico</u></strong>";
echo "<hr>";
var_dump(11 === 11);
echo "<hr>";
var_dump(11 === "11");
echo "<hr>";
var_dump(11 !== 11);
echo "<hr>";
var_dump(11 !== "11");
echo "<hr>";
echo "<hr>";
echo "<strong><u>Menor e Maior</u></strong>";
echo "<hr>";
var_dump(11 < 11);
echo "<hr>";
var_dump(11 > 11);
echo "<hr>";
var_dump(11 <= 11);
echo "<hr>";
echo "menor ou igual <br>";
var_dump(11 >= 15);
echo "<hr>";


