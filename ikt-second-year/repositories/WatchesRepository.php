<?php

/**
 * Class WatchesRepository
 */
class WatchesRepository extends Db {


    /**
     * function create - create a new item in the database which name is 'shoes'
     * @param $data
     * @return bool
     */
    public function create($data){
        $sql = "
        INSERT INTO watches(watch_id,brand,description,model,rating,price,image)
        VALUES (NULL,:brand, :description, :model, :rating, :price, :image);
        ";

        /**
         * Connect to the database and prepare to execute sql queries
         */
        $stmt= $this->conn->prepare($sql);
        $stmt->bindValue(":brand", $data["brand"],PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"],PDO::PARAM_STR);
        $stmt->bindValue(":model", $data["model"],PDO::PARAM_STR);
        $stmt->bindValue(":rating", $data["rating"],PDO::PARAM_INT);
        $stmt->bindValue(":price", $data["price"],PDO::PARAM_INT);
        $stmt->bindValue(":image", $data["image"],PDO::PARAM_STR);
        return $stmt->execute();
    }


    /**
     * Get all items form the database from table shoes
     */
    public function getAll() {
        $sql = "
            SELECT * FROM watches
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllByTopic($topic){
        $sql = "
        SELECT * FROM watches
        WHERE brand LIKE CONCAT('%',:topic,'%') OR
              description LIKE CONCAT('%',:topic,'%') OR
              model LIKE CONCAT('%',:topic,'%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", $topic, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Get certain item with id = id
     * @param $watch_id
     * @return mixed
     */
    public function getById($watch_id){
        $sql = "
        Select * FROM watches WHERE watch_id = :watch_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":watch_id", $watch_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param $data
     * @return bool
     * update an item in table shoes
     */
    public  function update($data){
        $sql = "
            UPDATE 
            watches 
            SET
                brand = :brand,
                description = :description,
                model = :model,
                rating = :rating,
                price = :price,
                image = :image
               

                WHERE watch_id = :watch_id
      ";

        $stmt= $this->conn->prepare($sql);
        $stmt->bindValue(":watch_id", $data["watch_id"],PDO::PARAM_INT);
        $stmt->bindValue(":brand", $data["brand"],PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"],PDO::PARAM_STR);
        $stmt->bindValue(":model", $data["model"],PDO::PARAM_STR);
        $stmt->bindValue(":rating", $data["rating"],PDO::PARAM_INT);
        $stmt->bindValue(":price", $data["price"],PDO::PARAM_INT);
        $stmt->bindValue(":image", $data["image"],PDO::PARAM_STR);
        return $stmt->execute();
    }

    /**
     * @param $watch_id
     * @return bool
     * delete an item from table shoes where id = id
     */
    public function delete($watch_id){
        $sql = "
        DELETE FROM watches 
            WHERE watch_id = :watch_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":watch_id", $watch_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}