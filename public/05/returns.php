<?php

function mijnFunction()
{
    return 1;
}

$mijnFunctionResultaat = mijnFunction();
echo $mijnFunctionResultaat;
echo "<br>";

function returnVariable()
{
    $result = rand();
    return $result;
}

$returnVariableResultaat = returnVariable();
echo $returnVariableResultaat;
echo "<br>";
echo returnVariable();
echo "<br>";
echo returnVariable();
echo "<br>";

?>