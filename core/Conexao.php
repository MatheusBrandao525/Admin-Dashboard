<?php

class Conexao
{
    // Propriedade para armazenar a única instância da classe (Singleton)
    private static $instance = null;

    // Propriedade para armazenar a conexão PDO com o banco de dados
    private $conexao;

    // Propriedades para configurações de conexão com o banco de dados
    private $host = 'localhost';
    private $dbname = 'sis_admin';
    private $user = 'root';
    private $password = '1exagon1@';

    // Construtor privado para prevenir a criação direta de objetos desta classe
    private function __construct()
    {
        try {
            // Cria uma nova conexão PDO usando os atributos da classe
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);

            // Configura o PDO para lançar exceções em caso de erro
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Em caso de erro na conexão, encerra a execução e mostra a mensagem de erro
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    // Método estático para acessar a instância única da classe (Singleton)
    public static function getInstance()
    {
        // Se a instância ainda não foi criada, cria uma nova
        if (!self::$instance) {
            self::$instance = new Conexao();
        }
        // Retorna a instância única
        return self::$instance;
    }

    // Método para obter a conexão PDO
    public function getConexao()
    {
        return $this->conexao;
    }
}
