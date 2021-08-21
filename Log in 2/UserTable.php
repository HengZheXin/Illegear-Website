<?php

require_once 'User.php';

class UserTable {
    private $link;
    
    public function __construct($connection) {
        $this->link = $connection;
    }

    public function insert($user) {
        if (!isset($user)) {
            throw new Exception("User required");
        }
        $sql = "INSERT INTO register(username, password) "
             . "VALUES (:username, :password)";

        $params = array(
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),

        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not save user: " . $errorInfo[2]);
        }

        $id = $this->link->lastInsertId('register');
        
        return $id;
    }

    public function delete($user) {
        if (!isset($user)) {
            throw new Exception("User required");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("User id required");
        }
        $sql = "DELETE FROM register WHERE id = :id";
        $params = array('id' => $user->getId());
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not delete user: " . $errorInfo[2]);
        }
    }

    public function update($user) {
        if (!isset($user)) {
            throw new Exception("User required");
        }
        $id = $user->getId();
        if ($id == null) {
            throw new Exception("User id required");
        }
        $sql = "UPDATE register SET password = :password WHERE id = :id";
        $params = array(
            'password' => $user->getPassword(),
            'id' => $user->getId()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not update user: " . $errorInfo[2]);
        }
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM register WHERE id = :id";
        $params = array('id' => $id);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve user: " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $username = $row['username'];
            $pwd = $row['password'];
            $user = new User($id, $username, $pwd);
        }
        return $user;
    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM register WHERE username = :username";
        $params = array('username' => $username);
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve user: " . $errorInfo[2]);
        }

        $user = null;
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();

            $pwd = $row['password'];
            $user = new User($username, $pwd);
        }
        return $user;
    }

    public function getUsers() {
        $sql = "SELECT * FROM register";
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute();
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve users: " . $errorInfo[2]);
        }

        $users = array();
        $row = $stmt->fetch();
        while ($row != null) {
            $id = $row['id'];
            $username = $row['username'];
            $pwd = $row['password'];
            $user = new User($id, $username, $pwd);
            $users[$id] = $user;

            $row = $stmt->fetch();
        }
        return $users;
    }
}

?>
