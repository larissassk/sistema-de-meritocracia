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


## Valores Definidos pela empresa explicar
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

## Função de cada linguagem 

 **Formulário HTML:** O código começa com um formulário HTML onde os usuários podem inserir informações, como o nome do vendedor, vendas semanais para cada uma das quatro semanas e vendas totais do mês.

**Processamento PHP:** Após o envio do formulário (quando o método de requisição é POST), o PHP processa os dados enviados. Ele verifica se os campos do nome do vendedor e as vendas totais do mês foram preenchidos. Em seguida, ele calcula o salário final do vendedor com base nas vendas semanais e mensais.

**Cálculo do Salário:** O código PHP define algumas variáveis, como o salário mínimo, metas semanais e mensais de vendas e bônus semanal e mensal. Ele itera sobre as vendas semanais para calcular o bônus semanal, adicionando um bônus extra se as vendas excederem a meta semanal. Em seguida, verifica se as vendas totais do mês atingiram a meta mensal e calcula o bônus mensal, se aplicável. Por fim, calcula o salário final somando o salário mínimo com os bônus semanal e mensal.

**Exibição do Resultado:** O resultado do cálculo é exibido abaixo do formulário, mostrando o nome do vendedor e o salário final formatado em reais (R$).

- Esse código permite calcular o salário final de um vendedor com base nas vendas semanais e mensais, aplicando bônus de acordo com metas predefinidas.

### Explicação das Contas



### 🎨 Estilizando
- Foi usada a paleta de *cor nº 45* do site Mambo Mambo, que usa tons de amarelo, verde e azul. Esta combinação transmite uma sensação tropical e descontraída. [Ver paleta](https://www.canva.com/pt_br/aprenda/cores-para-sites-50-paginas-impactantes/)


### 📚 Referências

- [Piso Regional do Paraná](https://www.aen.pr.gov.br/Noticia/Maior-do-Brasil-governador-confirma-novo-Piso-Regional-que-vai-de-R-18-mil-R-21-mil#:~:text=Na%20primeira%2C%20que%20contempla%20os,de%20R%24%201.927%2C02/)
[PDF Contexto]()

## 👩‍💻 Feito por:

**Larissa Manrique**
- GitHub: [larissassk](https://github.com/larissassk)
- LinkedIn: [Larissa Manrique](https://www.linkedin.com/in/larissa-manrique/)
