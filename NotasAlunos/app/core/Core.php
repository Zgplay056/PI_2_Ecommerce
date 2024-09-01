<?php

class Core {

    public function  start($urlGet) {
        $acao = 'index'; //pega o index por primeiro

        if(isset($urlGet['pagina'])) {
            $controller = ucfirst($urlGet['pagina'] . "Controller"); //coloca pagina como parametro na url, e o nome do controler em
            # letra maiuscula como parametro do metodo que vai ser chamado
        } else {
            $controller = 'HomeController';
        }
       
        if(!class_exists($controller)) { //class_exists verifica se a classe existe, isset é qualquer coisa
            $controller = 'ErroController';
        }
        // echo $controller;
        call_user_func_array(array(new $controller, $acao), array()); //chama o controler e o metodo
    }
}
?>
