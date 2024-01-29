<?php

require_once 'app/models/Login.php';
require_once 'app/controllers/UsuarioController.php';

class LoginController {
    public function telaLogin() {
        // Lógica para exibir a página inicial
        include ROOT_PATH . '/app/views/login.php';
    }

    public function processarLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Cria uma instância do modelo de Login
            $login = new Login($email, $senha);

            if ($login->validarLogin()) {
                // A lógica de início de sessão e redirecionamento é tratada em validarLogin()
            } else {
                // Se as credenciais estiverem incorretas, mostre uma mensagem de erro
                echo 'Login inválido!';
                // Inclui novamente a tela de login com uma mensagem de erro
               /*  include ROOT_PATH . '/app/views/login.php'; */
            }
        }
    }
}
