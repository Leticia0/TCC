<?php


class Conexao{

    const HOST = "localhost";
    const NOMEBANCO = "avalie_aqui";
    const USUARIO = "aluno";
    const SENHA = "aluno";

    public static $conexao = null;

    public static function getConexao()
    {
        try{
            if (self::$conexao == null){

                //Conexão com o banco de dados usando o objeto PDO
                self::$conexao = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NOMEBANCO. ";charset=utf8" , self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            //Me retorne a conexão
            return self::$conexao;
        }catch (PDOException $e){
            die ("Falha ".$e->getMessage());
        }

    }
}
