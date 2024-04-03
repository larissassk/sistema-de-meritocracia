<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema salarial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <h1>Calculadora de Pagamento</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label for="n_vendedor">Nome do Vendedor:</label><br>
            <input type="text" id="n_vendedor" name="n_vendedor" placeholder="Insira seu nome" required><br>
        
            <?php for ($conta = 1; $conta <= 4; $conta++) { ?>
                <label for="semana<?php echo $conta; ?>">Semana <?php echo $conta; ?>:</label><br>
                <input type="number" id="semana<?php echo $conta; ?>" name="semana<?php echo $conta; ?>" required><br><br>
            <?php } ?>
        
            <label for="Vendas_total_mes">Vendas total do mês:</label><br>
            <input type="number" id="Vendas_total_mes" name="Vendas_total_mes" placeholder="Insira o total de vendas do mês" required><br><br>
        
            <input type="submit" value="Calcular">
        </form>
    </div>

    <div class="mensagem">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['n_vendedor'], $_POST['Vendas_total_mes'])) {
                $n_vendedor = $_POST['n_vendedor'];
                $vendas_semanais = [];
                for ($conta = 1; $conta <= 4; $conta++) {
                    $vendas_semanais[] = $_POST['semana' . $conta];
                }
                $Vendas_total_mes = $_POST['Vendas_total_mes'];

                // Cálculo dos bônus
                $salario_minimo = 1927.02;
                $meta_semanal = 20000;
                $meta_mensal = 80000;
                $b_semanal = 0;
                $b_mensal = 0;

                foreach ($vendas_semanais as $vendas_semanal) {
                    if ($vendas_semanal >= $meta_semanal) {
                        $b_semanal += ($vendas_semanal - $meta_semanal) * 0.05;
                        $b_semanal += $meta_semanal * 0.01;
                    }
                }

                if ($Vendas_total_mes >= $meta_mensal) {
                    $sobre_semanal = $Vendas_total_mes - $meta_mensal;
                    $b_mensal = $sobre_semanal * 0.1;
                }

                // Salário final
                $salario_final = $salario_minimo + $b_semanal + $b_mensal;
            
                // Exibição do resultado
                echo "<div class='result'>";
                echo "<p><strong>Olá $n_vendedor,</strong> abaixo está o seu salário baseado nas metas alcançadas.</p>";
                echo "<h3>Salário Final: R$ " . number_format($salario_final, 2) . "</h3>";
                echo "<p>Bônus Semanal: R$ " . number_format($b_semanal, 2) . "</p>";
                echo "<p>Bônus Mensal: R$ " . number_format($b_mensal, 2) . "</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
