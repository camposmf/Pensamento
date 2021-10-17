<?php
  namespace Api\models;

  Class Pensamento {
    private static function connection(){
      $connection = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASSWORD);
      $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      return $connection;
    }

    public static function create($data){
      
      $connection = self::connection();

      $sql = 'INSERT INTO tb_pensamento (nm_username, ds_pensamento, ds_gpsocial) VALUES (:nm, :pt, :gp)';
      $statement = $connection->prepare($sql);

      $statement->bindValue(':nm', $data['nm_username']);
      $statement->bindValue(':pt', $data['ds_pensamento']);
      $statement->bindValue(':gp', $data['ds_gpsocial']);

      $statement->execute();

      if($statement->rowCount() > 0)
        return "Pensamento inserido com sucesso";
      else
        throw new \Exception("Falha ao inserir novo Pensamento");
    }

    public static function update($data, $id){
      $connection = self::connection();

      $sql = 'UPDATE tb_pensamento SET nm_username = :nm, ds_pensamento = :pt, ds_gpsocial = :gp WHERE id_pensamento = :id';
      $statement = $connection->prepare($sql);

      $statement->bindValue(':id', $id);
      $statement->bindValue(':nm', $data['nm_username']);
      $statement->bindValue(':pt', $data['ds_pensamento']);
      $statement->bindValue(':gp', $data['ds_gpsocial']);
      $statement->execute();

      if($statement->rowCount() > 0)
        return "Pensamento alterado com sucesso";
      else
        throw new \Exception("Falha ao alterar um pensamento");
    }

    public static function delete($id){
      $connection = self::connection();

      $sql = 'DELETE FROM tb_pensamento WHERE id_pensamento = :id';
      $statement = $connection->prepare($sql);
      $statement->bindValue(':id', $id);
      $statement->execute();

      if($statement->rowCount() > 0)
        return "Pensamento deletado com sucesso";
      else
        throw new \Exception("Falha ao deletar Pensamento");
    }
    
    public static function list(){
      $connection = self::connection();

      $sql = 'SELECT * FROM tb_pensamento';
      $statement = $connection->prepare($sql);
      $statement->execute();

      if($statement->rowCount() > 0)
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
      else
        throw new \Exception("Nenhum Pensamento encontrado!");
    }

    public static function listByUsername($username){
      $connection = self::connection();

      $sql = 'SELECT * FROM tb_pensamento WHERE nm_username = :nm';
      $statement = $connection->prepare($sql);
      $statement->bindvalue(':nm', $username);
      $statement->execute();

      if($statement->rowCount() > 0)
        return $statement->fetch(\PDO::FETCH_ASSOC);
      else
        throw new \Exception("Nenhum username encontrado!");
    }
  }
?>