<!DOCTYPE html>
<html lang=pt-br>

<head>
    <meta charset="UTF-8">
    <title>Calculadora title</title>
</head>

<body>
    <h1>Projeto Calculadora</h1>
    <form method="post" action="calcular.php">
        Valor1 : <input type="text" name="valor1"><br> 
        Valor2 : <input type="text" name="valor2"><br>
        <br>
        <select name = "operacoes">
            <option>
                Selecione aqui
            </option>
            <option>
                Soma
            </option>
            <option>
                Subtração
            </option>
            <option>
                Multiplicação
            </option>
            <option>
                Divisão
            </option>
            <option>
                Exponencial
            </option>
        </select>
        <br> <input type="submit" value="Calcular">
    </form>
</body>

</html>