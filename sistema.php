<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema salarial</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="formulario">
<body>
<h1>Calculadora de Pagamento</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="n_vendedor">Nome do Vendedor:</label><br>
        <input type="text" id="n_vendedor" name="n_vendedor" placeholder="Insira seu nome" style="width: 300px; height: 13px" required><br>
        <h3>Vendas da semanas</h3>
        <?php for ($i = 1; $i <= 4; $i++) { ?>
        <label for="semana<?php echo $i; ?>">Semana <?php echo $i; ?>:</label><br>
        <input type="number" id="semana<?php echo $i; ?>" name="semana<?php echo $i; ?>" style="width: 300px; height: 13px" required><br><br>
    <?php } ?>
   
       
        <label for="Vendas_total_mes">Vendas total do mês:</label><br>
        <input type="number" id="Vendas_total_mes" name="Vendas_total_mes" style="width: 300px; height: 13px" required><br><br>
       
        <input type="submit" value="Calcular">
    </form>
    </div>
    
 <div class="mensagem">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['n_vendedor'], $_POST['Vendas_total_mes'])) {
            //Pega os valores enviados pelo formulário
            $n_vendedor = $_POST['n_vendedor'];
            $vendas_semanais = [];
            for ($i = 1; $i <= 4; $i++) {
                $vendas_semanais[] = $_POST['semana' . $i];
            }
            $Vendas_total_mes = $_POST['Vendas_total_mes'];
             // Cria variáveis
            $salario_minimo = 1927.02;
            $meta_semanal = 20000;
            $meta_mensal = 80000;
            $b_semanal = 0;
            $b_mensal = 0;
           // Calcula o bônus semanal
           //foreach para iterar sobre o array $vendas_semanais
           // $vendas_semanais fica todas semanas do mes
            foreach ($vendas_semanais as $vendas_semanal) {
                if ($vendas_semanal >= $meta_semanal) {
                    $b_semanal += ($vendas_semanal - $meta_semanal) * 0.05; 
                    $b_semanal += $meta_semanal * 0.01; 
                }
            }
           // Calcula o bônus mensal
            if ($Vendas_total_mes >= $meta_mensal) {
                $sobre_semanal = $Vendas_total_mes - $meta_mensal;
                $b_mensal = $sobre_semanal * 0.1; 
            }
           // Calcula o salário final
            $salario_final = $salario_minimo + $b_semanal + $b_mensal;
           
             // Exibe o resultado
            echo "<div class='result'>";
            echo "<p><strong>Olá $n_vendedor,</strong> abaixo esta o seu salario baseado nas metas alcançadas.</p>";
            echo "<h3>Salário Final: R$ " . number_format($salario_final, 2) . "</h3>";
            echo "</div>";
        }
    }
    ?>
    </div>
</body>
</html>
