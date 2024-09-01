<?php 
require_once '../core/Core.php'; //inclui o arquivo, já que vai ser utilizado

require_once '../controllers/HomeController.php'; // se tu esquece o computador diz: não sei de onde vc tirou essa requisição!

require_once '../controllers/ErroController.php'; 

echo "hello world"; 

// include '.\app\views\home.html'; ache o erro mais tarde

$template = file_get_contents('C:\Users\gabriel\Desktop\NotasAlunos\app\views\home.html'); //faz a requisição do home.html
// echo $template; // mostra na tela

ob_start(); //começa a pegar os dados (inicia o buffer)
    $core = new Core(); //cria um objeto core
    $core->start($_GET); //pbjeto usa a funçao start e a variavel $_GET pra saber o que o usuario esta acessando

    $saida = ob_get_contents(); //pega os dados e coloca na var 
ob_end_clean(); // encerra a tomada de dados (termina o buffer)

$tplPronto = str_replace('{{substituir}}', $saida, $template); //substitui o {{conteudo}} que seria o home.html nesse caso,
# pelo conteudo da variavel saida.
    
echo $tplPronto; // mostra na tela o novo conteudo

// $template = file_get_contents('../views/home.html'); //serve para pegar o conteudo do arquivo home.html
//esse código não funciona pq as barras sao diferentes de \ (fiquei muito tempo com o erro);
