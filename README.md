# sistema-de-meritocracia
# Sistema de Salário
- O Sistema de Salário para Vendedores simplifica o cálculo do salário com base nas metas de vendas semanais e mensais. Os vendedores inserem seus nomes e metas de vendas em um formulário. O script PHP realiza os cálculos e mostra o salário final na página. 

## O que é esse sistema?
Este sistema de salário é baseado em metas para vendedores e possui as seguintes regras:

Cada vendedor tem um salário mínimo garantido.
Cada vendedor tem uma meta de vendas semanal, totalizando uma meta mensal.
Se um vendedor ultrapassar a meta semanal, ele receberá um bônus sobre o excedente da meta semanal.
Se um vendedor exceder a meta mensal, ele receberá um bônus sobre o excedente da meta mensal, desde que tenha cumprido todas as metas semanais.
Os valores dos bônus são os seguintes:

Para o cumprimento da meta semanal: 1% sobre o valor da meta.
Para o excedente da meta semanal: 5% sobre o excedente da meta semanal.
Para o excedente da meta mensal: 10% sobre o excedente da meta mensal.
Por exemplo, se um vendedor atingir ou ultrapassar as metas todas as semanas do mês, ele receberá bônus calculados conforme descrito acima. O salário final do vendedor será o salário mínimo mais os bônus calculados.

Caso um vendedor não consiga bater ao menos uma meta semanal, ele perderá o direito ao bônus sobre o excedente da meta mensal, recebendo apenas o bônus sobre o excedente da meta semanal nas semanas em que conseguir este feito.

O sistema a ser entregue solicitará o nome do vendedor, os valores das metas semanal e mensal, calculará o salário final com base nessas informações e exibirá o resultado ao usuário para efetuar o pagamento do salário.

Este sistema automatiza o cálculo do salário dos vendedores, oferecendo uma maneira justa e transparente de determinar a compensação com base no desempenho em relação às metas estabelecidas.

## Funcionalidades

- Formulário para que o usuário (vendedor) possa inserir o (nome, vendas semanais e vendas mensais).
- Cálculo automático gerado pelas metas adicionadas do salário final.
- Exibição do resultado do salário ou mensagem de erro caso os dados inseridos não estejam corretos ou de acordo com as condições.


## Valores Definidos pela empresa
- Metas Semanais: $20,000 
- Metas Mensais: $80,000
- Salário Mínimo: $1927.02
- Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
- Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
- Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.

### Exemplo de Funcionamento 

Aqui está um exemplo visual do sistema em funcionamento, demonstrando diferentes cenários com relação às metas de vendas:

#### Abaixo da Meta

![Abaixo da Meta](link_)

Neste exemplo, o vendedor não alcançou a meta semanal. Portanto, seu salário final será composto apenas pelo salário mínimo, já que ele não é elegível para receber nenhum bônus por ultrapassar as metas.

#### Na Meta

![Na Meta](link_)

Neste caso, o vendedor atingiu exatamente a meta semanal. Assim, ele receberá o salário mínimo mais o bônus correspondente ao cumprimento da meta semanal.

#### Acima da Meta

![Acima da Meta](link_)

Aqui, o vendedor superou a meta semanal estabelecida. Ele receberá o salário mínimo, o bônus pelo cumprimento da meta semanal e também o bônus pelo excedente da meta semanal.

### Explicação das Contas

- **Salário Final = Salário Mínimo + Bônus por Cumprimento da Meta Semanal + Bônus por Excedente da Meta Semanal + Bônus por Excedente da Meta Mensal**

    - **Salário Mínimo:** Valor fixo definido pela empresa 1927,02
    - **Bônus por Cumprimento da Meta Semanal:** 1% do valor da meta semanal.
    - **Bônus por Excedente da Meta Semanal:** 5% sobre o valor excedente da meta semanal.
## Linguagens Utilizadas:
- HTML Formulário:
O formulário permite que o usuário insira o nome do vendedor, as metas de vendas semanais para cada uma das quatro semanas e o total de vendas mensais. Cada entrada é um campo de texto ou número com um rótulo descritivo.

- PHP:
O script PHP é acionado quando o formulário é enviado (método POST). Ele obtém os dados do formulário usando a variável global $_POST. Em seguida, ele define algumas variáveis com valores fixos, como a meta semanal e mensal, e o salário mínimo. Para cada semana, ele verifica se a meta semanal foi alcançada e calcula o bônus com base nisso. Se a venda semanal exceder a meta mensal, um bônus adicional é calculado sobre o excedente. Finalmente, calcula o salário final adicionando o salário mínimo aos bônus de cada semana. O resultado é exibido na página como uma mensagem indicando o salário final do vendedor.

- CSS:
O código CSS define o estilo visual do formulário e da mensagem de saída. Ele configura o layout, cores, fontes e estilos dos elementos HTML para uma melhor apresentação.

### 🎨 Estilizando
- Foi usada a paleta de *cor nº 45* do site Mambo Mambo, que usa tons de amarelo, verde e azul. Esta combinação transmite uma sensação tropical e descontraída. [Ver paleta](https://www.canva.com/pt_br/aprenda/cores-para-sites-50-paginas-impactantes/)


### 📚 Referências

- [Piso Regional do Paraná](https://www.aen.pr.gov.br/Noticia/Maior-do-Brasil-governador-confirma-novo-Piso-Regional-que-vai-de-R-18-mil-R-21-mil#:~:text=Na%20primeira%2C%20que%20contempla%20os,de%20R%24%201.927%2C02/)
[PDF Contexto]()

## 👩‍💻 Feito por:

**Larissa Manrique**
- GitHub: [larissassk](https://github.com/larissassk)
- LinkedIn: [Larissa Manrique](https://www.linkedin.com/in/larissa-manrique/)
