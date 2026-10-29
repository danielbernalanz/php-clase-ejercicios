<?php
$op1 = $_POST["op1"];
$operador = $_POST["operador"];
$op2 = $_POST["op2"];
//switch ($operador) {
//    case '+':
//        $resultado = $op1 + $op2;
//        break;
//    case '-':
//        $resultado = $op1 - $op2;
//        break;
//    case '*':
//        $resultado = $op1 * $op2;
//        break;
//    case '/':
//        $resultado = $op1 / $op2;
//        break;
//    default:
//        $resultado = null;
//        print "Error";
//}
$resultado = match ($operador) {
    "+" => $op1 + $op2,
    "-" => $op1 - $op2,
    "*" => $op1 * $op2,
    "/" => $op1 / $op2,
    default => $resultado = null,
};
if ($operador != "+" && $operador != "-" && $operador != "*" && $operador != "/") {
    printf("<h1>Operador Invalido %c</h1>", $resultado);
} else{
print_r("El resultado de " . $op1 . " y " . $op2 . " es " . $resultado);
}
