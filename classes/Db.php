<?php

class Db
{
    public $conn, $tableName;
    function __construct($inputTableName)
    {
        $this->tableName = $inputTableName;
        $hostname = "localhost";
        $userName = "kyaw";
        $password = "0000";
        $database = "CRUD";
        $this->conn = mysqli_connect($hostname, $userName, $password, $database);
    }

    public function create(array $columns): object
    {
        $sql = "INSERT INTO " . $this->tableName . " (" . join(",", array_keys($columns)) . ") VALUES ('" . join("','", array_values($columns)) . "');";
        $query = mysqli_query($this->conn, $sql);

        $createSql = "SELECT * FROM " . $this->tableName . " WHERE id=" . $this->conn->insert_id . "";
        $createQuery = mysqli_query($this->conn, $createSql);
        $row = mysqli_fetch_object($createQuery);
        return $row;
    }

    public function index(): array
    {
        $sql = "SELECT * FROM " . $this->tableName;
        $query = mysqli_query($this->conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function show(int $id): object
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE id=$id";
        $query = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_object($query);
        return $row;
    }

    public function delete(int $id): void
    {
        $sql = "DELETE FROM " . $this->tableName . " WHERE id=$id";
        $query = mysqli_query($this->conn, $sql);
        print("Deleted Successfully");
    }

    public function update(int $id, array $columns): void
    {
        $changes = "";
        foreach ($columns as $key => $value) {
            $changes .= "".$key."='".$value."',";
        }        
        $changesArr = explode(",",$changes);
        array_pop($changesArr);
        $newStr = implode(",",$changesArr);        

        $sql = "UPDATE ".$this->tableName." SET ".$newStr." WHERE id=$id";        
        $query  = mysqli_query($this->conn,$sql);
        print("Updated Successfully");
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
}
