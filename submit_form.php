<?php

if(
    isset($_POST["submit"]) &&
    (!isset($_POST["first_number"]) ||
    !isset($_POST["second_number"]) ||
    !isset($_POST["operation"]))
){
    echo "Veuillez compléter tous les champs";
} elseif(
    isset($_POST["submit"]) &&
    (empty($_POST["first_number"]) ||
    empty($_POST["second_number"]) ||
    empty($_POST["operation"]))
){
    echo "Veuillez remplir tous les champs";
} else{

    $firstNumber = (float)strip_tags($_POST["first_number"]);
    $secondNumber = (float)strip_tags($_POST["second_number"]);
    $operation = strip_tags($_POST["operation"]);
    $result = null;
    switch($operation){
        case "add":
            $result = $firstNumber+$secondNumber;
            break;
        case "substract":
            $result = $firstNumber-$secondNumber;
            break;
        case "multiply":
            $result = $firstNumber*$secondNumber;
            break;
        case "divide":
            if($secondNumber == 0){
                echo "On ne peut pas diviser par 0";
                break;
            }
            $result = $firstNumber/$secondNumber;
            break;
        default:
            echo "Chosissez une opération correcte !";
            break;
    }
    session_start();
    $_SESSION["result"] = $result;
    header("Location: index.php");

}