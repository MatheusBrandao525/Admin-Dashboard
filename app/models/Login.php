<?php

require_once 'core/Conexao.php';
require_once 'app/controllers/UsuarioController.php';

class Login
{
    private $email;
    private $senha;


    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function validarLogin()
    {

        $usuarioController = new UsuarioController();
        $usuario = $usuarioController->buscarUsuarioPorEmail($this->email);

        if ($usuario && $this->senha == $usuario['senha']) {
            // Inicia a sessão
            session_start();

            // Define a variável de sessão ID
            $_SESSION['ID'] = $usuario['id'];

            // Redireciona para a página de home (ajuste a rota conforme necessário)
            header('location:/Admin-Dashboard/home');
            exit;
        } else {
            // Login falhou
            echo 'Usuário não localizado!';
            return false;
        }
    }
}
