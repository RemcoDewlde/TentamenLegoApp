<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class QueryBuilder
{
    protected $pdo;
    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function signup($data, $role){
        // query om een standaard gebruiker aan te maken
        $statement = $this->pdo->prepare("Insert into users (fname, lname, email,mobile,password,roleid) 
                                          values ('{$data["fname"]}', '{$data["lname"]}', '{$data["email"]}','{$data["mobile"]}','{$data["password"]}','{$role}') ");
        $statement->execute();
        return $statement->errorCode();
    }

    public function login($data){
        $statement = $this->pdo->prepare("Select * from users where password = '{$data["password"]}' and email = '{$data["email"]}' ");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getAll()
    {
        // select all the items from a table
        $statement = $this->pdo->prepare("Select * from legoideas ");
        $statement->execute();
        return $statement->fetchAll();
    }
    public function getAllCommentsByPost($id)
    {
        // select all the items from a table
        $statement = $this->pdo->prepare("Select * from comments where postedByWichID = '{$id}'");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function uploadidea($data,$filedestination){
        // query to insert an idea into the database
        $statement = $this->pdo->prepare("Insert into `legoideas`(name, description , step01,step02,step03,step04,step05,step06,pieces01,pieces02,pieces03,pieces04,pieces05,pieces06,img )
        values ('{$data["name"]}','{$data["description"]}','{$data["step01"]}', '{$data["step02"]}','{$data["step03"]}','{$data["step04"]}','{$data["step05"]}','{$data["step06"]}',
         '{$data["pieces01"]}','{$data["pieces02"]}','{$data["pieces03"]}', '{$data["pieces04"]}', '{$data["pieces05"]}','{$data["pieces06"]}','{$filedestination}')");
        $statement->execute();

    }

    public function getIdea($id){
        $statement = $this->pdo->prepare("Select * from `legoideas` where id = '{$id}'");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function makeComment($data){
        $statement = $this->pdo->prepare("insert into `comments` (postedByWichID, comment, postedby) 
                                          values ( '{$data["ideaId"]}', '{$data["comment"]}', '{$data["postedby"]}')");
        $statement->execute();

    }

    public function updateUser($data){
        $statement = $this->pdo->prepare("Update users set fname ='{$data["fname"]}', lname = '{$data["lname"]}', email = '{$data["email"]}', mobile = '{$data["mobile"]}' where id = '{$data["id"]}'");
        $statement->execute();

    }
    public function getUser($id){
        $statement = $this->pdo->prepare("Select * from `users` where id = '{$id}'");
        $statement->execute();
        return $statement->fetchAll();

    }

    public function editPassword($id,$password){
        $statement = $this->pdo->prepare("Update users set password = '{$password}' where id = '{$id}'");
        $statement->execute();
    }

}


















