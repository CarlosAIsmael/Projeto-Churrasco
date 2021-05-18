<?php
include ("./calculadora.php");

if ($_POST) {

    $v1 = $_POST['valor1'];
    $v2 = $_POST['valor2'];
    $o = $_POST['operacoes'];

        if ($o == 'Soma') {
            $total = $v1 + $v2;
            echo $total;
        }
            else if ($o == 'Subtração') {
                $total = $v1 - $v2;
                echo $total;
            }
            else if ($o == 'Multiplicação'){
                $total = $v1 * $v2;
                echo $total;
            }
            else if ($o == 'Divisão') {
                $total = $v1 / $v2;
                echo $total;
            }
            else if ($o == 'Exponencial') {
                $total = $v1 ** $v2;
                echo $total;
            }
            else if ($o == 'Selecione aqui') {
                echo "Selecione algum operador";
            }

        }   



    





?>
