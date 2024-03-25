<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Salário</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #465C8B;
            font-family: Arial, sans-serif; /* Fonte padrão */
        }

        .formulario {
            background-color: #DFDCE3;
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            border: 2px solid #93C178;
            border-radius: 5px;
        }

        .formulario h1 {
            color: #465C8B; /* Cor alterada para destacar o título */
            text-align: center;
            margin-bottom: 20px;
        }

        .formulario label {
            display: block;
            margin-bottom: 5px;
            color: #333333; /* Cor de texto padrão */
        }

        .formulario input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #cccccc; /* Cor da borda padrão */
            border-radius: 3px;
            font-size: 14px;
        }

        .formulario button[type="submit"] {
            background-color: #93C178;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px 0;
            border-radius: 3px;
        }

        .formulario button[type="submit"]:hover {
            background-color: #465C8B; 
        }

        .mensagem {
            background-color: #DFDCE3;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #93C178;
            border-radius: 5px;
            color: #333333;
            text-align: center;
        }
    </style>
</head>
<body>
<form class="formulario" method="post">
    <h1>Sistema de Pagamento Baseado em Metas</h1>

    <label for="vendedor">Nome do Vendedor:</label>
    <input type="text" id="vendedor" name="vendedor" required><br><br>

    <label for="vsemanal1">Meta semana 1:</label>
    <input type="number" id="vsemanal1" name="vsemanal1" min="0" step="0.01" required><br><br>

    <label for="vsemanal2">Meta semana 2:</label>
    <input type="number" id="vsemanal2" name="vsemanal2" min="0" step="0.01" required><br><br>

    <label for="vsemanal3">Meta semana 3:</label>
    <input type="number" id="vsemanal3" name="vsemanal3" min="0" step="0.01" required><br><br>

    <label for="vsemanal4">Meta semana 4:</label>
    <input type="number" id="vsemanal4" name="vsemanal4" min="0" step="0.01" required><br><br>

    <label for="vendas_mensais">Vendas Mensais:</label>
    <input type="number" id="vendas_mensais" name="vendas_mensais" min="0" step="0.01" required><br><br>

    <button type="submit">Calcular</button>
</form>

    <div class="mensagem" >
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $vendedor = $_POST["vendedor"];
    $vsemanal1 = $_POST["vsemanal1"];
    $vsemanal2 = $_POST["vsemanal2"];
    $vsemanal3 = $_POST["vsemanal3"];
    $vsemanal4 = $_POST["vsemanal4"];
    $vendas_mensais = $_POST["vendas_mensais"];

    // Valores fixos
    $meta_semanal = 20000; // Meta por semana
    $meta_mensal = 80000; // Meta por mês
    $salario_minimo = 1927.02; // Salário mínimo

    // Inicializar variáveis para armazenar os bônus de cada semana
    $bonus1 = 0;
    $bonus2 = 0;
    $bonus3 = 0;
    $bonus4 = 0;

    // Testa a meta semanal na semana 1
    if ($vsemanal1 >= $meta_semanal) {
        $bonus1 = $meta_semanal * 0.01; // 1% sobre o valor da meta
        if ($vsemanal1 > $meta_mensal) {
            $bonus1 += ($vsemanal1 - $meta_mensal) * 0.05; // 5% sobre o excedente da meta semanal
        }
    }

    // Testa a meta semanal na semana 2
    if ($vsemanal2 >= $meta_semanal) {
        $bonus2 = $meta_semanal * 0.01; // 1% sobre o valor da meta
        if ($vsemanal2 > $meta_mensal) {
            $bonus2 += ($vsemanal2 - $meta_mensal) * 0.05; // 5% sobre o excedente da meta semanal
        }
    }

    // Testa a meta semanal na semana 3
    if ($vsemanal3 >= $meta_semanal) {
        $bonus3 = $meta_semanal * 0.01; // 1% sobre o valor da meta
        if ($vsemanal3 > $meta_mensal) {
            $bonus3 += ($vsemanal3 - $meta_mensal) * 0.05; // 5% sobre o excedente da meta semanal
        }
    }

    // Testa a meta semanal na semana 4
    if ($vsemanal4 >= $meta_semanal) {
        $bonus4 = $meta_semanal * 0.01; // 1% sobre o valor da meta
        if ($vsemanal4 > $meta_mensal) {
            $bonus4 += ($vsemanal4 - $meta_mensal) * 0.05; // 5% sobre o excedente da meta semanal
        }
    }

    // Calcular o salário final
    $salario_final = $salario_minimo + $bonus1 + $bonus2 + $bonus3 + $bonus4;

    // Exibir o resultado
    echo "<p>Salário final de $vendedor: R$ " . number_format($salario_final, 2, ',', '.') . "</p>";
}
?>

    </div>
</body>
</html>