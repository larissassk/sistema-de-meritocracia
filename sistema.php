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
    <h1>Sistema de Pagamento <br>Baseado em Metas</h1>
        <label for="vendedor">Nome do Vendedor:</label>
        <input type="text" id="vendedor" name="vendedor" required><br><br>

        <label for="vendas_semanais">Meta semanal:</label>
        <input type="number" id="vendas_semanais" name="vendas_semanais" min="0" step="0.01" required><br><br>

        <label for="vendas_mensais">Meta mensal:</label>
        <input type="number" id="vendas_mensais" name="vendas_mensais" min="0" step="0.01" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <div class="mensagem" >
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega os dados do formulário
        $vendedor = $_POST["vendedor"];
        $vendas_semanais = $_POST["vendas_semanais"];
        $vendas_mensais = $_POST["vendas_mensais"];

        // Valores definidos pela empresa
        $meta_semanal = 20000; // Meta semanal definida
        $meta_mensal = 80000; // Meta mensal definida
        $salario_minimo = 1927.02; // Salário mínimo definido 

        // Verifica se as vendas ultrapassaram as metas propostas

        // Pela lógica verifica se as vendas mensais são maiores que as vendas semanais
        if ($vendas_mensais > $vendas_semanais) {
            // Se vendas mensais forem maiores que as vendas semanais

            // Verifica se as vendas mensais são maiores ou iguais à meta mensal
            if ($vendas_mensais >= $meta_mensal) {
                // Calcula o valor do bônus para o excedente de meta mensal
                $bonus_excedente_mensal = ($vendas_mensais - $meta_mensal) * 0.10;
            } else {
                // Se não ultrapassar a meta mensal, não terá bônus
                $bonus_excedente_mensal = 0;
            }

            // Se vendas semanais forem maiores ou iguais à meta semanal
            if ($vendas_semanais >= $meta_semanal) {
                // Calcula o valor do bônus para o cumprimento da meta semanal
                $bonus_meta_semanal = $meta_semanal * 0.01;
                // Calcula o valor do bônus para o excedente de meta semanal
                $bonus_excedente_semanal = ($vendas_semanais - $meta_semanal) * 0.05;
            } else {
                // Se não atingir a meta semanal, não terá bônus
                $bonus_meta_semanal = 0;
                $bonus_excedente_semanal = 0;
            }

            // Calcula o salário final considerando os bônus
            $salario_final = $salario_minimo + $bonus_meta_semanal + $bonus_excedente_semanal + $bonus_excedente_mensal;

            // Exibe o resultado
            echo "<h2>Detalhes do seu Salário:</h2>";
            echo "<p>Vendedor: $vendedor</p>"; // chama a variavel para o resultado
            echo "<p>Salário Final: R$ " . number_format($salario_final, 2, ',', '.') . "</p>"; // formatação do numero
            
        } else {
            // Se vendas mensais não forem maiores que as vendas semanais (Pela logica do sistema), exibe uma mensagem de erro
            echo "<h2>Ops!</h2>";
            echo "<p>Valores inválidos.</p>";
            echo "<p>Por favor, insira valores válidos para as vendas semanais e mensais novamente.</p>";
        }
    }
    ?>
    </div>
</body>
</html>