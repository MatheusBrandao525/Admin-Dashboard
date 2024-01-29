<?php

require_once 'core/Conexao.php';

class UsuarioController {
    public function buscarUsuarioPorEmail($email) {
        $conexao = Conexao::getInstance()->getConexao();
        
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function buscarDadosUsuarioPorId($id)
    {
        $conexao = Conexao::getInstance()->getConexao();

        $sql = 'SELECT * FROM usuarios WHERE id = :idUsuario';
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':idUsuario', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
