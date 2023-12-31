<?php
    class usuarioModel{
        private $PDO;

        public function __construct(){
            include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
            require_once('./dao/database.php');
            $data = new dataConex();
            $this->PDO = data->conexion();
        }

        public function listar() {
              $sql = 'SELECT * FROM usuarios ORDER BY idUsuario';
              $statement = $this->PDO->prepare($sql);
              return ($statement->execute()) ? $statement->fetchAll(): false;
        }

        public function buscar(){
            $sql = 'SELECT * FROM usuarios WHERE alias=usuario';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':usuario',$usuario);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }
?>