<h1> teste_gigapixel <h1>

<h2>O teste consiste na criação de um sistema CRUD simples utilizando PHP.
Para o banco de dados, escolhi o MySQL. <h2>

<h1> Index.php <h1>
<h2>Na index.php, criei um menu muito básico apenas para navegar entre os arquivos.
Além disso
 
<h1>Config </h1>
<h2> esse arquivo faz nossa conexão e comunicação entre o banco de dados.<h2>

<h1> Cadastro.php <h1>
<h2> Este arquivo recebe e envia o formulário com os inputs do usuário para a salvar_usuario.<h2>
 
<h1> Debitar.php e depositar.php <h1>
<h2>Os dois arquivos tem a mesma estrutura, recebem um nome e fazem o cálculo de saldo - valor(débito) ou saldo + valor (depósito)</h2>
 
<h1> editar_usuario.php <h1>
 <h2> Este script encontra o usuário por uma consulta sql simples e tem os campos para edição de dados da tabela pessoa. </h2>

 <h1> listar_usuario.php <h1>
 <h2> Ao ser chamado, o arquivo coleta todos os dados do BD e os exibe. Possui uma estrutura de tabela para melhor visualização e também os botões que redirecionam para os comandos CRUD. </h2>
  
  <h1> salvar_usuario.php <h1>
 <h2> Recebe uma [ação] como parâmetro para um switch que vai receber dados e executar as operações CRUD </h2>
   
  
   
   
   **feito com base em https://www.youtube.com/watch?v=BSqtIw_hW8M**
